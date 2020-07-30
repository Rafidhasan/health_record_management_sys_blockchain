<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'notes','medicine_details', 'reports_details'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
