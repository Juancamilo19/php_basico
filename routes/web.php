<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    });
    Route::get('variables', function (){

        $mensaje = 20;

        print_r($mensaje);
        echo"<hr />";

        $mensaje = true;
        var_dump($mensaje);
    });

Route::get('arreglos', function(){
    //Arreglo: estructura de datos
    $estudiantes = ['AN' => "Ana",
                    'MA' => "Maria",
                    'JO' => "Jorge"];

                    echo "<pre>";
    var_dump($estudiantes);
});

Route::get('paises', function () {

    $paises= ["colombia" =>[
                            "capital" => "Bogotá",
                            "moneda" => "Peso",
                            "poblacion" => 50

    ],
              "peru" =>[
                "capital" => "Lima",
                "moneda" => "Sol",
                "poblacion" => 32
              ],
              "paraguay"=>[
                "capital" => "Asuncion",
                "moneda" => "Guarani",
                "poblacion" => 7

              ]
            ];


           return view('paises')->with("naciones" , $paises);





});

Route::get('formulario_buscador', "MetabuscadorController@formulario_buscador");

Route::post('buscar', "MetabuscadorController@buscar");


