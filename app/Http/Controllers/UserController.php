<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/users/all",
     *     @OA\Response(response="200", description="An example endpoint")
     * )
     */
    public function index()
    {
        // $users = User::all();
        $users = DB::table('users')->select(['id', 'name', 'email', 'role'])->get();

        return response()->json($users, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersFormRequest $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ]);

        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrfail($id);
        return response()->json($user, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrfail($id);
        $user->delete();

        return response()->json($user, 201);
    }
}
