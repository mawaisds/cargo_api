<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BkngStsCode extends Model
{
    use HasFactory;

    protected $table = 'bkng_sts_codes';

    protected $fillable = [
        'bkng_sts_name',
        'bkng_sts_dscr',
    ];
}
