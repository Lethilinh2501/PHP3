<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $primaryKey = 'id'; // mặc định id không cần khai báo

    // Quan hệ với Product
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
