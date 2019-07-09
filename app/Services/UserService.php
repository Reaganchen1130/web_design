<?php

namespace App\Services;

use App\Repositories\UserRepository;

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
}