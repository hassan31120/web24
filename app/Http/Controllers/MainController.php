<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Question;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $setting = Setting::find(1);
        $links = Link::latest()->limit(3)->get();
        $questions = Question::all();
        return view('main.main', compact('links', 'setting', 'questions'));
    }

    public function videos(){
        $setting = Setting::find(1);
        $links = Link::latest()->paginate(6);
        return view('main.works', compact('setting', 'links'));
    }
}
