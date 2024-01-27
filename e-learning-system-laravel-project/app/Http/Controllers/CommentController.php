<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Notifications\CommentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Course $course)
    {
        $course->comments()->create([
            'body' => $request->comment,
            'commented_by' => Auth::id()
        ]);

        $user = User::where('email', 'iu.rishad5@gmail.com')->first();
        Notification::send($user, new CommentNotification($course));
        return redirect()->back();
    }
}
