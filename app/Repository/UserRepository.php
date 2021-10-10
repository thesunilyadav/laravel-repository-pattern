<?php
namespace App\Repository;

use App\Repository\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function index(){
        return "Hello World";
    }
}
