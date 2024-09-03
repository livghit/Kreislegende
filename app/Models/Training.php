<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'coach_id',
        'name',
        'location',
        'is_recurring',
        'recurrence_day',
        'start_time',
        'end_time',
    ];

    // the team this training belogns to
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // the coach that created the Training session
    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id');
    }

    // attendances to this specific training
    public function attendances()
    {
        return $this->hasMany(TrainingAttendence::class);
    }

    /**
     * thiss will return all the collection of the present player
     */
    public function presentPlayers()
    {
        return $this->attendances()->where('status', true)->with('player')->get()->pluck('player');
    }

    /**
     * this will return all the collection of the absent Players
     */
    public function absentPlayers()
    {
        return $this->attendances()->where('status', false)->with('player')->get()->pluck('player');
    }

    /**
     * Create individual training sessions for a recurring training
     *
     * @param  string  $recurrenceDay
     * @param  string  $startTime
     * @param  string  $endTime
     * @param  int  $duration  Number of weeks to generate
     * @return void
     */
    public function generateRecurringSessions($recurrenceDay, $startTime, $endTime, $duration = 52)
    {
        $startDate = Carbon::now()->next($recurrenceDay);

        for ($i = 0; $i < $duration; $i++) {
            $trainingDate = $startDate->copy()->addWeeks($i);

            Training::create([
                'team_id' => $this->team_id,
                'coach_id' => $this->coach_id,
                'name' => $this->name,
                'location' => $this->location,
                'is_recurring' => false,
                'date' => $trainingDate->toDateString(),
                'start_time' => $startTime,
                'end_time' => $endTime,
            ]);
        }
    }
}
