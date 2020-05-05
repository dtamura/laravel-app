<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\UserService;

class UserController extends Controller
{
    /**
     *
     * @var UserService
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    function getIndex(Request $request)
    {
        $userList = $this->userService->getList();
        return view('users', [
            'userList' => $userList
        ]);
    }
}
