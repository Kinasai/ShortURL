<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Url extends Model
{
    protected $fillable = [
        'user_id',
        'url',
        'short',
    ];

    protected static function booted(): void
    {
        static::creating(function (Url $model) {
            if ($model->short) {
                return;
            }

            do {
                $short = Str::random(8);
            } while (self::where('short', $short)->exists());

            $model->short = $short;
        });
    }

    public function logs()
    {
        return $this->hasMany(UrlLog::class);
    }
}
