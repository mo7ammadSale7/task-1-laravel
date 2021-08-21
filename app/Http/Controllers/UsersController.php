<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function index() {
        return view('users.index', [
            'users' => User::filter(request(['search', 'gender']))->simplePaginate(100)->withQueryString()
        ]);
    }

    public function show(User $user) {
        return view('users.show', [
            'user' => $user,
        ]);
    }

    public function edit($user_id) {
        $user = User::find($user_id);
        return response()->json($user);
    }

    public function update(UserRequest $request) {
        $user = User::find($request->id);

        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($user_id) {
        $user = User::find($user_id);
        $user->delete();
        return response()->json(['success'=>'User has been deleted']);
    }
}
