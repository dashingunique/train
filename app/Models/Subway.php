<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Subway
 *
 * @property int $id
 * @property string $name 列车名称
 * @property string|null $remark 备注信息
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subway newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subway newQuery()
 * @method static \Illuminate\Database\Query\Builder|Subway onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Subway query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subway whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subway whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subway whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subway whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subway whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subway whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Subway withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Subway withoutTrashed()
 * @mixin \Eloquent
 */
class Subway extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'subway';
}
