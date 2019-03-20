<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable	= ['name','email','company','phone','address','group_id','photo'];
	public function group(){
		return $this->belongsTo(Group::class);
	}
}
