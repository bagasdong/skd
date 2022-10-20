<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'fullname' => $request->fullname,
            'email' => caesar($request->email),
            'password' => Hash::make($request->password)
        ]);
    }
}
function caesar($string)
{
    $key = 10;
    $kalimat = $string;
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
        $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }
    $hsl = '';
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $hsl = $hsl . $c[$i];
    }
    return $hsl;
}