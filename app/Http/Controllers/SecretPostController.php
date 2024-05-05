<?php

namespace App\Http\Controllers;

use App\Models\SecretPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SecretPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Revelation/Post/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Revelation/Post/Write');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return response()->json(['message' => 'User is not authenticated'], 401);
        }

        $validated = $request->validate([
            'kind' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $secretPost = new SecretPost();
        $secretPost->fill($request->all());
        $secretPost->user_id = Auth::id();
        $secretPost->save();

        return redirect()->route('secret_post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
