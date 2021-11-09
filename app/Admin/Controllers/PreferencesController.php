<?php

namespace App\Admin\Controllers;

use App\Models\Preferences;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PreferencesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Preferences';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Preferences());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('Work_preference_date', __('Work preference date'));
        $grid->column('work_preference_position', __('Work preference position'));
        $grid->column('work_locations', __('Work locations'));
        $grid->column('preference_notification', __('Preference notification'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Preferences::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('Work_preference_date', __('Work preference date'));
        $show->field('work_preference_position', __('Work preference position'));
        $show->field('work_locations', __('Work locations'));
        $show->field('preference_notification', __('Preference notification'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Preferences());

        $form->number('user_id', __('User id'));
        $form->date('Work_preference_date', __('Work preference date'))->default(date('Y-m-d'));
        $form->text('work_preference_position', __('Work preference position'));
        $form->text('work_locations', __('Work locations'));
        $form->text('preference_notification', __('Preference notification'));

        return $form;
    }
}
