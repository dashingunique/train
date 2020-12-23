<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Loading extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'loading';

    /**
     * 关联列车信息
     * @return BelongsTo
     */
    public function subway(): BelongsTo
    {
        return $this->belongsTo(Subway::class, 'id', 'subway_id');
    }

    /**
     * 关联位置信息
     * @return BelongsTo
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'id', 'position_id');
    }

    /**
     * 关联碳滑板信息
     * @return BelongsTo
     */
    public function carbon(): BelongsTo
    {
        return $this->belongsTo(Carbon::class, 'id', 'carbon_id');
    }

    /**
     * 关联日志信息
     * @return HasMany
     */
    public function logs(): HasMany
    {
        return $this->hasMany(LoadingLog::class, 'loading_id', 'id');
    }
}
