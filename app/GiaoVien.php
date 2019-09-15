<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mgv
 * @property string $ho-ten
 * @property string $email
 * @property string $bo-mon
 * @property string $cap-bac
 * @property string $ngay-sinh
 * @property BaiGiang[] $baiGiangs
 * @property ChiTietBaiViet[] $chiTietBaiViets
 * @property DanhSachDiemDanh[] $danhSachDiemDanhs
 * @property Lop[] $lops
 */
class GiaoVien extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'giao-vien';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'mgv';

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
    protected $fillable = ['ho-ten', 'email', 'bo-mon', 'cap-bac', 'ngay-sinh'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function baiGiangs()
    {
        return $this->hasMany('App\BaiGiang', 'id-ng-tao', 'mgv');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chiTietBaiViets()
    {
        return $this->hasMany('App\ChiTietBaiViet', 'id-ng-tao', 'mgv');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function danhSachDiemDanhs()
    {
        return $this->hasMany('App\DanhSachDiemDanh', 'ma-gv', 'mgv');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lops()
    {
        return $this->hasMany('App\Lop', 'mgv-cn', 'mgv');
    }
}
