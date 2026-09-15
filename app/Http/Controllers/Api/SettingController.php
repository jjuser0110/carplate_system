<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::whereIn('type', [
            'phone',
            'whatsapp',
            'address',
            'business_hours',
            'facebook',
            'instagram',
        ])->get();

        $data = [];

        foreach ($settings as $setting) {
            $data[$setting->type] = $setting->value;
        }

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }
}