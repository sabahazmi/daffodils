<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'name', 'mobile', 'gender', 'age', 'aadhaar',
    ];
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}