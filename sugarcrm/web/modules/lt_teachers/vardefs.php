<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_teachers'] = [

    'label' => 'Teachers',
    'detail_view_class' => 'TeachersDetailView',
    'edit_view_class' => 'TeachersEditView',
    'related_modules' => [],
    /* Add all the fields for your module/table below */
    'fields' => [
        /*Any definitions added to the `id` field will be ignored, leave it as an empty array*/
        'id' => [],
        'student_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'first_name' => [
            'type' => 'string',
            'null' => false,
            'length' => null,
            'default' => true
        ],
        'last_name' => [
            'type' => 'string',
            'null' => false,
            'length' => null,
            'default' => true
        ],
        'phone' => [
            'type' => 'string',
            'null' => false,
            'length' => null,
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