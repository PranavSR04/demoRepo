<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        User::create([
            'role_id'=>$request->role_id,
            'experion_user_id'=>$request->experion_user_id,
            'username'=> $request->username,
            'user_mail'=> $request->user_mail,
            'user_designation'=> $request->user_designation,
            'group_name'=> $request->group_name,
            'is_active'=> $request->is_active,



        ]);
        return "User created successfully";
    }

    public function getUserList(Request $request)
    {
        //
        User::create([
            'role_id'=>$request->role_id,
            'experion_user_id'=>$request->experion_user_id,
            'username'=> $request->username,
            'user_mail'=> $request->user_mail,
            'user_designation'=> $request->user_designation,
            'group_name'=> $request->group_name,
            'is_active'=> $request->is_active,



        ]);
        return "User created successfully";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
