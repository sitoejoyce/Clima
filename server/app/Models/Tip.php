<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Tip extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted(): void
    {
        static::deleting(function ($model) {
            if (Storage::exists($model->image)) {
                Storage::delete($model->image);
            }
        });
    }

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image);
    }
}
