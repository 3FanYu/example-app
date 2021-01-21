<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trails extends Model
{
    use HasFactory;
    protected $table = 'trails'; // 資料表名稱
    protected $primaryKey = 'id'; // 主鍵
    protected $foreignKey='collection_id';
    protected $fillable = ['title', 'location', 'distance', 'coverImage'];
}
