<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tags;

    public function __construct(Tag $tag)
    {
        $this->tags = $tag;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = $this->tags->paginate(5);
        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTagRequest $request)
    {
        $this->tags->create($request->only('name', 'description'));
        return redirect()->route('tags.index')
            ->with('message', 'New tag has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->only('name', 'description'));

        return redirect()->route('tags.index')
            ->with('message', 'Tag has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tags->destroy($id);
        return redirect()->route('tags.index')
            ->with('Tag has been deleted.');
    }
}
