<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function services_subcategories() 
    {
        return $this->hasMany(ServicesSubcategories::class);
    }

    /**
     * Scope by Category
     *
     * @param [type] $query
     * @param [type] $type
     * @return void
     */
    public function scopeByCategory($query, $type) {
        return $query->where('category_id', $type);
    }

    public function scopeBySubcategory($query, $type){
        return $query->where('category_id', $type);
    }
}
