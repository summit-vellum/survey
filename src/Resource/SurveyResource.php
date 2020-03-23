<?php

namespace Quill\Survey\Resource;

use Quill\Html\Fields\ID;
use Quill\Survey\Models\Survey;
use Vellum\Contracts\Formable;

class SurveyResource extends Survey implements Formable
{
    public function fields()
    {
        return [
            ID::make()->sortable()->searchable(),
        ];
    }

    public function filters()
    {
        return [
            //
        ];
    }

    public function actions()
    {
        return [
            new \Vellum\Actions\EditAction,
            new \Vellum\Actions\ViewAction,
            new \Vellum\Actions\DeleteAction,
        ];
    }

    public function modalActions()
    {
        return [
            new \Vellum\Actions\ViewAction
        ];
    }

}
