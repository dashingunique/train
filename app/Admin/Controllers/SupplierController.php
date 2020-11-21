<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Supplier;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class SupplierController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Supplier(), function (Grid $grid) {
            $grid->column('id');
            $grid->column('name');
            $grid->column('address');
            $grid->column('tel');
            $grid->column('email');
            $grid->column('remark');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('name');
                $filter->equal('tel');
                $filter->equal('email');
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
        return Show::make($id, new Supplier(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('address');
            $show->field('tel');
            $show->field('email');
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
        return Form::make(new Supplier(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('address');
            $form->text('tel');
            $form->text('email');
            $form->text('remark');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
