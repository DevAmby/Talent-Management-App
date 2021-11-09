<?php

namespace App\Admin\Controllers;

use App\Models\Credentials;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CredentialsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Credentials';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Credentials());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('licenses_license', __('Licenses license'));
        $grid->column('licenses_state', __('Licenses state'));
        $grid->column('licenses_expiration', __('Licenses expiration'));
        $grid->column('licenses_number', __('Licenses number'));
        $grid->column('licenses_image', __('Licenses image'));
        $grid->column('client_certification', __('Client certification'));
        $grid->column('client_expiration', __('Client expiration'));
        $grid->column('client_number', __('Client number'));
        $grid->column('employment_license', __('Employment license'));
        $grid->column('employment_state', __('Employment state'));
        $grid->column('employment_expiration', __('Employment expiration'));
        $grid->column('employment_number', __('Employment number'));
        $grid->column('certifications_license', __('Certifications license'));
        $grid->column('certifications_state', __('Certifications state'));
        $grid->column('certifications_expiration', __('Certifications expiration'));
        $grid->column('certifications_number', __('Certifications number'));
        $grid->column('medical_license', __('Medical license'));
        $grid->column('medical_state', __('Medical state'));
        $grid->column('medical_expiration', __('Medical expiration'));
        $grid->column('medical_number', __('Medical number'));
        $grid->column('training_licesnse', __('Training licesnse'));
        $grid->column('training_state', __('Training state'));
        $grid->column('training_expiration', __('Training expiration'));
        $grid->column('training_number', __('Training number'));
        $grid->column('additional_license', __('Additional license'));
        $grid->column('additional_state', __('Additional state'));
        $grid->column('additional_expiration', __('Additional expiration'));
        $grid->column('additional_number', __('Additional number'));
        $grid->column('background_license', __('Background license'));
        $grid->column('background_state', __('Background state'));
        $grid->column('background_expiration', __('Background expiration'));
        $grid->column('background_number', __('Background number'));
        $grid->column('hr_license', __('Hr license'));
        $grid->column('hr_state', __('Hr state'));
        $grid->column('hr_expiration', __('Hr expiration'));
        $grid->column('hr_number', __('Hr number'));
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
        $show = new Show(Credentials::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('licenses_license', __('Licenses license'));
        $show->field('licenses_state', __('Licenses state'));
        $show->field('licenses_expiration', __('Licenses expiration'));
        $show->field('licenses_number', __('Licenses number'));
        $show->field('licenses_image', __('Licenses image'));
        $show->field('client_certification', __('Client certification'));
        $show->field('client_expiration', __('Client expiration'));
        $show->field('client_number', __('Client number'));
        $show->field('employment_license', __('Employment license'));
        $show->field('employment_state', __('Employment state'));
        $show->field('employment_expiration', __('Employment expiration'));
        $show->field('employment_number', __('Employment number'));
        $show->field('certifications_license', __('Certifications license'));
        $show->field('certifications_state', __('Certifications state'));
        $show->field('certifications_expiration', __('Certifications expiration'));
        $show->field('certifications_number', __('Certifications number'));
        $show->field('medical_license', __('Medical license'));
        $show->field('medical_state', __('Medical state'));
        $show->field('medical_expiration', __('Medical expiration'));
        $show->field('medical_number', __('Medical number'));
        $show->field('training_licesnse', __('Training licesnse'));
        $show->field('training_state', __('Training state'));
        $show->field('training_expiration', __('Training expiration'));
        $show->field('training_number', __('Training number'));
        $show->field('additional_license', __('Additional license'));
        $show->field('additional_state', __('Additional state'));
        $show->field('additional_expiration', __('Additional expiration'));
        $show->field('additional_number', __('Additional number'));
        $show->field('background_license', __('Background license'));
        $show->field('background_state', __('Background state'));
        $show->field('background_expiration', __('Background expiration'));
        $show->field('background_number', __('Background number'));
        $show->field('hr_license', __('Hr license'));
        $show->field('hr_state', __('Hr state'));
        $show->field('hr_expiration', __('Hr expiration'));
        $show->field('hr_number', __('Hr number'));
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
        $form = new Form(new Credentials());

        $form->number('user_id', __('User id'));
        $form->text('licenses_license', __('Licenses license'));
        $form->text('licenses_state', __('Licenses state'));
        $form->date('licenses_expiration', __('Licenses expiration'))->default(date('Y-m-d'));
        $form->number('licenses_number', __('Licenses number'));
        $form->number('licenses_image', __('Licenses image'));
        $form->text('client_certification', __('Client certification'));
        $form->text('client_expiration', __('Client expiration'));
        $form->number('client_number', __('Client number'));
        $form->text('employment_license', __('Employment license'));
        $form->text('employment_state', __('Employment state'));
        $form->date('employment_expiration', __('Employment expiration'))->default(date('Y-m-d'));
        $form->number('employment_number', __('Employment number'));
        $form->text('certifications_license', __('Certifications license'));
        $form->text('certifications_state', __('Certifications state'));
        $form->date('certifications_expiration', __('Certifications expiration'))->default(date('Y-m-d'));
        $form->number('certifications_number', __('Certifications number'));
        $form->text('medical_license', __('Medical license'));
        $form->text('medical_state', __('Medical state'));
        $form->date('medical_expiration', __('Medical expiration'))->default(date('Y-m-d'));
        $form->number('medical_number', __('Medical number'));
        $form->text('training_licesnse', __('Training licesnse'));
        $form->text('training_state', __('Training state'));
        $form->date('training_expiration', __('Training expiration'))->default(date('Y-m-d'));
        $form->number('training_number', __('Training number'));
        $form->text('additional_license', __('Additional license'));
        $form->text('additional_state', __('Additional state'));
        $form->date('additional_expiration', __('Additional expiration'))->default(date('Y-m-d'));
        $form->number('additional_number', __('Additional number'));
        $form->text('background_license', __('Background license'));
        $form->text('background_state', __('Background state'));
        $form->date('background_expiration', __('Background expiration'))->default(date('Y-m-d'));
        $form->number('background_number', __('Background number'));
        $form->text('hr_license', __('Hr license'));
        $form->text('hr_state', __('Hr state'));
        $form->date('hr_expiration', __('Hr expiration'))->default(date('Y-m-d'));
        $form->number('hr_number', __('Hr number'));

        return $form;
    }
}
