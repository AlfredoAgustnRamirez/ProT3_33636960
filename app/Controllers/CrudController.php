<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class CrudController extends BaseController
{
    public function index()
    {
        $model = new Usuarios_model();
        $data['usuarios'] = $model->orderBy('id_usuario', 'DESC')->findAll();
        echo view('layout/head', $data);
        echo view('layout/menu');
        echo view('usuario/lista_usuario', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        $data['titulo'] = 'altaUsuario';
        echo view('layout/head', $data);
        echo view('layout/menu');
        echo view('usuario/alta_usuario');
        echo view('layout/footer');
        
    }

    public function store()
    {
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|min_length[3]',
            'password' => 'required|min_length[3]|max_length[10]',
            'passconf' => 'required|min_length[3]|max_length[10]|matches[password]',
            'perfil_id'  => 'required|min_length[1]|max_length[1]',
        ]);

        $model = new Usuarios_model();

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('layout/head', $data);
            echo view('layout/menu');
            echo view('usuario/alta_usuario', [
                'validation' => $this->validator
            ]);
        } else {
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email'  => $this->request->getVar('email'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'perfil_id'  => $this->request->getVar('perfil_id'),
            ];
            $model->insert($data);
            return $this->response->redirect(base_url('/lista_usuario'));
        }
            echo view('layout/footer');
    }

    public function singleUser($id_usuario = null)
    {
        $model = new Usuarios_model();
        $dato['user_obj'] = $model->where('id_usuario', $id_usuario)->first();
        $data['titulo'] = 'editar';
        echo view('layout/head', $data);
        echo view('layout/menu');
        echo view('usuario/modificar_usuario', $dato);
        echo view('layout/footer');
    }

    public function update()
    {
        $session = session();
        $model = new Usuarios_model();
        $id = $this->request->getVar('id_usuario');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'email'  => $this->request->getVar('email'),
            'usuario' => $this->request->getVar('usuario'),
            'nombre' => $this->request->getVar('nombre'),
            'perfil_id' => $this->request->getVar('perfil_id'),
            //'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $model->update($id, $data);
        if ($session->get('perfil_id') == 1){
            return $this->response->redirect(base_url('/lista_usuario'));
        } else {
            return $this->response->redirect(base_url('/'));
        }
    }

    /*public function delete($id = null) {
        $model = new Usuarios_model();
        $data['usuarios'] = $model->where('id_usuario', $id)->delete($id);
        return $this->response->redirect(base_url('/lista_usuario'));
    }*/

    public function usuarios_eliminados() {
        $NameModel = new Usuarios_model();
        $data['usuarios'] = $NameModel->orderBy('id_usuario', 'DESC')->findAll();
        $dato['titulo'] = 'eliminados';
        echo view('layout/head', $dato);
        echo view('layout/menu');
        echo view('usuario/usuarios_eliminados', $data);
        echo view('layout/footer');
    }

    public function quitar($baja = null)
    {
        $NameModel = new Usuarios_model();
        $data['usuarios'] = $NameModel->where('baja', $baja)->delete($baja);
        $data = ([
            'baja' => 'Si',
        ]);
        $NameModel->update($baja, $data);
        return $this->response->redirect(base_url('/lista_usuario'));

    }

    public function colocar($baja = null)
    {
        $NameModel = new Usuarios_model();
        $data['usuarios'] = $NameModel->where('baja', $baja)->delete($baja);
        $data = ([
            'baja' => 'No',
        ]);
        $NameModel->update($baja, $data);
        return $this->response->redirect(base_url('/usuarios_eliminados'));
    }
}
