<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'donor_firstname',
        'donor_lastname',
        'donor_email',
        'donor_phonenumber',
        'project_name',
        'amount_donated',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
