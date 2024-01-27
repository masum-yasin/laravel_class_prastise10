<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Image;
use Pdf;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('backend.carousels.index', compact('carousels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.carousels.create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
            'image' =>  $this->uploadImage($request->file('image'))
        ];

        Carousel::create($data);

        return redirect()
            ->route('carousels.index')
            ->withMessage('Created Successfully!');
    }

    public function edit(Carousel $carousel)
    {
        return view('backend.carousels.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request->file('image'));
        }

        $carousel->update($data);

        return redirect()
            ->route('carousels.index')
            ->withMessage('Updated Successfully!');
    }

    public function show(Carousel $carousel)
    {
        return view('backend.carousels.show', compact('carousel'));
    }

    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        return redirect()
            ->route('carousels.index')
            ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $carousels = Carousel::onlyTrashed()->get();
        return view('backend.carousels.trash', compact('carousels'));
    }

    public function restore($id)
    {
        $carousel = Carousel::onlyTrashed()->find($id);
        $carousel->restore();

        return redirect()
            ->route('carousels.trash')
            ->withMessage('Restored Successfully!');
    }

    public function delete($id)
    {
        $carousel = Carousel::onlyTrashed()->find($id);
        $carousel->forceDelete();

        return redirect()
            ->route('carousels.trash')
            ->withMessage('Deleted Successfully!');
    }

    public function downloadPdf()
    {
        $carousels = Carousel::all();
        $pdf = Pdf::loadView('backend.carousels.pdf', compact('carousels'));
        return $pdf->stream('carousel-list.pdf');
    }

    public function uploadImage($file)
    {
        $fileName = date('y-m-d').'-'.time().'.'.$file ->getClientOriginalExtension();
        // $file->move(storage_path('app/public/carousels'), $fileName);

        Image::make($file)
                ->resize(1600, 500)
                ->save(storage_path() . '/app/public/carousels/' . $fileName);

        return $fileName;
    }
}


