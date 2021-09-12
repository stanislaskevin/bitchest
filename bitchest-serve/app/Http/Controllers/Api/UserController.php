<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $members = User::all();

        return response()->json(
            [
                'status' => 'success',
                'members' => $members->toArray()
            ], 200);
    }

    public function show(Request $request)
    {
        $user = User::find($id);

        return response()->json(
            [
                'status' => 'success',
                'member' => $member->toArray()
            ], 200);
    }
}
