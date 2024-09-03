<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingAttendence extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_id',
        'player_id',
        'status',
        'response_time',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }
}
