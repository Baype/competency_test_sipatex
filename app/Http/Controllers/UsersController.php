<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index():View
    // {
    //     return view('register'); // atau 'auth.register' jika view-mu ada di folder `auth/`
    // }

    /**
     * Show the form for creating a new resource.
     */
    //Register Account
    public function create(): View
    {
        return view('register'); // atau 'auth.register' jika view-mu ada di folder `auth/`
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|max:255'
        ]);

        User::create($request->all());
        return redirect()->route('register')->with('success-daftar', 'Account Already Registered!');

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
