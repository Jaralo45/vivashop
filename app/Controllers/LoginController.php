<?php

namespace App\Controllers;
use App\Models\ModeloLogin;

class LoginController extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function login()
    {
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('clave');

        // Realiza la validación en la base de datos
        $model = new Modelologin(); // Asegúrate de tener el modelo creado

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['clave'])) {
            // Usuario autenticado, verifica el rol
            if ($user['rol'] == 'admin') {
                // Si el rol es 'admin', establece la sesión
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'nombre' => $user['nombre'],
                    'rol' => $user['rol']
                ]);

                return redirect()->to('/home'); // Redirige a la página de dashboard de admin o a donde quieras
            } elseif ($user['rol'] == 'usuario') {
                // Si el rol es 'usuario', establece la sesión
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'rol' => $user['rol'],
                    'nombre' => $user['nombre']
                ]);

                return redirect()->to('/home'); // Redirige a la página de dashboard de usuario o a donde quieras
            } else {
                // Rol no reconocido, redirige al formulario de login con un mensaje de error
                return redirect()->to('/')->with('error', 'Rol no válido');
            }
        } else {
            // Usuario no autenticado, redirige al formulario de login con un mensaje de error
            $mensaje=" Valida tu usuario y contraseña, uno de los dos no coinciden";
            return redirect()->to('/')->with('mensaje',$mensaje);
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
