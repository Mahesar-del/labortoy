<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminContactController extends Controller {
 public function edit(){ $this->guard(); $values=DB::table('site_settings')->whereIn('key',['contact_address','contact_email','contact_phone'])->pluck('value','key'); return view('admin-contact-settings',['values'=>$values,'user'=>Auth::user()]); }
 public function update(Request $request){$this->guard();$data=$request->validate(['address'=>'required|string|max:255','email'=>'required|email|max:255','phone'=>'required|string|max:80']);foreach(['contact_address'=>$data['address'],'contact_email'=>$data['email'],'contact_phone'=>$data['phone']] as $key=>$value) DB::table('site_settings')->updateOrInsert(['key'=>$key],['value'=>$value,'updated_at'=>now(),'created_at'=>now()]);return back()->with('success','Contact details updated.');}
 private function guard(){abort_unless(Auth::check()&&Auth::user()->is_admin,403);}
}
