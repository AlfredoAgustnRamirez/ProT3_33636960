<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class LoginController extends BaseController{


	public function index(){
		helper(['form']);
		$data['title'] = 'Login';
		echo view('layout/head', $data);
        echo view('layout/menu');
        echo view('login/login');
        echo view('layout/footer');
	} 
    
	public function ingresar() {
    $session = session();
    $model = new Usuarios_model();
    
    $rules = [
        'email' => 'required|valid_email',
        'password' => 'required|min_length[6]'
    ];

    if (!$this->validate($rules)) {
        $session->setFlashdata('errors', $this->validator->getErrors());
		return redirect()->to(base_url('/login'));
    }

    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $data = $model->where('email', $email)->first();

    if ($data) {
        if (password_verify($password, $data['password'])) {
            $ses_data = [
                'id_usuario' => $data['id_usuario'],
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'email' => $data['email'],
                'usuario' => $data['usuario'],
                'perfil_id' => $data['perfil_id'],
                'logged_in' => TRUE
            ];

            $session->set($ses_data);

            if ($data['perfil_id'] == 1) {
                return redirect()->to(base_url('dashboard_admin'));
            } else {
                return redirect()->to(base_url('dashboard'));
            }
        } else {
            $session->setFlashdata('msg', 'Contraseña inválida');
			return redirect()->to(base_url('/login'));        }
    } else {
        $session->setFlashdata('msg', 'Email no encontrado');
        return redirect()->to(base_url('/login'));
    }
}

 
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('');
	}
}