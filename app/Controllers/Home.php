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
        $data = [
            'meta_title' => 'Servicios | Guerrero Abogados',
            'meta_description' => 'Descubre los servicios jurídicos que ofrecemos: derecho comercial, familiar, laboral y penal en Colombia.',
            'meta_keywords' => 'servicios jurídicos, abogados, derecho comercial, derecho familiar, derecho laboral, derecho penal',
        ];

        return view('servicios', $data);
    }
}
