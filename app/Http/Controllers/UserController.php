<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {   
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->all();
        return view('management.upload.users.list', compact('users'));
    }

    public function store(Request $request)
    {
        $user = $request->all();
        $user['password'] = bcrypt($user['password']);
        $this->user->create($user);
        
        return redirect('/login');
    }
}
