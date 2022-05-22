<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct() {
        // echo 'Khởi động Dashboard';
        // return 'Khởi động Dashboard';
    }

    public function index() {
        return '<h1>Dashboard welcome</h1>';
    }
}
