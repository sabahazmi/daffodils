<?php

namespace App;
use App\Test;
use Illuminate\Database\Eloquent\Model;

class TestProfile extends Model
{
    public function tests()
        {
            return $this->hasMany(Test::class, 'test_profile_id', 'id');
        }
}