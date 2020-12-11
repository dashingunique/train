<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Carbon
 *
 * @package App\Models
 * @property int $id
 * @property int $lot_id 批次信息
 * @property string $sign 碳滑板唯一标识
 * @property float $init_ply 初始厚度
 * @property float $operating 运行里程
 * @property int $status 使用状态：0待用 1再用 2已用
 * @property int $repeated 是否重复利用：0不重复利用 1重复利用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon newQuery()
 * @method static \Illuminate\Database\Query\Builder|Carbon onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereInitPly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereLotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereOperating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereRepeated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carbon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Carbon withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Carbon withoutTrashed()
 * @mixin \Eloquent
 */
class Carbon extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    /**
     * 是否可重复利用 1是
     */
    const IS_REPEATED = 1;

    /**
     * 使用状态：0待用 1再用 2已用
     */
    const STATUS_WAIT = 0;
    const STATUS_USING = 1;
    const STATUS_USED = 2;

    /**
     * 表名称
     * @var string
     */
    protected $table = 'carbon';

    /**
     * 是否可重复利用
     * @return bool
     */
    public function isRepeated(): bool
    {
        return isset($this->repeated) ? $this->repeated === self::IS_REPEATED : false;
    }

    /**
     * 是否是待用状态
     * @return bool
     */
    public function isWait(): bool
    {
        return isset($this->status) ? $this->status === self::STATUS_WAIT : false;
    }

    /**
     * 是否是待用状态
     * @return bool
     */
    public function isUsing(): bool
    {
        return isset($this->status) ? $this->status === self::STATUS_USING : false;
    }

    /**
     * 是否是待用状态
     * @return bool
     */
    public function isUsed(): bool
    {
        return isset($this->status) ? $this->status === self::STATUS_USED : false;
    }
}
