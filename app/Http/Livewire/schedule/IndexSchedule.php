<?php

namespace App\Http\Livewire\schedule;

use App\Models\event;
use Livewire\Component;

class IndexSchedule extends Component
{
    public $day = 1;
    

    public function render()
    {
        $events = event::where('day_id', $this->day)->get();
        return view('livewire.schedule.index-schedule', compact('events'));       
    }
}
