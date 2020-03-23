<?php

namespace Quill\Survey\Listeners;
use Illuminate\Support\Facades\Log;

class SurveyEventSubscriber
{
    /**
     * Handle the event.
     */
    public function handleCreated($event) 
    {
        //
    } 

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Quill\Survey\Events\SurveyCreated',
            'Quill\Survey\Listeners\SurveyEventSubscriber@handleCreated'
        ); 
    }
}