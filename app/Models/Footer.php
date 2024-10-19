<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'footer_title_1',
        'footer_title_2',
        'footer_title_3',

        'footer_title_1_text_1',
        'footer_title_1_link_1',
        'footer_title_1_text_2',
        'footer_title_1_link_2',
        'footer_title_1_text_3',
        'footer_title_1_link_3',
        'footer_title_1_text_4',
        'footer_title_1_link_4',
        'footer_title_1_text_5',
        'footer_title_1_link_5',

        'footer_title_2_text_1',
        'footer_title_2_link_1',
        'footer_title_2_text_2',
        'footer_title_2_link_2',
        'footer_title_2_text_3',
        'footer_title_2_link_3',
        'footer_title_2_text_4',
        'footer_title_2_link_4',
        'footer_title_2_text_5',
        'footer_title_2_link_5',

        'footer_title_3_text_1',
        'footer_title_3_link_1',
        'footer_title_3_text_2',
        'footer_title_3_link_2',
        'footer_title_3_text_3',
        'footer_title_3_link_3',
        'footer_title_3_text_4',
        'footer_title_3_link_4',
        'footer_title_3_text_5',
        'footer_title_3_link_5',
    ];
}
