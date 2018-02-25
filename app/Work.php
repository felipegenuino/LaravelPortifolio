<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //listar trabalhos incompletos
    public static function incomplete()
    {
      return static::where('completed', 0)->get();
    }
}
