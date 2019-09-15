<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $ten-hoc-phan
 * @property string $mgv
 * @property string $ngaytao
 * @property int $tong-so-sinh-vien
 */
class LopHocPhan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'lop-hoc-phan';

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
    protected $fillable = ['ten-hoc-phan', 'mgv', 'ngaytao', 'tong-so-sinh-vien'];

}
