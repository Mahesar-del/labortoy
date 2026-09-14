<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        if (! Auth::check()) {
            return redirect()->route('admin.login');
        }

        abort_unless(Auth::user()->is_admin, 403);

        return view('admin', [
            'user' => Auth::user(),
            'stats' => [
                'appointments' => DB::table('appointments')->whereDate('appointment_at', today())->count(),
                'messages' => DB::table('contact_messages')->where('status', 'new')->count(),
                'services' => DB::table('services')->where('is_active', true)->count(),
                'pages' => DB::table('site_pages')->where('is_published', true)->count(),
            ],
            'appointments' => DB::table('appointments')
                ->orderBy('appointment_at')
                ->limit(5)
                ->get(),
            'newMessages' => DB::table('contact_messages')->where('status', 'new')->count(),
        ]);
    }
}
