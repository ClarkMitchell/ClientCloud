<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FilesController extends Controller
{
    public function index(): View
    {
        return view(
            'files.index',
            ['files' => Auth::user()->files->toArray()]
        );
    }

//    public function create(): Response
//    {
//    }
//
//    public function store(Request $request): Response
//    {
//    }
//
//    public function show(File $file): Response
//    {
//    }
//
//    public function edit(File $file): Response
//    {
//    }
//
//    public function update(Request $request, File $file): Response
//    {
//    }
//
//    public function destroy(File $file): Response
//    {
//    }
}
