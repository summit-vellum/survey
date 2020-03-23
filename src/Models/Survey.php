<?php

namespace Quill\Survey\Models;

use Vellum\Models\BaseModel;

class Survey extends BaseModel
{

    protected $table = 'surveys';

    public function history()
    {
        return $this->morphOne('Quill\History\Models\History', 'historyable');
    }

    public function resourceLock()
    {
        return $this->morphOne('Vellum\Models\ResourceLock', 'resourceable');
    }

    public function autosaves()
    {
        return $this->morphOne('Vellum\Models\Autosaves', 'autosavable');
    }

}
