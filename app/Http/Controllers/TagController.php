<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::all();

        return view('tag.index')->with('tags', $tags);
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag_name' => 'required|string|max:255',
            'arrangement' => 'nullable|integer',
        ]);

        Tag::create($request->all());

        return redirect()->route('tag.index')->withSuccess('Data saved');
    }

    public function edit(Tag $tag)
    {
        return view('tag.create')->with('tag', $tag);
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'tag_name' => 'required|string|max:255',
            'arrangement' => 'nullable|integer',
        ]);

        $tag->update($request->all());

        return redirect()->route('tag.index')->withSuccess('Data updated');
    }

    public function destroy(Tag $tag)
    {
        if ($tag->carplateNumbers()->count() > 0) {
            return redirect()->route('tag.index')->withErrors('Tag has related carplate numbers. You can not delete this.');
        }
        $tag->delete();

        return redirect()->route('tag.index')->withSuccess('Data deleted');
    }
}
