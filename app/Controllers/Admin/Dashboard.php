<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UsersModel;

class Dashboard extends BaseController {
    public function index(){
        $session = session();
        return view('dashboard_home');
    }
}

?>