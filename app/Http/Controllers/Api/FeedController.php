<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index(Request $request)
    {
        $feeds = Feed::with('coverPhoto')
            ->where('is_active', 1)
            ->orderBy('arrangement')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $feeds->map(function ($feed) {
                return [
                    'id' => $feed->id,
                    'title' => $feed->title,
                    'description' => $feed->description,
                    'url' => $feed->url,
                    'arrangement' => $feed->arrangement,

                    'cover_photo' => $feed->coverPhoto
                        ? asset('storage/' . $feed->coverPhoto->file_path)
                        : null,
                ];
            })->values(),
        ]);
    }
}