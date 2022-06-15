<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start_date_time',
        'length',
        'type'
    ];

    public function enrollRunners()
    {
        return $this->hasMany(EnrollRunner::class);
    }
}
