<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BiolinkController extends Controller
{
    public function __invoke(User $user)
    {
        return view('biolinks', compact('user'));
    }
}
