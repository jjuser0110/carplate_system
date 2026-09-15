<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\FileAttachment;

class FeedController extends Controller
{
    public function index(Request $request)
    {
        $feeds = Feed::with('coverPhoto')->get();

        return view('feeds.index')->with('feeds', $feeds);
    }

    public function create()
    {
        return view('feeds.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'arrangement' => 'nullable|integer',
            'cover_photo' => 'nullable|image|max:5120',
        ]);

        $feed = Feed::create($request->except('cover_photo'));

        if ($request->hasFile('cover_photo')) {
            $uploaded = $this->upload($request->file('cover_photo'), 'feeds', $feed->id);
            FileAttachment::create([
                'content_id' => $feed->id,
                'content_type' => Feed::class,
                'file_path' => $uploaded['file_path'],
                'file_name' => $uploaded['file_name'],
                'file_type' => $uploaded['file_type'],
                'type' => 'cover_photo',
            ]);
        }

        return redirect()->route('feeds.index')->withSuccess('Data saved');
    }

    public function edit(Feed $feed)
    {
        return view('feeds.create')
            ->with('feed', $feed)
            ->with('coverPhoto', $feed->coverPhoto);
    }

    public function update(Request $request, Feed $feed)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'arrangement' => 'nullable|integer',
            'cover_photo' => 'nullable|image|max:5120',
        ]);

        $feed->update($request->except('cover_photo'));

        if ($request->hasFile('cover_photo')) {
            if ($feed->coverPhoto) {
                $feed->coverPhoto->delete();
            }
            $uploaded = $this->upload($request->file('cover_photo'), 'feeds', $feed->id);
            FileAttachment::create([
                'content_id' => $feed->id,
                'content_type' => Feed::class,
                'file_path' => $uploaded['file_path'],
                'file_name' => $uploaded['file_name'],
                'file_type' => $uploaded['file_type'],
                'type' => 'cover_photo',
            ]);
        }

        return redirect()->route('feeds.index')->withSuccess('Data updated');
    }

    public function destroy(Feed $feed)
    {
        if ($feed->coverPhoto) {
            $feed->coverPhoto->delete();
        }
        $feed->delete();

        return redirect()->route('feeds.index')->withSuccess('Data deleted');
    }
}
