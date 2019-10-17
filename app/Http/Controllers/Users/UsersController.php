<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validation\User\Validator;
use Repositories\Application\User\UserRepository;

class UsersController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function index() {
        $data['collection'] = $this->userRepository->all('paginate', 10);
        return view('welcome', compact('data'));
    }

    public function store(Validator $request) {
        if ($this->userRepository->create($request->all())) {
            return redirect()->route('users.index');
        }
        return redirect()-back();
    }
}
