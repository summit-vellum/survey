<?php

namespace Quill\Survey\Models;

use Illuminate\Support\Str;
use Quill\Survey\Events\SurveyCreating;
use Quill\Survey\Events\SurveyCreated;
use Quill\Survey\Events\SurveySaving;
use Quill\Survey\Events\SurveySaved;
use Quill\Survey\Events\SurveyUpdating;
use Quill\Survey\Events\SurveyUpdated;
use Quill\Survey\Models\Survey;

class SurveyObserver
{

    public function creating(Survey $survey)
    {
        // creating logic... 
        event(new SurveyCreating($survey));
    }

    public function created(Survey $survey)
    {
        // created logic...
        event(new SurveyCreated($survey));
    }

    public function saving(Survey $survey)
    {
        // saving logic...
        event(new SurveySaving($survey));
    }

    public function saved(Survey $survey)
    {
        // saved logic...
        event(new SurveySaved($survey));
    }

    public function updating(Survey $survey)
    {
        // updating logic...
        event(new SurveyUpdating($survey));
    }

    public function updated(Survey $survey)
    {
        // updated logic...
        event(new SurveyUpdated($survey));
    }

}