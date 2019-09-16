<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mbm
 * @property string $ten-bo-mon
 * @property string $khoa
 * @property string $truong-bo-mon
 * @property string $pho-bo-mon
 * @property MonHoc[] $monHocs
 */
class BoMon extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bo-mon';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'mbm';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ten-bo-mon', 'khoa', 'truong-bo-mon', 'pho-bo-mon'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function monHocs()
    {
        return $this->hasMany('App\MonHoc', 'ma-bo-mon', 'mbm');
    }
}
