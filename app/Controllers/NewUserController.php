<?php

namespace App\Controllers;
use App\Models\ModeloLogin;

class NewUserController extends BaseController
{
    public function index(): string
    {
        return view('new_user');
    }

    public function registrarUser(){

		$nombre=$this->request->getPost("nombre");
		$username=$this->request->getPost("username");
		$clave=$this->request->getPost("clave");
		
		$hashedPassword = password_hash($clave, PASSWORD_DEFAULT);

		$datosEnvio=array(
			"nombre"=>$nombre,
			"username"=>$username,
			"clave" => $hashedPassword
		);

		$modelologin = new ModeloLogin();

		try{
			$modelologin->insert($datosEnvio);
			
            $mensaje=" a VivaShop. ";
			return redirect()->to(base_url("/new/user"))->with('mensaje',$mensaje);


		}catch(\Exception $error){
			echo($error->getMessage());
		}
	}
}