<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocaleModel extends Model
{
    use HasFactory;
    
    protected $table = 'locales';

    protected $fillable = [
        'street',
        'district',
        'number',
        'CEP',
        'city',
        'state',
        'country'
    ];
}
