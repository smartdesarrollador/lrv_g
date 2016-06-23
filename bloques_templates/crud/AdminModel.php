<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    //
    protected $table = 'administrador';
 
	protected $fillable = ['title', 'body'];
 
	protected $guarded = ['id'];
}
