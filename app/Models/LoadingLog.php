<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class LoadingLog extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'loading_log';

    /**
     * 关联装车记录信息
     * @return BelongsTo
     */
    public function loading(): BelongsTo
    {
        return $this->belongsTo(LoadingLog::class, 'id', 'loading_id');
    }

    /**
     * 关联操作员信息
     * @return BelongsTo
     */
    public function operator(): BelongsTo
    {
        return $this->morphTo('operator', 'role');
    }
}
