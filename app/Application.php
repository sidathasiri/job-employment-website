<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name', 'city', 'state', 'zip', 'phone', 'email', 'social_security_number', 'is_work_eligible', 'is_certificated', 'is_convicted'
    ];

    public function payment(){
        return $this->hasOne('App\Payment', 'email', 'email');
    }
}
