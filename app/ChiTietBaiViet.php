<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $id-phan-loai
 * @property string $id-ng-tao
 * @property string $tieu-de
 * @property string $mo-ta-ngan
 * @property string $noi-dung
 * @property string $ngay-tao
 * @property GiaoVien $giaoVien
 * @property PhanLoaiBaiViet $phanLoaiBaiViet
 * @property DanhSachBaiViet[] $danhSachBaiViets
 */
class ChiTietBaiViet extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'chi-tiet-bai-viet';

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
    protected $fillable = ['id-phan-loai', 'id-ng-tao', 'tieu-de', 'mo-ta-ngan', 'noi-dung', 'ngay-tao'];

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
    public function phanLoaiBaiViet()
    {
        return $this->belongsTo('App\PhanLoaiBaiViet', 'id-phan-loai');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function danhSachBaiViets()
    {
        return $this->hasMany('App\DanhSachBaiViet', 'id-ng-tao', 'id-ng-tao');
    }
}
