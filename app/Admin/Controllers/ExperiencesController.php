<?php

namespace App\Admin\Controllers;

use App\Models\Experiences;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ExperiencesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Experiences';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Experiences());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('education_school', __('Education school'));
        $grid->column('education_location', __('Education location'));
        $grid->column('education_course', __('Education course'));
        $grid->column('education_degree', __('Education degree'));
        $grid->column('education_graduation', __('Education graduation'));
        $grid->column('work_facility', __('Work facility'));
        $grid->column('work_start_date', __('Work start date'));
        $grid->column('work_end_date', __('Work end date'));
        $grid->column('work_street', __('Work street'));
        $grid->column('work_city', __('Work city'));
        $grid->column('work_postal', __('Work postal'));
        $grid->column('work_job', __('Work job'));
        $grid->column('work_unit', __('Work unit'));
        $grid->column('work_unit_beds', __('Work unit beds'));
        $grid->column('work_patient', __('Work patient'));
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
        $show = new Show(Experiences::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('education_school', __('Education school'));
        $show->field('education_location', __('Education location'));
        $show->field('education_course', __('Education course'));
        $show->field('education_degree', __('Education degree'));
        $show->field('education_graduation', __('Education graduation'));
        $show->field('work_facility', __('Work facility'));
        $show->field('work_start_date', __('Work start date'));
        $show->field('work_end_date', __('Work end date'));
        $show->field('work_street', __('Work street'));
        $show->field('work_city', __('Work city'));
        $show->field('work_postal', __('Work postal'));
        $show->field('work_job', __('Work job'));
        $show->field('work_unit', __('Work unit'));
        $show->field('work_unit_beds', __('Work unit beds'));
        $show->field('work_patient', __('Work patient'));
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
        $form = new Form(new Experiences());

        $form->number('user_id', __('User id'));
        $form->text('education_school', __('Education school'));
        $form->text('education_location', __('Education location'));
        $form->text('education_course', __('Education course'));
        $form->text('education_degree', __('Education degree'));
        $form->date('education_graduation', __('Education graduation'))->default(date('Y-m-d'));
        $form->text('work_facility', __('Work facility'));
        $form->date('work_start_date', __('Work start date'))->default(date('Y-m-d'));
        $form->date('work_end_date', __('Work end date'))->default(date('Y-m-d'));
        $form->text('work_street', __('Work street'));
        $form->text('work_city', __('Work city'));
        $form->number('work_postal', __('Work postal'));
        $form->text('work_job', __('Work job'));
        $form->text('work_unit', __('Work unit'));
        $form->text('work_unit_beds', __('Work unit beds'));
        $form->text('work_patient', __('Work patient'));

        return $form;
    }
}
