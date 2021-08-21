<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VhclInfo extends Model
{
    use HasFactory;

    protected $table = 'vhcl_infos';

    protected $fillable = [
        'vhcl_nmbr',
        'vhcl_capacity',
        'vhcl_sts_id' ,
        'vhcl_type_id' ,
    ];
}
