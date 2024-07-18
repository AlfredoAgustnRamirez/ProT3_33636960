<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;

class Dashboard extends BaseController{
	public function index()
    {
    
        $dato['titulo']='panel de usuario';
        echo view('layout/head', $dato);
        echo view('layout/menu');
        echo view('login/dashboard');
        echo view('layout/footer');
    }

    public function panel()
    {
       
        $dato['titulo']='panel de usuario';
        echo view('layout/head', $dato);
        echo view('layout/menu');
        echo view('login/dashboard_admin');
        echo view('layout/footer');
    }
}

