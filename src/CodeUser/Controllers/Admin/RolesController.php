<?php

namespace CodePress\CodeUser\Controllers\Admin;

use CodePress\CodeUser\Controllers\Controller;
use CodePress\CodeUser\Repository\RoleRepositoryInterface;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    private $repository;
    private $response;

    public function __construct(ResponseFactory $response, RoleRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->response = $response;
    }

    public function index()
    {
        $roles = $this->repository->all();
        return $this->response->view('codeuser::admin.role.index', compact('roles'));
    }

    public function create()
    {
        $roles = $this->repository->all();
        return view('codeuser::admin.role.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('admin.roles.index');
    }

    public function edit($id)
    {
        $role = $this->repository->find($id);
        return $this->response->view('codeuser::admin.role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $category = $this->repository->update($data, $id);
        return redirect()->route('admin.roles.index');
    }

}