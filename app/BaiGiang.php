<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $id-mon-hoc
 * @property string $id-ng-tao
 * @property string $ten-bai-giang
 * @property string $ten-mon-hoc
 * @property string $ngay-tao
 * @property string $chi-tiet
 * @property GiaoVien $giaoVien
 * @property MonHoc $monHoc
 */
class BaiGiang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bai-giang';

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
    protected $fillable = ['id-mon-hoc', 'id-ng-tao', 'ten-bai-giang', 'ten-mon-hoc', 'ngay-tao', 'chi-tiet'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function giaoVien()
    {
        return $this->belongsTo('App\GiaoVien', 'id-ng-tao', 'mgv');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function monHoc()
    {
        return $this->belongsTo('App\MonHoc', 'id-mon-hoc', 'mmh');
    }
}
