<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myTasks() {
        $user = Auth::user();
        return $user->tasks;
    }

    public function profile() {
        return view('home.profile');
    }

    public function getMyFriends() {
        $friends = User::orderBy('id', 'desc')->take(5)->get()->except(Auth::user()->id);
        foreach($friends as $friend) {
            $friend->tasks;
        }
        return $friends;
    }

    public function getDoneTasks() {
        $tasks = array();
        $current_date = Carbon::today();

        for ($i = 0; $i < 6; $i++) {
            $day = $current_date->copy()->subDays($i);
            $day_tasks = array();
            foreach (Auth::user()->tasks as $task) {
                if ($day->diffInDays(Carbon::parse($task->done_date)->format('Y-m-d')) == 0) {
                    array_push($day_tasks, $task);
                }
            }
            $tasks[$i] = $day_tasks;
        }
        dd($tasks);
    }
}
