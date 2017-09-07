<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Precio
 * @package App\Models
 * @version June 6, 2017, 9:37 pm UTC
 */
class Ingreso extends Model
{

    public $table = 'ingresos';

    public $fillable = [
        'fecha',
        'cantidad',
        'categoria'
    ];
}
