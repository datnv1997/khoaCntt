<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $ten-phan-loai
 * @property string $ngay-tao
 * @property ChiTietBaiViet[] $chiTietBaiViets
 * @property DanhSachBaiViet[] $danhSachBaiViets
 */
class PhanLoaiBaiViet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'phan-loai-bai-viet';

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
    protected $fillable = ['ten-phan-loai', 'ngay-tao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiTietBaiViets()
    {
        return $this->hasMany('App\ChiTietBaiViet', 'id-phan-loai');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function danhSachBaiViets()
    {
        return $this->hasMany('App\DanhSachBaiViet', 'id-phan-loai');
    }
}