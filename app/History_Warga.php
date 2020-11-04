<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History_Warga extends Model
{
    use SoftDeletes;
    protected $table = "history_warga";
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'history_desc',
        'history_date',
        'history_category',
        'id_rt',
        'warga_id',
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'kelurahan_id',
        'rw_id',
        'rt_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
