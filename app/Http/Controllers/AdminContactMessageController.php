<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminContactMessageController extends Controller
{
    public function index()
    {
        $this->guard();

        return view('admin-contact-messages', [
            'messages' => DB::table('contact_messages')->latest()->get(),
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $this->guard();
        $data = $request->validate(['status' => 'required|in:new,read,replied']);
        abort_unless(DB::table('contact_messages')->where('id', $id)->exists(), 404);
        DB::table('contact_messages')->where('id', $id)->update(['status' => $data['status'], 'updated_at' => now()]);

        return back()->with('success', 'Message status updated.');
    }

    public function destroy($id)
    {
        $this->guard();
        DB::table('contact_messages')->where('id', $id)->delete();

        return back()->with('success', 'Contact message deleted.');
    }

    private function guard(): void
    {
        abort_unless(Auth::check() && Auth::user()->is_admin, 403);
    }
}
