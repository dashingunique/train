<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'line';

    /**
     * 关联列车信息
     * @return BelongsToMany
     */
    public function subways(): BelongsToMany
    {
        $pivotTable = LineSubway::class; // 中间表
        $relationTable = Subway::class;
        return $this->belongsToMany($relationTable, $pivotTable, 'line_id', 'subway_id');
    }

    /**
     * 是否启用
     * @return bool
     */
    public function isOpen(): bool
    {
        return isset($this->state) ? $this->state == 1 : false;
    }
}
