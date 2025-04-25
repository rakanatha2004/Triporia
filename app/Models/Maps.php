<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maps extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'maps_name',
        'destination_id',
    ];
    public function category()
    {
        return $this->belongsTo(Destination::class, foreignKey: 'destination_id');
    }
}
