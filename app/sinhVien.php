<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $msv
 * @property string $ho-ten
 * @property string $lop
 * @property string $ngay-sinh
 * @property DanhSachDiemDanh[] $danhSachDiemDanhs
 */
class sinhVien extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sinh-vien';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'msv';

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
    protected $fillable = ['ho-ten', 'lop', 'ngay-sinh'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function danhSachDiemDanhs()
    {
        return $this->hasMany('App\DanhSachDiemDanh', 'msv', 'msv');
    }
}