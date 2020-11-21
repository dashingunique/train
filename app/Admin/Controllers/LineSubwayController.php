<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LineSubway;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class LineSubwayController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LineSubway(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('line_id');
            $grid->column('subway_id');
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
        return Show::make($id, new LineSubway(), function (Show $show) {
            $show->field('id');
            $show->field('line_id');
            $show->field('subway_id');
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
        return Form::make(new LineSubway(), function (Form $form) {

            $form->display('id');

            $form->text('line_id');

            $form->selectResource('subway')
                ->path('system/subway/chose')
                ->multiple(20);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
