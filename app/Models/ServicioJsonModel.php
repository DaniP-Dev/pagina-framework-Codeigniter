<?php
namespace App\Models;

use CodeIgniter\Model;

class ServicioJsonModel
{
    protected $filePath;
    protected $data;

    public function __construct()
    {
        $this->filePath = APPPATH . 'Resources/data/services.json';
        $this->load();
    }

    protected function load()
    {
        if (!file_exists($this->filePath)) {
            $this->data = [];
            return;
        }

        $json = file_get_contents($this->filePath);
        $this->data = json_decode($json, true) ?? [];
    }

    public function findAll()
    {
        return $this->data;
    }

    public function findBySlug(string $slug)
    {
        foreach ($this->data as $item) {
            if (isset($item['seo']['url_slug']) && $item['seo']['url_slug'] === $slug) {
                return $item;
            }
        }

        return null;
    }
}
