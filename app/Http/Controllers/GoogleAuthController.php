<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Termwind\Components\Dd;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

     // Callback do Google
     public function callback()
     {
         try {
             // Obter o usuário do Google
             $googleUser = Socialite::driver('google')->user();

             // Verificar se o usuário já existe no banco de dados
             $user = User::where('email', $googleUser->email)->first();

             if ($user) {
                 // Usuário já existe, autentica
                 Auth::login($user);
             } else {
                 // Criar um novo usuário se ele não existir
                 $user = User::create([
                     'name' => $googleUser->name,
                     'email' => $googleUser->email,
                     'google_id' => $googleUser->id, // ID do Google
                     'avatar' => $googleUser->avatar,
                     'password' => bcrypt('default_password'), // Opcional, caso queira um valor padrão
                 ]);

                 Auth::login($user); // Autentica o novo usuário
             }

             // Redirecionar para o dashboard
             return redirect('/dashboard')->with('success', 'Bem-vindo, ' . $user->name);
         } catch (\Exception $e) {
             // Tratamento de erros
             return redirect('/login')->with('error', 'Erro ao autenticar com o Google.');
         }
     }
}