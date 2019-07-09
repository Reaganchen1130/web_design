<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $UserService;
    public function __construct()
    {
        $this->UserService=new UserRepository;
    }
    public function getAll()
    {
        return $this->UserService->getAll();
    }
    public function select()
    {
        return $this->UserService->select();
    }
    public function update($request)
    {
        $verify=$this->select();
        $verify->name=$request->input('name');
        $verify->email=$request->input('email');
        $verify->cellphone=$request->input('cellphone');
        $verify->address=$request->input('address');
        $verify->save();
    }
    public function password($request)
    {
        if (auth()->check()) {
            $current_password = auth()->user()->password;
            if (Hash::check($request->current_password, $current_password)) {
                $user = $this->UserService->select();
                $user->password = Hash::make($request->input('password'));
                $user->save();
                $flash_message='密碼修該成功！';
                return $flash_message;
            } else {
                $flash_message='密碼修改失敗！';
                return $flash_message;
            }
        } 
    }
}