<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	
	protected $table = 'department_new';

	 protected $fillable = [
        'name', 'description', 
    ];

    public $timestamps = false;

    public function employees()
    {
    	return $this->hasMany('App\Employee');
    }



}

 ?>