<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RandSample extends Model
{
    //
    protected $table = "rand_samples";

    protected $guarded = ['id',];

    protected $fillable = ['e', 'i', 'v'];
}
