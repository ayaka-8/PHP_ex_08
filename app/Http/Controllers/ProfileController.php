<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profile::all()->sortByDesc('updated_at');
        if (empty($profiles)) {
            abort(404);
        }
        return view('profile.index', ['profiles' => $profiles]);
    }
}
