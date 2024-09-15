<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first() ?? new Setting();
        return view('admin.settings', compact('setting'));
    }

    public function update(Request $request){
        $setting = Setting::first() ?? new Setting();

        if ($request->hasFile('company_logo')) {
            if($setting->company_logo && file_exists(public_path($setting->company_logo))){
                unlink(public_path($setting->company_logo));
            }

            $file = $request->file('company_logo');
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/setting/', $fileName);
            $setting->company_logo = 'uploads/setting/'. $fileName;
        }

        $setting->company_name = $request->company_name;
        $setting->company_copyright = $request->company_copyright;
        $setting->contact_no1 = $request->contact_no1;
        $setting->contact_no2 = $request->contact_no2;
        $setting->address1 = $request->address1;
        $setting->address2 = $request->address2;
        $setting->postcode = $request->postcode;
        $setting->company_email = $request->company_email;
        $setting->skype = $request->skype;

        $setting->facebook_link = $request->facebook_link;
        $setting->instagram_link = $request->instagram_link;
        $setting->linkin_link = $request->linkin_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->youtube_link = $request->youtube_link;
        $setting->tiktok_link = $request->tiktok_link;
        $setting->save();

        flash('Settings Updated Successfully')->success();
        
        return redirect()->back();
    }
}
