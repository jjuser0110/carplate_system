<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarplateNumber;
use Illuminate\Http\Request;

class CarplateNumberController extends Controller
{
    public function index(Request $request)
    {
        $carplates = CarplateNumber::with(['category', 'tags'])
            ->where('is_active', 1)
            ->get();

        return response()->json([
            'success' => true,
            'data' => $carplates->map(function ($carplate) {
                return [
                    'id' => $carplate->id,
                    'plate' => $carplate->plate,
                    'amount' => (float) $carplate->amount,

                    'category' => $carplate->category ? [
                        'id' => $carplate->category->id,
                        'name' => $carplate->category->category_name,
                    ] : null,

                    'tags' => $carplate->tags->map(function ($tag) {
                        return [
                            'id' => $tag->id,
                            'name' => $tag->tag_name,
                            'color' => $tag->color,
                        ];
                    })->values(),
                ];
            })->values(),
        ]);
    }
}
