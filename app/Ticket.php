<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    Use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'theatre_id'
    ];

    protected $dates = [
        'deleted_at'
    ];
    public function theatre() {
        return $this->belongsTo('App\Theatre');
    }
}
