<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminFaqController extends Controller
{
    public function index()
    {
        $this->guard();
        return view('admin-faqs', [
            'services' => DB::table('services')->where('is_active', true)->orderBy('name')->get(),
            'faqs' => DB::table('service_faqs')->join('services', 'service_faqs.service_id', '=', 'services.id')->select('service_faqs.*', 'services.name as service_name')->latest('service_faqs.id')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->guard();
        $data = $request->validate(['service_id' => 'required|exists:services,id', 'question' => 'required|string|max:250', 'answer' => 'required|string|max:3000']);
        DB::table('service_faqs')->insert(['service_id' => $data['service_id'], 'question' => $data['question'], 'answer' => $data['answer'], 'is_active' => true, 'created_at' => now(), 'updated_at' => now()]);
        return back()->with('success', 'FAQ added and assigned to the selected service.');
    }

    public function destroy($id)
    {
        $this->guard();
        DB::table('service_faqs')->where('id', $id)->delete();
        return back()->with('success', 'FAQ removed successfully.');
    }

    private function guard() { abort_unless(Auth::check() && Auth::user()->is_admin, 403); }
}
