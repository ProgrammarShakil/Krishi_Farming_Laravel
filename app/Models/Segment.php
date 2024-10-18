<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_segment_name',
        'main_segment_link',
        'segment_1_name',
        'segment_1_link',
        'segment_2_name',
        'segment_2_link',
        'segment_3_name',
        'segment_3_link',
        'segment_4_name',
        'segment_4_link',
        'segment_5_name',
        'segment_5_link',
        'segment_6_name',
        'segment_6_link',
        'segment_7_name',
        'segment_7_link',
    ];
}
