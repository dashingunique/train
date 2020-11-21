<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Reason;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ReasonController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Reason(), function (Grid $grid) {
            $grid->quickSearch(['id', 'name']);
            $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
                $create->text('name', '原因');
                $create->text('remark', '备注');
            });
            $grid->column('id');
            $grid->column('name');
            $grid->column('remark');
            $grid->column('created_at')->sortable();
            $grid->column('updated_at');
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
        return Show::make($id, new Reason(), function (Show $show) {
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
        return Form::make(new Reason(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('remark');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
