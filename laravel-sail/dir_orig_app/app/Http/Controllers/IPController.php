<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPController extends Controller
{
    public function showIP(Request $request)
    {
        //return "Hellow";
        $ip = $request->ip();
        return view('mostrar-ip', ['ip' => $ip]);
    }
}
?>
