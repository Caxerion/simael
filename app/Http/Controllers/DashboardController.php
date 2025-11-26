<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\InviteSquad;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $student = Student::find(session('student_id'));
        $squad = $student->squad;
        $invite = InviteSquad::where('student_id', $student->id)->first();

        return view('pages.dashboard', compact('student', 'squad', 'invite'));
    }
}
