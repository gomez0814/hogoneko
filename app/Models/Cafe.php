<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    // テーブルの関連付け
    protected $table = 'cafes';

    // 更新項目の設定
    protected $fillable = [
        'name',
        'address',
        'business_hour',
        'holiday',
        'content',
        'image_path',
        'website',
        'twitter',
        'instagram',
        'youtube'
    ];
}
