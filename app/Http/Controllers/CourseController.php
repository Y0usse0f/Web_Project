<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        // $pageTitle = 'Courses';
        $pageTitle = __('lang.courses');

        // Get the data;
        $result = Course::paginate(10);

        return view('courses.index', compact('pageTitle', 'result'));

    } // End of index

    public function create(){
        return view('courses.create');
    } // End of create method

    public function store(Request $request){
        $rules = [
            'name' => 'required|string|min:5|max:255|unique:courses,name',
            'desc' => 'nullable|string|min:5|max:10000',
        ];

        // validate data
        $this->validate($request, $rules);

        // Save in the model
        Course::create($request->all());

        return redirect()->to('courses');
        // return back();

        // dd(request()->all());

    } // End of store method

    public function show($id)
    {
        $pageTitle = 'Course';

        $item = Course::findOrFail($id);

        return view('courses.show', compact('pageTitle', 'item'));
    } // End of show method

    public function edit($id)
    {
        $pageTitle = 'Course';

        $item = Course::findOrFail($id);

        return view('courses.edit', compact('pageTitle', 'item'));
    } // End of edit method


    public function update($id, Request $request)
    {
        // Get the item
        $item = Course::findOrFail($id);

        // Define rules
        $rules = [
            'name' => 'required|string|min:5|max:255|unique:courses,name',
            'desc' => 'nullable|string|min:5|max:10000',
        ];

        // Do validation
        $this->validate($request, $rules);

        // Get request data
        $data = $request->all();

        // Set a session of type 'Flash': it displayed once.
        session()->flash('success', "Saved!");

        // Update the data
        $item->update($data);

        return back();

    } // End of update

    public function destroy($id){
        // Get item
        $item = Course::findOrFail($id);

        // Delete the item
        $item->delete();

        session()->flash('success', 'Deleted!');
        return back();
    }
}
