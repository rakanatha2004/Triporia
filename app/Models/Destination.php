<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'destination_name',
        'alamat',
        'price',
        'description',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, foreignKey: 'category_id');
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function maps()
    {
        return $this->hasMany(Maps::class);
    }
}
