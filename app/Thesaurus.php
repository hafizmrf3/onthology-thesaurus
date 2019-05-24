<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thesaurus extends Model
{
    protected $fillable = [
        'id', 'mt', 'sn', 'uf', 'use', 'bt', 'nt', 'it', 'so', 'de', 'ko', 'ana', 'tgl',
    ];



    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function scopeSearch($query, $search){
        return $query->where('mt', 'LIKE', '%$search%');
    }
}
