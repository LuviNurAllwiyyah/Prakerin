<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongsToMany('App\Artikel', 'artikel_tag', 'id_tag', 'id_artikel');
    }

    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($tag) {
    //         //mengecek apakah penulis masih punya buku
    //         if ($tag->artikel->count() > 0) {
    //             //menyiapkan pesan error
    //             $html = 'tag tidak bisa di hapus karena masih di gunakan oleh artikel:';
    //             $html = '<ul>';
    //             foreach ($tag->artikel as $data) {
    //                 $html .= "<li>$data->judul</li>";
    //             }
    //             $html = '</ul>';
    //             $request::flash("flash_notification", [
    //                 "level" => "danger",
    //             ]);
    //             //menambatalkan proses penghapusan
    //             return flase;
    //         }
    //     });
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
