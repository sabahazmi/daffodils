<?php

namespace App;
use App\TestProfile;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function testProfile()
    {
        return $this->belongsTo(TestProfile::class);
    }
}