<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
    protected $table = 'kullanicilar';

    public function kayitlar()
    {
        $this->table = 'tanrilar';

        return $this->findAll();
    }

    public function kayit_detay($url)
    {
        $this->table = 'tanrilar';

        return $this->where('url',$url)->find();
    }
}