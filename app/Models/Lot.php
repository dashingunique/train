<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lot
 *
 * @property int $id
 * @property string $name 批次名称
 * @property string $lot_sign 批次唯一标识
 * @property int $supplier_id 供应商ID
 * @property int $brand_id 品牌ID
 * @property string|null $model 型号
 * @property string|null $pact_number 合同编号
 * @property string|null $pact_name 合同名称
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Lot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lot newQuery()
 * @method static \Illuminate\Database\Query\Builder|Lot onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Lot query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot wherePactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot wherePactNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Lot withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Lot withoutTrashed()
 * @mixin \Eloquent
 */
class Lot extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'lot';
    
}
