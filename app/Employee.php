<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	
	protected $table = 'employee_new';

	 protected $fillable = [
        'name', 'description', 'department_id', 'birthDate'
    ];

    public $timestamps = false;
    
    public function Department()
    {
    	return $this->belongsTo('App\Department');
    }

}

 ?>