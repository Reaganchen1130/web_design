<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserVerify;
use App\Services\UserService;
use App\User;

class UserController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = new UserService;
    }
    public function index()
    {
        return $this->user->getAll();
    }
    public function select()
    {
        $data = $this->user->select();
        return view('member.user_verify')->with(['data' => $data]);
    }
    public function update(UserVerify $request)
    {
        $this->user->update($request);
        return redirect('/home')->with(['flash_message' => '資料修改成功 !!',]);
    }
}
