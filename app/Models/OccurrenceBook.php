<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccurrenceBook extends Model
{
    use HasFactory;

    protected $fillable =[
        'subject',
        'occurrence',
        'ref',
        'date_time',
        'entry',
        'subject',
        'officer',,
        

    ];
 
}
