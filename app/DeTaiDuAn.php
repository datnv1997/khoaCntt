<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $ten-de-tai
 * @property string $ngay-bat-dau
 * @property string $ngay-ket-thuc
 * @property string $de-tai-cap
 * @property string $nguoi-thuc-hien
 * @property string $vi-tri
 */
class DeTaiDuAn extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'detai-duan';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ten-de-tai', 'ngay-bat-dau', 'ngay-ket-thuc', 'de-tai-cap', 'nguoi-thuc-hien', 'vi-tri'];

}
