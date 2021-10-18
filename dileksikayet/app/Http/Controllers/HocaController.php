<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HocaController extends Controller
{
    public function girisform()
    {
        return view('girisform');
    }
    public function giris()
    {
        $this->validate(request(), [
            "username" => "required ",
            "password" => "required"
        ]);

        $user = User::where("username", request("username"))->first();

        if (Auth::attempt(["username" => request("username"), "password" => request("password")])) {
            request()->session()->regenerate();
            return redirect()->route('home')
                ->with('message', "$user->username Hoş geldiniz")
                ->with('message_type', 'success');
        } else {
            return redirect()->route('hocagiris')
                ->with('message', "Hatalı giriş denemesi")
                ->with('message_type', 'danger');
        }
    }
    public function cikis()
    {
        Auth::logout();
        return redirect()->route('home')
            ->with('message', "Çıkış yapıldı")
            ->with('message_type', 'success');
    }
}
