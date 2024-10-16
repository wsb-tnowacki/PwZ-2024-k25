<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "store: $request";
    }

    /**
     * Display the specified resource.
     */
    //public function show(Post $post) typ Post namieszał
    public function show($post)
    {
        return "show: $post";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return "edit: $post";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        return "update: $post";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return "destroy: $post";
    }
}
