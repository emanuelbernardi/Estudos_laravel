<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myRoutes extends Controller
{
    public function index()
    {
      return view('home');
    }

    public function cliente($id)
    {
      $array = [
        1 => [
         'Nome' => 'Emanuel',
         'Apelido' => 'Mel',
         'Idade' => '18'
        ],
         2 => [
             'Nome' => 'Patrick',
             'Apelido' => 'Batemen',
             'Idade' => '22'
         ],
         3 => [
             'Nome' => 'Thiago',
             'Apelido' => 'Thiagin',
             'Idade' => '48'
             ]    
     ];
 
     echo $array[$id]['Nome']."\n";
     echo "<br>";
     echo $array[$id]['Apelido']."\n";
     echo "<br>";
     echo $array[$id]['Idade'];
    }
}
