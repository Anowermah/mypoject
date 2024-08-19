<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function index()
    {
        $users = User::all();
    
        return $this->sendResponse($users, 'Products retrieved successfully.');
    }



}
