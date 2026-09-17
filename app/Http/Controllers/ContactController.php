<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $settings = DB::table('site_settings')->whereIn('key', ['contact_address', 'contact_email', 'contact_phone'])->pluck('value', 'key');
        $contact = (object) ['address' => $settings['contact_address'] ?? '5th Street, 21st Floor, New York, USA', 'email' => $settings['contact_email'] ?? 'info@example.com', 'phone' => $settings['contact_phone'] ?? '(888) 4567890'];
        return view('contact-us', compact('contact'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120', 'regex:/^[\pL\s\'\.\-]+$/u'],
            'email' => 'required|email|max:180',
            'phone' => ['required', 'string', 'max:50', 'regex:/^[0-9+()\-\s]+$/'],
            'subject' => 'required|string|max:180',
            'message' => 'required|string|max:5000',
        ]);

        DB::table('contact_messages')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => $data['subject'],
            'message' => $data['message'],
            'source' => 'contact_us',
            'status' => 'new',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->to(route('contact.index').'#contact-form')
            ->with('contact_success', 'Thank you! Your message has been sent successfully. Our team will contact you soon.');
    }
}
