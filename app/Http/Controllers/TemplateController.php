<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\SelectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function index()
    {
        $preguntas = Questions::where('visible', true)->get();
        $selects = DB::table('selects')->get();

        return view('form-settings.views.template-page', compact('preguntas', 'selects'));

    }
}
