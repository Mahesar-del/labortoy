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
}
