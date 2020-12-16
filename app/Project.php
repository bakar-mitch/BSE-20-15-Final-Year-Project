<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $table = 'projects';
   

    

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    protected $fillable =[
        'project_name',
        'description',
        
        
    ];

    public function projects()
    {
        return $this->hasMany(Payment::class, 'payment_id', 'id');
    }


}
