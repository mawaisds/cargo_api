<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VhclTypeCode extends Model
{
    use HasFactory;

    protected $table = 'vhcl_type_codes';

    protected $fillable = [
        'vhcl_type_name',
        'vhcl_type_dscr',
    ];
}
