<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='principal';
        echo view('layout/head',$data);
        echo view('layout/menu');
        echo view('layout/principal');
        echo view('layout/footer');
    }  

    public function nosotros()
    {
        $data['titulo']='nosotros';
            echo view('layout/head',$data);
            echo view('layout/menu');
            echo view('nosotros');
            echo view('layout/footer');
    }  

    public function acerca()
    {
        $data['titulo']='acerca de';
            echo view('layout/head',$data);
            echo view('layout/menu');
            echo view('acerca');
            echo view('layout/footer');
    }  
    
}
