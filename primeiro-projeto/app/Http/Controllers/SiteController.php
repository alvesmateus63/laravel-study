<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // É um método, aqui eu faço a lógica
    public function index() {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;

        return view('bemvindo', $dados);
    }

    public function exercicio2() {
        $numero = 1;

        $url = 'https://i.pravatar.cc/150?img='.$numero;

        $dados['url'] = $url;

        return view('exercise', $dados);
    }

    public function index2() {
        return view('include');
    }

    public function comp() {
        return view('comp');
    }

    public function layout() {
        return view('site');
    }

    public function layout2() {
        return view('site');
    }


}
