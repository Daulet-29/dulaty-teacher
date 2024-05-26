<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StudentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StudentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StudentCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Student::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/student');
        CRUD::setEntityNameStrings('студент', 'студенты');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('first_name')->label('Имя');
        CRUD::column('parent_name')->label('Отчество');
        CRUD::column('last_name')->label('Фамилия');
        CRUD::column('date_of_birth')->label('Дата рождения');
        CRUD::column('email')->label('Эл. почта');
        CRUD::column('phone')->label('Телефон');
        CRUD::column('enrollment_year')->label('Год поступления');
        CRUD::column('department')->label('Кафедра');
        CRUD::column('faculty')->label('Факультет');
//        CRUD::column('teacher')->label('Год поступления');
            ////$table->string('first_name')->nullable();
            //    //            $table->string('parent_name')->nullable();
            //    //            $table->string('last_name')->nullable();
            //    //            $table->string('date_of_birth')->nullable();
            //    //            $table->string('email')->nullable();
            //    //            $table->string('phone')->nullable();
            //    //            $table->unsignedBigInteger('enrollment_year_id')->nullable();
            //    //            $table->unsignedBigInteger('department_id')->nullable();
            //    //            $table->unsignedBigInteger('faculty_id')->nullable();
            //    //            $table->unsignedBigInteger('semester_id')->nullable();
            //    //            $table->unsignedBigInteger('teacher_id')->nullable();
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(StudentRequest::class);
        CRUD::field('first_name')->label('Имя');
        CRUD::field('parent_name')->label('Отчество');
        CRUD::field('last_name')->label('Фамилия');
        CRUD::field('date_of_birth')->label('Дата рождения');
        CRUD::field('email')->label('Эл. почта');
        CRUD::field('phone')->label('Телефон');
        CRUD::field('enrollment_year')->label('Год поступления');
        CRUD::field('department')->label('Кафедра');
        CRUD::field('faculty')->label('Факультет');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
