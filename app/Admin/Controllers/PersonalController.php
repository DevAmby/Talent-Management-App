<?php

namespace App\Admin\Controllers;

use App\Models\Personal;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PersonalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Personal';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Personal());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('contact_name', __('Contact name'));
        $grid->column('contact_email', __('Contact email'));
        $grid->column('contact_phone', __('Contact phone'));
        $grid->column('address_street', __('Address street'));
        $grid->column('address_city', __('Address city'));
        $grid->column('address_country', __('Address country'));
        $grid->column('address_zip', __('Address zip'));
        $grid->column('emergency_name', __('Emergency name'));
        $grid->column('emergency_number', __('Emergency number'));
        $grid->column('emergency_relationship', __('Emergency relationship'));
        $grid->column('referral_source', __('Referral source'));
        $grid->column('referral_name', __('Referral name'));
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
        $show = new Show(Personal::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('contact_name', __('Contact name'));
        $show->field('contact_email', __('Contact email'));
        $show->field('contact_phone', __('Contact phone'));
        $show->field('address_street', __('Address street'));
        $show->field('address_city', __('Address city'));
        $show->field('address_country', __('Address country'));
        $show->field('address_zip', __('Address zip'));
        $show->field('emergency_name', __('Emergency name'));
        $show->field('emergency_number', __('Emergency number'));
        $show->field('emergency_relationship', __('Emergency relationship'));
        $show->field('referral_source', __('Referral source'));
        $show->field('referral_name', __('Referral name'));
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
        $form = new Form(new Personal());

        $form->number('user_id', __('User id'));
        $form->text('contact_name', __('Contact name'));
        $form->text('contact_email', __('Contact email'));
        $form->text('contact_phone', __('Contact phone'));
        $form->text('address_street', __('Address street'));
        $form->text('address_city', __('Address city'));
        $form->text('address_country', __('Address country'));
        $form->number('address_zip', __('Address zip'));
        $form->text('emergency_name', __('Emergency name'));
        $form->text('emergency_number', __('Emergency number'));
        $form->text('emergency_relationship', __('Emergency relationship'));
        $form->text('referral_source', __('Referral source'));
        $form->text('referral_name', __('Referral name'));

        return $form;
    }
}
