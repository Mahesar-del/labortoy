<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index(){
        return view('appointment', [
            'tests' => DB::table('tests')
                ->join('services', 'tests.service_id', '=', 'services.id')
                ->where('tests.is_active', true)
                ->where('services.is_active', true)
                ->orderBy('services.name')
                ->orderBy('tests.name')
                ->select('tests.name', 'services.name as service_name')
                ->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required','string','max:80','regex:/^[\pL\s\-\']+$/u'],
            'last_name' => ['required','string','max:80','regex:/^[\pL\s\-\']+$/u'],
            'source_type' => 'required|in:patient,healthcare_provider',
            'email' => 'required|email|max:255',
            'phone' => ['required','string','regex:/^[0-9+()\-\s]{7,25}$/'],
            'appointment_type' => 'required|string|max:80',
            'date' => 'required|date|after_or_equal:today',
            'slot' => 'required|date_format:H:i',
            'service' => 'required|string|max:150',
            'additional_info' => 'nullable|string|max:1500',
        ]);
        abort_if(!in_array($data['slot'], ['00:00','02:00','04:00','06:00','08:00','10:00','12:00']), 422, 'Please select a valid two-hour time slot.');
        abort_if(DB::table('appointments')->where('appointment_at', $data['date'].' '.$data['slot'])->where('status', '!=', 'cancelled')->exists(), 422, 'This time slot has already been booked.');
        DB::table('appointments')->insert(['patient_name'=>$data['first_name'].' '.$data['last_name'],'source_type'=>$data['source_type'],'email'=>$data['email'],'phone'=>$data['phone'],'service'=>$data['service'],'appointment_at'=>$data['date'].' '.$data['slot'],'status'=>'pending','notes'=>($data['appointment_type']."\n".($data['additional_info'] ?? '')),'created_at'=>now(),'updated_at'=>now()]);
        return back()->with('success','Your appointment request has been submitted.');
    }

    public function bookedSlots(Request $request)
    {
        $request->validate(['date' => 'required|date']);
        return response()->json(DB::table('appointments')->whereDate('appointment_at', $request->date)->where('status', '!=', 'cancelled')->pluck('appointment_at')->map(function ($date) { return \Carbon\Carbon::parse($date)->format('H:i'); }));
    }
}
