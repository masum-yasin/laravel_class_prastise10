<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesson = lesson::all();
        return view('backend.lesson.index', compact('lesson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.lesson.create');
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
            // 'lesson_id' => $request->lesson_id,
            'name' => $request->name,
            'description' => $request->description,

            'is_active' => $request->is_active ? true : false,

        ];

        $lesson = lesson::create($requestData);


        return redirect()
            ->route('lessons.index')
            ->withMessage('Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(lesson $lesson)
    {
        return view('backend.lesson.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(lesson $lesson)
    {
        return view('backend.lesson.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lesson $lesson)
    {
        $requestData = [
            'name' => $request->name,
            // 'category_id' => $request->lesson_id,
            'description' => $request->description,
            'is_active' => $request->is_active ? true : false,

        ];
        $lesson->update($requestData);
        return redirect()
        ->route('lessons.index')
        ->withMessage('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(lesson $lesson)
    {
        $lesson->delete();



        return redirect()
            ->route('lessons.index')
            ->withMessage('Successfully deleted');

    }
}
