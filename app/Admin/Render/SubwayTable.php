<?php
/**
 * 十贰进销存系统
 * ==========================================================================
 * @link      http://erp.chaolizi.cn/
 * @license   http://erp.chaolizi.cn/license.html License
 * @Desc
 * ==========================================================================
 * @author    张大宝的程序人生 <1107842285@qq.com>
 */
declare(strict_types=1);

namespace App\Admin\Render;


use App\Models\LineSubway;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class SubwayTable extends LazyRenderable
{

    /**
     * 创建表格.
     * @return Grid
     */
    public function grid(): Grid
    {
        return Grid::make(LineSubway::with(['subway']), function (Grid $grid) {
//            $grid->disableActions();
            if (!empty($this->payload['key'])) {
                $grid->model()->where('line_id', $this->payload['key']);
            }
            $grid->quickSearch(['line_id', 'subway_id', 'subway.name']);
            $grid->column('id');
            $grid->column('subway.name');
            $grid->column('subway.remark');
            $grid->column('subway.created_at')->sortable();
            $grid->column('subway.updated_at');
        });
    }
}
