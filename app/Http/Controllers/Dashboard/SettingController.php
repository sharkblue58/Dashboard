<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('dashboard.setting');
    }

    public function update(SettingRequest $request){
        $data=$request->validated();
       $setting=Setting::findOrFail(1,'id');
       $setting->update($data);
       return redirect()->route('dashboard.settings');
    }
}
