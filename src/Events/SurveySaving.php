<?php 

namespace Quill\Survey\Events;


use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Quill\Survey\Models\Survey;

class SurveySaving
{
    // use Dispatchable, InteractsWithSockets, 
    use SerializesModels;
 
    public $data;

    /**
     * Create a new event instance.
     *
     * @param  \Quill\Survey\Models\Survey  $data
     * @return void
     */
    public function __construct(Survey $data) 
    {
        $this->data = $data;  
    }
}
