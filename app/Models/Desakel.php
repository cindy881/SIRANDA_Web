<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desakel extends Model
{
    use HasFactory;

    protected $table = "desakels";
    protected $guarded = ['id'];

    public function kecamatan()
    {
        // return $this->belongsTo('Model', 'foreign_key', 'owner_key'); 
        return $this->belongsTo('App\Models\Kecamatan', 'fk_kec', 'id');
    }

    public function pelanggarans()
    {
        return $this->hasMany('App\Models\Pelanggaran');
    }
}
