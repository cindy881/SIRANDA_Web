<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $table = "pelanggarans";
    protected $guarded = ['id'];

    public function tindaklanjuts()
    {
        return $this->hasMany('App\Models\TindakLanjut');
    }

    public function user()
    {
        // return $this->belongsTo('Model', 'foreign_key', 'owner_key'); 
        return $this->belongsTo('App\Models\User', 'fk_user_pelanggaran', 'id');
    }
}
