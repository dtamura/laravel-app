<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class UserServiceImpl extends AbstractService implements UserService
{
    public function getList()
    {
        $userList = User::all();
        return $userList;
    }

    public function delete(int $id)
    {
        $user = User::findOrFail($id);
        $ret = $user->delete();
        Log::info('user ' . $id . ' deleted by user ' . Auth::user()->id . ' ( ' . Auth::user()->name . ' )');
    }

    public function getDetail(int $id)
    {
        $user = User::findOrFail($id);
        return $user;
    }
}
