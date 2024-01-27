<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topic = topic::all();
        return view('backend.topic.index', compact('topic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lessons = Lesson::pluck('name', 'id')->toArray();
        return view('backend.topic.create', compact('lessons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = [
            'lesson_id' => $request->lesson_id,
            'name' => $request->name,
            'description' => $request->description,

            'is_active' => $request->is_active ? true : false,

        ];

        $topic = topic::create($requestData);


        return redirect()
            ->route('topics.index')
            ->withMessage('Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(topic $topic)
    {
        return view('backend.topic.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(topic $topic)
    {
        //   $topics = topic::pluck('title', 'id')->toArray();

        $lessons = Lesson::pluck('name', 'id')->toArray();

        return view('backend.topic.edit', compact('topic','lessons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topic $topic)
    {
        $requestData = [
            'name' => $request->name,
            'lesson_id' => $request->lesson_id,
            'description' => $request->description,
            'is_active' => $request->is_active ? true : false,

        ];
        $topic->update($requestData);
        return redirect()
        ->route('topics.index')
        ->withMessage('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(topic $topic)
    {
        $topic->delete();



        return redirect()
            ->route('topics.index')
            ->withMessage('Successfully deleted');

    }
}
