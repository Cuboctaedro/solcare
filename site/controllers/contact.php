<?php

use Uniform\Form;

return function ($kirby) {

    $form = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => 'Please enter your name',
        ],
        'firma' => [],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        'phone' => [],
        'mobile' => [],
        'dachgroesse' => [],
        'asbest' => [],
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],
    ]);

    if ($kirby->request()->is('POST')) {
        $form->emailAction([
            'from' => 'welcome@supercompany.com',
            'to' => 'someone@gmail.com',
            'subject' => '{{name}}  - Website Form',
            'template' => 'contact',

        ]);
    }

    return compact('form');

};
