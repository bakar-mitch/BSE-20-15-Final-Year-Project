<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $table = 'payments';
   

    

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    protected $fillable =[
        'client_name',
        'email',
        'created_at',
        'project',
        'deleted_at',
        'amount',
        
    ];


    public function payments()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }



}
