<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $ten-cong-trinh
 * @property string $tac-gia
 * @property string $tapchi-bao
 * @property string $so-tapchi
 * @property string $nam
 */
class CongTrinhCongBo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cong-trinh-cong-bo';

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
    protected $fillable = ['ten-cong-trinh', 'tac-gia', 'tapchi-bao', 'so-tapchi', 'nam'];

}
