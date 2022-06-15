<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollRunner extends Model
{
    use HasFactory;

    protected $fillable = [
        'run_id',
        'runner_id'
    ];

    public function run()
    {
        return $this->belongsTo(Run::class);
    }

    public function runner()
    {
        return $this->belongsTo(Runner::class);
    }
}
