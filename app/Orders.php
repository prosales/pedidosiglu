<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model 
{
    protected $table = 'orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'deliver_date', 'destination', 'presentation', 'king', 'imperial', 'semi_matrimonial', 'matrimonial', 'queen', 'total'
    ];

}
