<?php

namespace App\Admin\Controllers;

use App\Models\Carbon;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LoadingController extends AdminController
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
            $grid->column('subway_id');
            $grid->column('position_id');
            $grid->column('init_ply');
            $grid->column('loading');
            $grid->column('status');
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
        });
    }
}
