<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Products extends Model
{
    use HasFactory;
    //use Searchable;

    protected $fillable = [
        'names', 'prices', 'description',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
