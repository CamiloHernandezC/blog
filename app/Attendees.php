<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendees extends Model
{
    public function subAttendees(){
        return $this->hasMany(Attendees::class, 'relation', 'id');
    }
}
