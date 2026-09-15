<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Browsershot\Browsershot;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use Bouncer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{
    public function index(Request $request)
    {
        $whatsapp = Setting::where('type', 'whatsapp')->first();
        $telegram = Setting::where('type', 'telegram')->first();
        $phone = Setting::where('type', 'phone')->first();
        $address = Setting::where('type', 'address')->first();
        $business_hours = Setting::where('type', 'business_hours')->first();
        
        return view('master_setting.index', compact(
            'whatsapp',
            'telegram',
            'phone',
            'address',
            'business_hours'
        )); 

    }

    public function store(Request $request)
    {
        $request->validate([
            'whatsapp' => 'nullable|string|max:255',
            'telegram' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:1000',
            'business_hours' => 'nullable|string|max:255',
        ]);

        Setting::updateOrCreate(
            ['type' => 'whatsapp'],
            ['value' => $request->whatsapp]
        );

        Setting::updateOrCreate(
            ['type' => 'telegram'],
            ['value' => $request->telegram]
        );

        Setting::updateOrCreate(
            ['type' => 'phone'],
            ['value' => $request->phone]
        );
        Setting::updateOrCreate(
            ['type' => 'address'],
            ['value' => $request->address]
        );
        
        Setting::updateOrCreate(
            ['type' => 'business_hours'],
            ['value' => $request->business_hours]
        );
        
        return redirect()
            ->back()
            ->withSuccess('Master setting updated successfully');
    }
}