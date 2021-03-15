<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    function index() {
        return view("user/hello", [
            "name" => "Jhon",
            "age" => 20,
            "title" => "student"
        ]);
    }

    function update($id) {
        return "I am updating $id";
    }
}