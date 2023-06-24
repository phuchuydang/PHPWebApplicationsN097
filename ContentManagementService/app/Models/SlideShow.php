<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    use HasFactory;

    protected $table = 'slide_shows';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'link',
        'link_text',
        'is_active',
    ];
}