<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const CATEGORY_POLYCLINIC = 1;
    const CATEGORY_DENTOMAXILLOFACIAL = 2;
    const CATEGORY_DERMATOLOGY = 3;
    const CATEGORY_VACCINATION = 4;

    const CATEGORY_ARRAY = [
        self::CATEGORY_POLYCLINIC => 'Đa Khoa',
        self::CATEGORY_DENTOMAXILLOFACIAL => 'Răng Hàm Mặt',
        self::CATEGORY_DERMATOLOGY => 'Da Liễu Thẩm Mỹ',
        self::CATEGORY_VACCINATION => 'Tiêm Chủng Dịch Vụ',
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
