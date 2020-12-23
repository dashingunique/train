<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\EmployeeRolePermission;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class EmployeeRolePermissionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new EmployeeRolePermission(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('role_id');
            $grid->column('permission_id');
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
        return Show::make($id, new EmployeeRolePermission(), function (Show $show) {
            $show->field('id');
            $show->field('role_id');
            $show->field('permission_id');
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
        return Form::make(new EmployeeRolePermission(), function (Form $form) {
            $form->display('id');
            $form->text('role_id');
            $form->text('permission_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
