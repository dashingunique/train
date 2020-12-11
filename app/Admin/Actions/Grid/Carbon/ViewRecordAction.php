<?php

namespace App\Admin\Actions\Grid\Carbon;

use App\Admin\Forms\ReportViewRecordForm;
use Dcat\Admin\Grid\RowAction;
use Dcat\Admin\Widgets\Modal;

/**
 * 报告登顶记录
 * Class ViewRecordAction
 * @package App\Admin\Actions\Grid\Carbon
 */
class ViewRecordAction extends RowAction
{
    /**
     * 标题
     * @return string
     */
	protected $title = '报告登顶记录';

    /**
     * 解析
     * @return Modal|string
     */
	public function render()
    {
        //获取报告登顶纪录表单
        $form = ReportViewRecordForm::make()->payload(['carbon_id' => $this->getKey()]);

        //弹出模态框信息（报告登记记录表单）
        return Modal::make()->lg()->title('报告' . $this->getRow()->sign . '登顶信息')->body($form)->button($this->title);
    }
}
