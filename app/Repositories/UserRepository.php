<?php
namespace App\Repositories;

use App\User;

class UserRepository
{   
    protected $UserRepository;
    public function __construct()
    {
        $this->UserRepository=new User;
    }
    public function getAll()
    {
        return $this->UserRepository->get();
    }
    public function select()
    {
        return $this->UserRepository->where('account',auth()->user()->account)->first();
    }

}