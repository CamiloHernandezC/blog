<?php

namespace App\Http\Controllers;


use App\Attendees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AttendeesController extends Controller
{
    /**
     * Display the list of travel blogs.
     *
     */
    public function find(){
        $attendee = Attendees::where('name', request()->nameCode)->orWhere('code',request()->nameCode)->firstOrFail();
        //$attendee = Attendees::findOrFail(1);
        Session::put('attendee',$attendee);
        Session::save();
    }

    public function cancel(){
        Session::forget('attendee');
        Session::save();
        error_log('si entre');
    }

    public function confirmAttendance(Request $request){
        $attendee = Session::get('attendee');
        $attendee->confirm = $request->has('principalAttendance');
        $attendee->save();
        foreach ($attendee->subAttendees()->get() as $subAttendee){
            if($request->has('subAttendees')){
                Attendees::whereIn('id',  $request->input('subAttendees'))
                    ->update(['confirm' => true]);
                Attendees::whereNotIn('id',  $request->input('subAttendees'))
                    ->where('relation', $attendee->id)
                    ->update(['confirm' => false]);
            }else{
                Attendees::where('relation', $attendee->id)
                    ->update(['confirm' => false]);
            }
        }
        return redirect()->route('wedding');
    }


}
