<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //listar trabalhos incompletos
    public function scopeIncomplete($query)
    {
      return $query->where('completed', 0);
    }
}
