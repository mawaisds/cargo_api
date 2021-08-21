<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeCode extends Model
{
    use HasFactory;

    protected $table = 'user_type_codes';

    protected $fillable = [
        'user_type_name',
        'user_type_dscr',
    ];
}
