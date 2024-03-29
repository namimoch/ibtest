<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Roles extends Model
{
    protected $table = 'roles';

    public function user(){
      return $this->belongsTo('App\User');//role_id to link it
    }
}
