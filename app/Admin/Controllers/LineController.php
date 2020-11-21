<?php

namespace App\Admin\Controllers;

use App\Admin\Render\SubwayTable;
use App\Admin\Repositories\Line;
use App\Models\Line as LineModel;
use App\Models\Subway;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LineController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Line(), function (Grid $grid) {
            $grid->quickSearch(['id', 'name']);
            $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
                $create->text('name', '线别名称');
                $create->text('remark', '备注');
            });
            $grid->column('id');
            $grid->column('qrcode')->qrcode(function () {
                return base64_encode('software:' . $this->id);
            }, 200, 200);
            $grid->column('name');
            $grid->column('列车信息')
                ->display('列车信息')
                ->modal('列车信息', SubwayTable::make());
            $grid->column('remark');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->enableDialogCreate();
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, LineModel::with(['subways']), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('remark');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(LineModel::with(['subways']), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('remark');

            $form->multipleSelectTable('subways', trans('admin.subway_id'))
                ->from(SubwayTable::make())
                ->max(20)
                ->options(function () {
                    return Subway::all()->pluck('name', 'id');
                })
                ->customFormat(function ($v) {
                    return array_column($v, 'id');
                })
                ->model(Subway::class, 'id', 'name');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
