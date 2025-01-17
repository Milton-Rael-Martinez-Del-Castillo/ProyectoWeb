<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Home extends BaseController
{
    protected $usuarioModel;

    public function index(): string
    {
        return view('view_login');
    }

    public function validar(){
        //echo "Hola Mundo";
        //instancia de modelo
        $this->usuarioModel = new UsuarioModel();
        //obtener lo valores de los campos
        $usuarioEnviado = $this->request->getPost("usuario");
        $passwEnviado = $this->request->getPost("password");

        //obtener el resultado desde la base de datos
        $usuario = $this->usuarioModel->getUsuario($usuarioEnviado); //devolver el registro encontrado

        //revisar si el usuario no es null y si el password coinciden
        if($usuario){
            $passwBD = $usuario->password;
            if($passwBD == $passwEnviado){

                //variables de session
                $datos = [
                    'nombre'=>$usuario->nombre,
                    'apellido'=>$usuario->apellido,
                    'id'=>$usuario->id
                ];

                session()->set($datos); //session abierta para el sistema

                return redirect()->to(base_url().'principal');
            }else{
                $respuesta = [
                    'tipo'=>'danger',
                    'mensaje'=>'Password no existe'
                ];
                return view('view_login',$respuesta);
            }
        }else{
            $respuesta = [
                'tipo'=>'danger',
                'mensaje'=>'Usuario o password no existe'
            ];
            return view('view_login',$respuesta);
        }


        //return view('admin/view_principal_admin');
    }

    public function principal(){
        return view('admin/view_principal_admin');
    }
    
}
