<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $msv
 * @property string $ma-gv
 * @property int $id
 * @property string $ho-ten
 * @property string $ten-gv
 * @property string $ngay-diem-danh
 * @property string $trang-thai
 * @property GiaoVien $giaoVien
 * @property SinhVien $sinhVien
 */
class DanhSachDiemDanh extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'danh-sach-diem-danh';

    /**
     * @var array
     */
    protected $fillable = ['msv', 'ma-gv', 'id', 'ho-ten', 'ten-gv', 'ngay-diem-danh', 'trang-thai'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function giaoVien()
    {
        return $this->belongsTo('App\GiaoVien', 'ma-gv', 'mgv')->onDelete('cascade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sinhVien()
    {
        return $this->belongsTo('App\SinhVien', 'msv', 'msv')->onDelete('cascade');
    }
}