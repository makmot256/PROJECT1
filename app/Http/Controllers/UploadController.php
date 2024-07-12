<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UploadImport;
use App\Imports\AnswerImport;

class UploadController extends Controller
{
    public function importQuestions(Request $request)
    {
        Excel::import(new UploadImport,  $request->file('file'));

        return redirect('/')->with('success', 'All good!');
    }

    public function importAnswers(Request $request)
    {
        Excel::import(new AnswerImport,  $request->file('file'));

        return redirect('/')->with('success', 'All good!');
    }
}
