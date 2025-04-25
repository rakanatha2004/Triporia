<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'photo_name',
        'destination_id',
    ];
    public function destination()
    {
        return $this->belongsTo(Destination::class, foreignKey: 'destination_id');
    }
}
