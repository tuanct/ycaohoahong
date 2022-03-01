<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    Const STATUS_ACTIVE = 1;
    Const STATUS_INACTIVE = 0;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
