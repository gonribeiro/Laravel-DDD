<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        return $this->service = $service;
    }

    public function index(): View
    {
        $users = $this->service->getList();

        return View('User.index', compact('users'));
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $this->service->store($request->all());

        return redirect()->route('users.index');
    }

    public function update(UserRequest $request, int $id): RedirectResponse
    {
        $this->service->update($request->all(), $id);

        return redirect()->route('users.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->service->destroy($id);

        return redirect()->route('users.index');
    }
}
