<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mmh
 * @property string $ma-bo-mon
 * @property string $ten-mh
 * @property string $ten-bm
 * @property int $so-tin-chi
 * @property BoMon $boMon
 * @property BaiGiang[] $baiGiangs
 */
class MonHoc extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mon-hoc';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'mmh';

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
    protected $fillable = ['ma-bo-mon', 'ten-mh', 'ten-bm', 'so-tin-chi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function boMon()
    {
        return $this->belongsTo('App\BoMon', 'ma-bo-mon', 'mbm');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function baiGiangs()
    {
        return $this->hasMany('App\BaiGiang', 'id-mon-hoc', 'mmh');
    }
}
