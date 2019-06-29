<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    protected  $fillable = ['nama_kategoris', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->hasMany("App\Artikel", "id_kategori");
    }
}
