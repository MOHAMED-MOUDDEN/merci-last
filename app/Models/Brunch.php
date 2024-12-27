<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brunch extends Model
{
    use HasFactory;

    // تحديد اسم الجدول في قاعدة البيانات
    protected $table = 'brunches';

    // تحديد الأعمدة القابلة للتعبئة
    protected $fillable = [
        'nom',        // اسم الـ Petit Dejeuner
        'description',
        'prix', // وصف الـ Petit Dejeuner
        'image',       // مسار الصورة
    ];

    // في حال كان هناك علاقات مع موديلات أخرى، يمكن إضافتها هنا
    // مثال:
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
}
