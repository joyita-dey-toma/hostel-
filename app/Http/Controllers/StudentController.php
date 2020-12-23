<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

use Session;

use File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.Student.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/Student', $image_new_name);

        $Student = Student::create([
			
            'name' => $request->name,

            'contact' => $request->contact,

            'image' => 'uploads/Student/'.$image_new_name,
            
        ]);

        Session::flash('success','Student created successfully');

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('admin.Student.edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Student = Student::find($id);
		
		if($request->hasFile('image')){
			
			 $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/Student', $image_new_name);
		
		$Student->image = 'uploads/Student/'.$image_new_name;	
				
			
		}
		
		 $Student->name = $request->name;
		
         $Student->contact = $request->contact;
		
		
		$Student->save();
		
		Session::flash('success','Student updated Successfully');
		
		return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Student = Student::find($id);
		
		$imagePath = $Student->image;
		
		if(file_exists($imagePath)){
			
			 File::delete($imagePath);
		}
		$Student->delete();
		
		 Session::flash('success', 'Student Deleted successfully.');

        return redirect()->route('student.index');
    }
}
