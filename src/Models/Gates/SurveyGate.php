<?php

namespace Quill\Survey\Models\Gates;

class SurveyGate
{
    protected $module;
    protected $user;
    protected $policies;

    public function __construct()
    {
        $this->module = 'survey';
        $this->user = auth()->user();
        $this->policies = $this->user->policies()[$this->module];
    } 

    public function view()
    {
        if (in_array(__FUNCTION__, $this->policies) || in_array("*", $this->policies)) {

            return true;
        }

        return false;
    }
    
}
