<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Subway;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class SubwayController extends AdminController
{
    /**
     * 选择
     * @param  Content  $content
     * @return Content
     */
    public function chose(Content $content)
    {
        return $content->full()->body($this->choseGrid());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Subway(), function (Grid $grid) {
            $grid->quickSearch(['id', 'name']);
            $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
                $create->text('name', '列车名称');
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
     * @return Grid
     */
    protected function choseGrid()
    {
        return Grid::make(new Subway(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('remark');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });

            $grid->disableActions();
            $grid->disableCreateButton();
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
        return Show::make($id, new Subway(), function (Show $show) {
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
        return Form::make(new Subway(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('remark');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
