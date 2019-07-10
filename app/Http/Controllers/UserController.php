<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $user=$this->user->getAll();
        return view('member.admin.list_member')->with(['user'=>$user]);
    }
    public function select()
    {
        $data = $this->user->select();
        return view('member.user_verify')->with(['data' => $data]);
    }
    public function update(UserVerify $request)
    {
        $this->user->update($request);
        return redirect('/home')->with(['flash_message' => '資料修改成功 !!']);
    }
    public function password(Request $request)
    {
        $flash_message=$this->user->password($request);
        return redirect('/home')->with(['flash_message'=>$flash_message]);
    }
    public function deleteUser($id)
    {   
        $this->user->deleteUser($id);
        return redirect('admin/user/list')->with(['flash_message'=>'會員刪除成功！']);
    }
}
