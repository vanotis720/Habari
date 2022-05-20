<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\API\ApiController;
use Illuminate\Support\Facades\Validator;

class AuthController extends ApiController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|min:9|max:15|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->getMessageBag(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            $accessToken = $user->createToken('authToken')->accessToken;
            $user['access_token'] = $accessToken;

            return $this->successResponse($user);
        }

        return $this->errorResponse('error on registration', 500);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|min:9|max:15',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->getMessageBag(), 422);
        }

        $loginData = $request->all();

        $credentials = ['phone' => $loginData['phone'], 'password' => $loginData['password'], 'role' => 'user'];

        if (Auth::attempt($credentials)) {

            $user = User::find(auth()->user()->id);
            $user['access_token'] = $user->createToken('authToken')->accessToken;

            return $this->successResponse($user);
        }
        return $this->errorResponse('Les informations d\'identification sont invalides', 422);
    }

    public function getAuthUser()
    {
        return User::find(auth()->user()->id);
    }
    public function getUser()
    {
        return $this->successResponse($this->getAuthUser());
    }

    public function profilePicture()
    {
        $pathToFile = public_path(($this->getAuthUser())->avatar);
        return response()->file($pathToFile);
    }

    public function generateAvatar($request)
    {
        $currentId = DB::table('users')->max('id') + 1;
        $path = public_path('images/users/avatar/');

        if (!File::exists($path)) File::makeDirectory($path, 0755, true);

        $completePath = $path . $currentId . '.png';

        // (new \Laravolt\Avatar\Avatar)->create($request->name)->save($completePath);

        return 'images/users/avatar/' . $currentId . '.png';
    }
}
