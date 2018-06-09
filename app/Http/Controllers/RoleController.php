<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roles;

    public function __construct(Role $role)
    {
        $this->roles = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->roles->paginate(5);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        $this->roles->create($request->only('name', 'description'));

        return redirect()
            ->route('roles.index')
            ->with('message', 'New Role has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name', 'description'));

        return redirect()->route('roles.index')
            ->with('message', 'Role has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->roles->destroy($id);
        return redirect()
            ->route('roles.index')
            ->withMessage('Role has been deleted.');
    }
}
