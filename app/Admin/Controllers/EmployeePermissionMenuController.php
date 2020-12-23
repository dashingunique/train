<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\EmployeePermissionMenu;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class EmployeePermissionMenuController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new EmployeePermissionMenu(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('permission_id');
            $grid->column('menu_id');
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
        return Show::make($id, new EmployeePermissionMenu(), function (Show $show) {
            $show->field('id');
            $show->field('permission_id');
            $show->field('menu_id');
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
        return Form::make(new EmployeePermissionMenu(), function (Form $form) {
            $form->display('id');
            $form->text('permission_id');
            $form->text('menu_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
