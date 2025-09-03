<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'meta_title' => 'Inicio | Guerrero Abogados',
            'meta_description' => 'Bufete especializado en derecho comercial, familia, laboral y penal en Colombia. Soluciones jurídicas integrales.',
            'meta_keywords' => 'abogados, derecho, Colombia, comercial, familia, penal, laboral, bufete'
        ];
        return view('inicio', $data);
    }

    public function servicios(): string
    {
        return view('servicios');
    }
}
