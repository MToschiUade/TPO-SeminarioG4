<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertasModel extends Model
{
    use HasFactory;
    protected $table = 'alertas';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'descripcion_larga',
        'descripcion',
        'latitude',
        'longitude',
        'pantalla',
        'mail',
        'whatsapp'
    ];
}
