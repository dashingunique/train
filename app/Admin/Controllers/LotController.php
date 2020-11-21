<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Lot;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LotController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Lot(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('brand_id');
            $grid->column('supplier_id');
            $grid->column('lot_sign');
            $grid->column('pact_name');
            $grid->column('pact_number');
            $grid->column('model');
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
        return Show::make($id, new Lot(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('brand_id');
            $show->field('supplier_id');
            $show->field('lot_sign');
            $show->field('pact_name');
            $show->field('pact_number');
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
        return Form::make(new Lot(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('lot_sign');
            $form->text('pact_name');
            $form->text('pact_number');
            $form->text('supplier');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
