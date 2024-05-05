<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRevelationRequest;
use App\Models\Revelation;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;
class RevelationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Revelation/Account/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userRevelation = Auth::check()
            ? Revelation::where('user_id', Auth::id())
                ->select('birth_year', 'city', 'personality', 'gender', 'occupation', 'education', 'position')
                ->first()
            : null; // Provide `null` or an appropriate default object if no record is found

        return Inertia::render('Revelation/Account/Edit', ['userRevelation' => $userRevelation]);
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

        // Check if a revelation record already exists for the user
        $revelation = Revelation::where('user_id', Auth::id())->first();

        if ($revelation) {
            // Update the existing revelation record
            $revelation->fill($request->all());
            $revelation->save();
            $message = 'Profile updated successfully';
        } else {
            // Create a new revelation record
            $revelation = new Revelation();
            $revelation->fill($request->all());
            $revelation->user_id = Auth::id(); // No need to check Auth again since we checked above
            $revelation->save();
            $message = 'Profile created successfully';
        }

        // Return a success response
        return response()->json(['message' => $message], 200);
    }
}
