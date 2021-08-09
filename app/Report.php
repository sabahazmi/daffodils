<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}