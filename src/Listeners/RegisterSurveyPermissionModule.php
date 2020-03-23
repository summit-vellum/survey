<?php

namespace Quill\Survey\Listeners;

class RegisterSurveyPermissionModule
{ 
    public function handle()
    {
        return [
            'Survey' => [
                'view'
            ]
        ];
    }
}
