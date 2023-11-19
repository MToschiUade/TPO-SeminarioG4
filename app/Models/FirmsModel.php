<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmsModel extends Model
{
    use HasFactory;
    protected $table = 'VIIRS_SNPP_NRT';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'country_id',
        'latitude',
        'longitude',
        'bright_ti4',
        'scan',
        'track',
        'acq_date',
        'acq_time',
        'satellite',
        'instrument',
        'confidence',
        'version',
        'bright_ti5',
        'frp',
        'daynight'
    ];

}
