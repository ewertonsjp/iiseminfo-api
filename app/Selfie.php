<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selfie extends Model {
    protected $fillable = ['img', 'depoimento', 'likes'];
}
