<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    private $taskList = [
        'first' => 'Sleep',
        'second' => 'Eat',
        'thirt' => 'Work',
    ];

    public function index()
    {
        if (request()->search) {
            return $this->taskList[request()->search];
        }
        return $this->taskList;
    }

    public function show($param)
    {
        return $this->taskList[$param];
    }

}
