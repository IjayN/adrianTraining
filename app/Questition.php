<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questition extends Model
{
    protected $fillable = [
      'title',
        'body'
    ];
}
