<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    //
    protected $table = "samples";

    protected $fillable = ['import', 'export', 'value'];
}
