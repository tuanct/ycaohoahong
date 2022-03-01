<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const TYPE_POST = 'post';
    const TYPE_BANNER = 'banner';
    const TYPE_NEWS = 'news';
}
