<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'date', 'value', 'category_id'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'expenses';

    public function categories() {
        return $this->hasMany(Category::class);
    }
}
