<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StudentLessonRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StudentLessonCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StudentLessonCrudController extends CrudController
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
        CRUD::setModel(\App\Models\StudentLesson::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/student-lesson');
        CRUD::setEntityNameStrings('оценка студента', 'оценки студентов');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('student')->label('ФИО Студента');
        CRUD::column('lesson')->label('Намиенование урока');
        CRUD::column('first_boundary_control')->label('Первая рубежка');
        CRUD::column('second_boundary_control')->label('Вторая рубежка');
        CRUD::column('session')->label('Сессия');
        CRUD::column('year')->label('Учебный год');
        CRUD::column('semester')->label('Кафедра');
//        // Добавляем фильтр
//        $this->crud->addFilter(
//            [
//                'name'  => 'student_id',
//                'type'  => 'text',
//                'label' => 'ID Студента'
//            ],
//            false,
//            function ($value) {
//                // Фильтрация записей по student_id
//                $this->crud->addClause('where', 'student_id', $value);
//            }
//        );
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(StudentLessonRequest::class);
        CRUD::field('student')->label('ФИО Студента');
        CRUD::field('lesson')->label('Намиенование урока');
        CRUD::field('first_boundary_control')->label('Первая рубежка');
        CRUD::field('second_boundary_control')->label('Вторая рубежка');
        CRUD::field('session')->label('Сессия');
        CRUD::field('year')->label('Учебный год');
        CRUD::field('semester')->label('Кафедра');
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
