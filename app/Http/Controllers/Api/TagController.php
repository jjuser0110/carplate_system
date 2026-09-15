<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::where('is_active', 1)
            ->orderBy('arrangement')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $tags->map(function ($tag) {
                return [
                    'id' => $tag->id,
                    'name' => $tag->tag_name,
                    'color' => $tag->color,
                ];
            })->values(),
        ]);
    }
}