<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Line
 *
 * @property int $id
 * @property string $name 线别名称
 * @property string|null $remark 备注信息
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Subway[] $subways
 * @property-read int|null $subways_count
 * @method static \Illuminate\Database\Eloquent\Builder|Line newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Line newQuery()
 * @method static \Illuminate\Database\Query\Builder|Line onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Line query()
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Line withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Line withoutTrashed()
 * @mixin \Eloquent
 */
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
