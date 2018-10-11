<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'type', 'holder_name', 'email', 'account_number', 'routing_number', 'bank_name', 'address', 'question1', 
        'question1_ans', 'question2', 'question2_ans', 'question3', 'question3_ans', 'username', 'password'
    ];

    public function application(){
        return $this->belongsTo('App\Application', 'email', 'email');
    }
}