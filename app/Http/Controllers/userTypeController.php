<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_type;
use Illuminate\Support\Facades\Auth;

class userTypeController extends Controller
{
    public function index()
    {
        // Garante que só usuários logados possam acessar
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para acessar essa página.');
        }

        // Busca todos os user types no PostgreSQL
        $types = user_type::all();

        // Retorna a view com os user types
        return view('types.index', compact('types'));
    }
}
