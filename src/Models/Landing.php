<?php

namespace XMultibyte\Landing\Models;

use Illuminate\Database\Eloquent\Model;
use XMultibyte\Landing\Traits\HasDateTimeFormatter;

class Landing extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'landings';
}
