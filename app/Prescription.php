<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'note','medicine_name', 'quantity', 'time', 'when', 'report_name'
    ];

    protected $casts = [
        'medicine_name' => 'array',
        'quantity' => 'array',
        'time' => 'array',
        'when' => 'array',
        'report_name' => 'array'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
