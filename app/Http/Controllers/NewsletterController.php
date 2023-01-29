<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function add(Request $request){
        Newsletter::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'campain_id' => $request['campain_id'],
        ]);

        return response()->json([
            'status' => 'Cadastro realizado com sucesso'
        ]);
    }
}
