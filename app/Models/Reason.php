<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reason
 *
 * @property int $id
 * @property string $name 下车原因
 * @property string $remark 备注信息
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Reason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reason newQuery()
 * @method static \Illuminate\Database\Query\Builder|Reason onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Reason query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Reason withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Reason withoutTrashed()
 * @mixin \Eloquent
 */
class Reason extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'reason';
    
}
