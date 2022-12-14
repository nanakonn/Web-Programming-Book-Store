<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    public function publisher(){
        return $this->belongsTo('App\Models\publishers','Publisher_id');
    }

}
