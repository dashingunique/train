<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Employee;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class EmployeeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Employee(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('username');
            $grid->column('password');
            $grid->column('name');
            $grid->column('number');
            $grid->column('avatar');
            $grid->column('remember_token');
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
        return Show::make($id, new Employee(), function (Show $show) {
            $show->field('id');
            $show->field('username');
            $show->field('password');
            $show->field('name');
            $show->field('number');
            $show->field('avatar');
            $show->field('remember_token');
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
        return Form::make(new Employee(), function (Form $form) {
            $form->display('id');
            $form->text('username');
            $form->text('password');
            $form->text('name');
            $form->text('number');
            $form->text('avatar');
            $form->text('remember_token');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
