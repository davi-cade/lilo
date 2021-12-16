<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    public function __invoke($slug, $num)
    {
        return view('Atividade.atividade', compact('slug', 'num'));
    }
}
