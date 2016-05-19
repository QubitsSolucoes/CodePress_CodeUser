<?php

namespace CodePress\CodeUser\Controllers\Admin;

use CodePress\CodeUser\Controllers\Controller;
use CodePress\CodeUser\Repository\PermissionRepositoryInterface;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{

    private $repository;
    private $response;

    public function __construct(ResponseFactory $response, PermissionRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->response = $response;
    }

    public function index()
    {
        $permissions = $this->repository->all();
        return $this->response->view('codeuser::admin.permission.index', compact('permissions'));
    }

    public function create()
    {
        $permissions = $this->repository->all();
        return view('codeuser::admin.permission.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('admin.permissions.index');
    }

    public function edit($id)
    {
        $permission = $this->repository->find($id);
        $permissions = $this->repository->all();
        return $this->response->view('codeuser::admin.permission.edit', compact('permission', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $category = $this->repository->update($data, $id);
        return redirect()->route('admin.permissions.index');
    }

}