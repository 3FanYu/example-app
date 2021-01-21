<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collections extends Model {
    use HasFactory;
    protected $table = 'collections'; // 資料表名稱
    protected $primaryKey = 'id'; // 主鍵
    protected $fillable = ['title', 'subTitle', 'bgColor', 'iconImage', ];
}
