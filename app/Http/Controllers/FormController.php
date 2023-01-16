<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormComponentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FormController extends Controller
{
    final public function postMethod(FormComponentRequest $request) : RedirectResponse
    {
        $request->validated();
        return redirect()->back();
    }
}
