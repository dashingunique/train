<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LoadingLog;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LoadingLogController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LoadingLog(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('loading_id');
            $grid->column('role');
            $grid->column('operator_id');
            $grid->column('desc');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
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
        return Show::make($id, new LoadingLog(), function (Show $show) {
            $show->field('id');
            $show->field('loading_id');
            $show->field('role');
            $show->field('operator_id');
            $show->field('desc');
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
        return Form::make(new LoadingLog(), function (Form $form) {
            $form->display('id');
            $form->text('loading_id');
            $form->text('role');
            $form->text('operator_id');
            $form->text('desc');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
