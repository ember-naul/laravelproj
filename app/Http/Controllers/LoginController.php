<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $user = User::where('email', '=', $email)->first();
        if (!$user) {
            throw new Exception('Suas credenciais não existem no nosso banco de dados');
        }

        try {

            $login = User::where([['email', '=', $email], ['password', '=', $senha]])->first();
            if ($login) {
                $_SESSION['id'] = $login->id;
                $_SESSION['email'] = $login->email;
                $_SESSION['senha'] = $login->password;
                $_SESSION['funcao'] = $login->role;
                return redirect('/home');
            }

        } catch (Exception $e) {
            throw new Exception('Suas credenciais estão incorretas.');

        }
    }
    public function cadastrar()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $confirmar_senha = password_hash($_POST['confirma_senha'], PASSWORD_DEFAULT);
        $funcao = $_POST['funcao'];

        $user = User::where('email', '=', $email)->first();
        if ($user) {
            throw new Exception('Seu email já existe no nosso banco de dados');
        }
        if ($senha != $confirmar_senha) {
            throw new Exception('Suas senhas não coincidem.');
        }
        try {
            $user->name = $nome;
            $user->email = $email;
            $user->senha = $senha;
            $user->funcao = $funcao;
            $user->save();
            return redirect("/home");

        } catch (Exception $e) {
            return redirect("/login");
        }
    }

    public function logout()
    {
        session_destroy();
        exit();
    }
}
