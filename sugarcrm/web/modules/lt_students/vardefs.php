<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_students'] = [

    'label' => 'Students',
    'detail_view_class' => 'StudentsDetailView',
    'edit_view_class' => 'StudentsEditView',
    'related_modules' => [
        //Define a one-to-many relationship where a student has many courses
        'lt_courses' => [
            'relationship_type' => 'one-to-many',
            'relation_key_rhs' => 'student_id',
        ]
    ],
    /* Add all the fields for your module/table below */
    'fields' => [
        /*Any definitions added to the `id` field will be ignored, leave it as an empty array*/
        'id' => [],

        'first_name' => [
            'type' => 'string',
            'null' => true,
            'length' => 15,
            'default' => 'aaa'
        ],
        'last_name' => [
            'type' => 'string',
            'null' => true,
            'length' => 20,
            'default' => 'bbb'
        ],
        'id_number' => [
            'type' => 'string',
            'null' => false,
            'length' => 15,
            'default' => ''
        ],
        'phone' => [
            'type' => 'string',
            'null' => true,
            'length' => 15,
            'default' => ''
        ],
        'email' => [
            'type' => 'string',
            'null' => true,
            'length' => 25,
            'default' => ''
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