<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Sortable extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_name', 'rank_points'
    ];
}
