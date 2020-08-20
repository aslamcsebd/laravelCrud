<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = ['employee_id', 'position', 'salary']; 
    
    function salaryToemployee(){
      return $this->hasOne('App\Employee', 'id', 'employee_id');
      // N:B: hasOne('Destination model', 'Destination model id(primary key)', 'to this model foreign key');
   }   
}
