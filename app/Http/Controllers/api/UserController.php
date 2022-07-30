<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\SaveUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json([
                'ok' => false,
                'msg' => 'Ya existe un usuario con ese email'
            ], 400);
        }
        
        User::create($request->all());
        return response()->json([
            'ok' => true,
            // 'uid' => $user->id,
            // 'name' => $user->name,
            // 'email' => $user->email,
            // 'token' => 'token'
            'msg' => 'User saved successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        //$user 
        return 'hi from login';
    }

    public function revalidateToken()
    {
        return 'hi from revalidateToken';
    }
}
