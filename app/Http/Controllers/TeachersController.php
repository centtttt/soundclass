<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(Request $request){
        $query = $request->input('search');
        $filter = $request->input('filter');

        $teachers = Teacher::when($query, function ($queryBuilder) use ($query) {
            $queryBuilder->whereHas('user', function ($userQuery) use ($query) {
                $userQuery->where('name', 'like', '%' . $query . '%');
            })->orWhere('bio', 'like', '%' . $query . '%');
        })->when($filter, function ($queryBuilder) use ($filter) {
            $queryBuilder->where('specialization', 'like','%' .$filter. '%');
        })->get();

        return view('teachers', compact('teachers'));
    }
}
