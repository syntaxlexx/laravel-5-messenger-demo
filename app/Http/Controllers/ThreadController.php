<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lexx\ChatMessenger\Models\Thread;
use Session;

class ThreadController extends Controller
{
    protected $model;

    public function __construct(Thread $model)
    {
        $this->middleware('auth');
        $this->model = $model;
    }

    /**
     * Remove a participant from a thread
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addParticipant($id, $userId)
    {
        $thread = $this->model->findOrFail($id);
        if($thread->addParticipant($userId))
        {
            Session::flash('success', 'Participant added successfully');
        } else {
            Session::flash('error', 'There was an error adding the participant');
        }

        return redirect()->back();
    }

    /**
     * Remove a participant from a thread
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeParticipant($id, $userId)
    {
        $thread = $this->model->findOrFail($id);
        if($thread->removeParticipant($userId))
        {
            Session::flash('success', 'Participant removed successfully');
        } else {
            Session::flash('error', 'There was an error removing the participant');
        }

        return redirect()->back();
    }
}
