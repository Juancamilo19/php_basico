<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function formulario_buscador(){
        return view ('metabuscador');

    }

    public function buscar(){
        $termino=$_POST["termino"];
        $motores=$_POST["motores"];

        switch ($motores){
            case 1:
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 4:
                return redirect()->to("https://search.yahoo.com/search;_ylt=$termino");
                break;
            case 5:
                return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
            case 6:
                return redirect()->to("https://www.wolframalpha.com/input/?i=$termino");
                break;
            case 7:
                return redirect()->to("https://boardreader.com/s/$termino.html");
                break;
            case 8:
                return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
            case 9:
                return redirect()->to("https://www.qwant.com/?q=$termino");
                break;
            case 10:
                return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
        }

        //print_r($_POST);


    }
}
