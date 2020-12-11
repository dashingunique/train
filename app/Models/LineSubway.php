<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\LineSubway
 *
 * @property int $id
 * @property int $line_id 线别ID
 * @property int $subway_id 列车ID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Line|null $line
 * @property-read \App\Models\Subway|null $subway
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway query()
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway whereSubwayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineSubway whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
