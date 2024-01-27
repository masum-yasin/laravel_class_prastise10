<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Topic;
use Str;
use Image;
use Pdf;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('backend.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->toArray();
        $topic = Topic::pluck('name', 'id')->toArray();
        return view('backend.course.create', compact('categories', 'topic'));
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
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'is_active' => $request->is_active ? true : false,
            'topic_id' => $request->topic_id,
            'image' =>  $this->uploadImage($request->file('image'))
        ];

        $course = Course::create($requestData);


        return redirect()
            ->route('courses.index')
            ->withMessage('Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('backend.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::pluck('title', 'id')->toArray();
        $topics = Topic::pluck('name', 'id')->toArray();
        return view('backend.course.edit', compact('course', 'categories', 'topics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $requestData = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'is_active' => $request->is_active ? true : false,

        ];
        if ($request->hasFile('image')) {
            $requestData['image'] = $this->uploadImage($request->file('image'));
        }
        $course->update($requestData);
        return redirect()
            ->route('courses.index')
            ->withMessage('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()
            ->route('courses.index')
            ->withMessage('Successfully deleted');
    }
    public function uploadImage($file)
    {
        $fileName = date('y-m-d').'-'.time().'.'.$file ->getClientOriginalExtension();
        // $file->move(storage_path('app/public/carousels'), $fileName);

        Image::make($file)
                ->resize(400, 500)
                ->save(storage_path() . '/app/public/courses/' . $fileName);

        return $fileName;
    }
    public function downloadPdf()
    {
        $courses = Course::all();
        // dd($courses);
        $pdf = Pdf::loadView('backend.Course.pdf', compact('courses'));
        return $pdf->stream('course-list.pdf');
    }

}
