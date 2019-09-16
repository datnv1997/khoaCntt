<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $id-ng-tao
 * @property string $id-phan-loai
 * @property string $tieu-de
 * @property string $phan-loai
 * @property string $ngay-tao
 * @property ChiTietBaiViet $chiTietBaiViet
 * @property PhanLoaiBaiViet $phanLoaiBaiViet
 */
class DanhSachBaiViet extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'danh-sach-bai-viet';

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
    protected $fillable = ['id-ng-tao', 'id-phan-loai', 'tieu-de', 'phan-loai', 'ngay-tao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chiTietBaiViet()
    {
        return $this->belongsTo('App\ChiTietBaiViet', 'id-ng-tao', 'id-ng-tao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phanLoaiBaiViet()
    {
        return $this->belongsTo('App\PhanLoaiBaiViet', 'id-phan-loai');
    }
}
