<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    public function isComplete()
    {
      return false;
    }

    public function isArchived()
    {
      return false;
    }
}
