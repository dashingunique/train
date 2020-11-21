<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LineSubway extends Model
{
	use HasDateTimeFormatter;

    protected $table = 'line_subway';

    /**
     * 关联线别信息
     * @return HasOne
     */
    public function line(): HasOne
    {
        return $this->hasOne(Line::class, 'id', 'line_id');
    }

    /**
     * 关联列车信息
     * @return HasOne
     */
    public function subway(): HasOne
    {
        return $this->hasOne(Subway::class, 'id', 'subway_id');
    }
}
