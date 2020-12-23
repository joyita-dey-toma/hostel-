<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Facilities;

use Session;

use File;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facilities::all();
        return view('admin.Facility.index')->with('facilities',$facilities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Facility.create');
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

        $image->move('uploads/Facility', $image_new_name);

        $facility = Facilities::create([
			
            'title' => $request->title,

            'description' => $request->description,

            'image' => 'uploads/facility/'.$image_new_name,
            
        ]);

        Session::flash('success','Facility created successfully');

        return redirect()->route('facility.index');
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
        $facility = Facilities::find($id);

        return view('admin.Facility.edit')->with('facility',$facility);
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
        $facility = Facilities::find($id);
		
		if($request->hasFile('image')){
			
			 $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/Facility', $image_new_name);
		
		$facility->image = 'uploads/Facility/'.$image_new_name;	
				
			
		}
		
		 $facility->title = $request->title;
		
         $facility->description = $request->description;
		
		
		$facility->save();
		
		Session::flash('success','facility updated Successfully');
		
		return redirect()->route('facility.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facility = Facilities::find($id);
		
		$imagePath = $facility->image;
		
		if(file_exists($imagePath)){
			
			 File::delete($imagePath);
		}
		$facility->delete();
		
		 Session::flash('success', 'Facility Deleted successfully.');

        return redirect()->route('facility.index');
    }
}
