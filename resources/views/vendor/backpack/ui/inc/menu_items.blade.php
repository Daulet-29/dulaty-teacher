{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Учителя" :link="backpack_url('user')" />
<x-backpack::menu-item title="Факультет" icon="la la-question" :link="backpack_url('faculty')" />
<x-backpack::menu-item title="Кафедра" icon="la la-question" :link="backpack_url('department')" />
<x-backpack::menu-item title="Уроки" icon="la la-question" :link="backpack_url('lesson')" />

<x-backpack::menu-item title="Студенты" icon="la la-question" :link="backpack_url('student')" />
<x-backpack::menu-item title="Учебный год" icon="la la-question" :link="backpack_url('year')" />
<x-backpack::menu-item title="Семестр" icon="la la-question" :link="backpack_url('semester')" />
<x-backpack::menu-item title="Оценки студентов" icon="la la-question" :link="backpack_url('student-lesson')" />
