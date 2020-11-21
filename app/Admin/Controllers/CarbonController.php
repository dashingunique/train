<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Carbon;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CarbonController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Carbon(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('lot_id');
            $grid->column('sign');
            $grid->column('init_ply');
            $grid->column('operating');
            $grid->column('status');
            $grid->column('repeated');
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
        return Show::make($id, new Carbon(), function (Show $show) {
            $show->field('id');
            $show->field('lot_id');
            $show->field('sign');
            $show->field('init_ply');
            $show->field('operating');
            $show->field('status');
            $show->field('repeated');
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
        return Form::make(new Carbon(), function (Form $form) {
            $form->display('id');
            $form->text('lot_id');
            $form->text('sign');
            $form->text('init_ply');
            $form->text('operating');
            $form->text('status');
            $form->text('repeated');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
