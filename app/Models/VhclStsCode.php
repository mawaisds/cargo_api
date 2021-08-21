<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VhclStsCode extends Model
{
    use HasFactory;

    protected $table = 'vhcl_sts_codes';

    protected $fillable = [
        'vhcl_sts_name',
        'vhcl_sts_dscr',
    ];
}
