<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\event;
use App\Models\Student;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class scheduleController extends Controller
{
    public function index()
    {

        $students = Student::all();
        $tutors = User::role('tutor')->get();

        return view('schedule.index')->with([
            'students' => $students,
            'tutors' => $tutors,
        ]);
    }

    public function store(Request $request)
    {

        $rules = [
            'type' => 'required',
            'tutor' => 'required',
            'student' => 'required',
            'timezone_id' => 'required',
            'day_id' => 'required',
            'room_id' => 'required'
        ];

        request()->validate($rules);
        // session()->flash('error', 'The schedule cannot be generated missing fields');

        $tutorId = $request->tutor;
        $tutorUser = User::where('id', $tutorId)->first();

        // $dayValidate = Day::where('id', $request->day_id)->first();

        $eventvalidate = event::where('day_id', $request->day_id)
            ->where('timezone_id', $request->timezone_id)
            ->where('room_id', $request->room_id)
            ->count();

        // return $eventvalidate;

        if ($eventvalidate === 0) {
            event::create([

                'type' => $request->type,
                'tutor' => $tutorUser->name . ' ' . $tutorUser->last_name,
                'color' => $tutorUser->color,
                'student' => $request->student,
                'timezone_id' => $request->timezone_id,
                'day_id' => $request->day_id,
                'room_id' => $request->room_id,

            ]);

            session()->flash('success', 'Schedule Created Successfully');
            return redirect()->back();
        } else {
            session()->flash('error', 'Schedule Not Available');
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {

        $schedule = event::where('id', $request->id)->first();

        // return $schedule;

        $schedule->delete();
        session()->flash('error', 'Schedule removed successfully');
        return redirect()->back();

        // return $request;

        // return 'funcion de eliminar aplicada';
    }
}
