<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrlLog extends Model
{
    protected $fillable = [
        'url_id',
        'ip',
    ];
}
