<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;

    public function __construct(User $user)
    {
        $this->users = $user;
    }

    public function index()
    {
        $users = $this->users->with('roles')->paginate(5);

        return view('user.index', compact('users'));
    }


    public function create()
    {
        return view('user.create', ['roles' => Role::all()]);
    }


    public function store(CreateUserRequest $request)
    {
        //create a new user & assign a role to him
        $this->users->create($request->only('name', 'email', 'password'))
            ->roles()->attach($request->get('role'));

        return redirect()->route('users.index')->with('message', 'User has been created.');
    }


    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }


    public function update(UpdateUserRequest $request, $id)
    {
        dd($request->all());
    }


    public function destroy($id)
    {
        $this->users->destroy($id);
        return redirect()->route('users.index')->with('message', 'User has been deleted.');
    }
}
