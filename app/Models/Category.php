<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['description'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'categories';

    public function expenses() {
        return $this->belongsTo(Expense::class);
    }
}
