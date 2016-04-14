<?php

namespace CodePress\CodeUser\Controllers\Admin;

use CodePress\CodeUser\Controllers\Controller;
use CodePress\CodeUser\Repository\UserRepositoryInterface;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    private $repository;
    private $response;

    public function __construct(ResponseFactory $response, UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->response = $response;
    }

    public function index()
    {
        $users = $this->repository->all();
        return $this->response->view('codeuser::index', compact('users'));
    }

    public function create()
    {
        $users = $this->repository->all();
        return view('codeuser::create', compact('users'));
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $user = $this->repository->find($id);
        $users = $this->repository->all();
        return $this->response->view('codeuser::edit', compact('user', 'users'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $category = $this->repository->update($data, $id);
        return redirect()->route('admin.users.index');
    }

}