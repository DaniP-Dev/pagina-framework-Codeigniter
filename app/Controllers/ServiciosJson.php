<?php
namespace App\Controllers;

use App\Models\ServicioJsonModel;

class ServiciosJson extends BaseController
{
    public function index()
    {
        $model = new ServicioJsonModel();
        $data = [
            'servicios' => $model->findAll(),
            'meta_title' => 'Servicios | Guerrero Abogados',
            'meta_description' => 'Listado de servicios jurídicos de Guerrero Abogados.',
            'meta_keywords' => 'servicios legales, abogados'
        ];

        return view('servicios', $data);
    }

    public function detalle($slug)
    {
        $model = new ServicioJsonModel();
        $servicio = $model->findBySlug($slug);

        if (!$servicio) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'servicio' => $servicio,
            'meta_title' => $servicio['seo']['titulo'] ?? $servicio['nombre'],
            'meta_description' => $servicio['seo']['meta_description'] ?? '',
            'meta_keywords' => is_array($servicio['seo']['keywords']) ? implode(', ', $servicio['seo']['keywords']) : ($servicio['seo']['keywords'] ?? ''),
        ];

        return view('servicio_detalle', $data);
    }
}
