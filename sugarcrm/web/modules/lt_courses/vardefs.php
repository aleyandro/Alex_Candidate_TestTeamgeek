<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_courses'] = [

    'label' => 'Courses',
    'detail_view_class' => 'CoursesDetailView',
    'edit_view_class' => 'CoursesEditView',
    'related_modules' => [

        //define a one to many relatiosnhip where a teacher can have many courses to teach
        'lt_teacher' => [
            'relationship_type' => 'many-to-one',
            'relation_key_lhs' => 'course_id',
        ],
        //Define a many-to-many relationship where a student can have many courses and courses can be on many students
        'lt_student' => [
            'relationship_type' => 'many-to-many',
            'join_table' => 'student_courses',
            'join_key_lhs' => 'course_id',
            'join_key_rhs' => 'student_id',
        ],
        //Define a one-to-many relationship where a case has many policies
        'lt_student' => [
            'relationship_type' => 'one-to-many',
            'relation_key_rhs' => 'course_id',
        ]
    ],
    /* Add all the fields for your module/table below */
    'fields' => [
        /*Any definitions added to the `id` field will be ignored, leave it as an empty array*/
        'id' => [],
        'course_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'teacher_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'name' => [
            'type' => 'string',
            'null' => true,
            'length' => 20,
            'default' => 'as'
        ],
        'duration' => [
            'type' => 'string',
            'null' => true,
            'length' => 6,
            'default' => 'aa'
        ]

         //Add more fields here
    ],
    'detail_view_fields' => [
        ['name', 'description'],
    ],
    'edit_view_fields' => [
        ['name', 'description'],
    ],
    'list_view_fields' => ['name', 'description'],
];