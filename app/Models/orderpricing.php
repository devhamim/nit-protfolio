<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderpricing extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_price(){
        return $this->belongsTo(pricing::class, 'pricing_id');
    }
}
