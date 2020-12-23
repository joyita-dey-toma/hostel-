<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use Session;

use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.Service.index')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Service.create');
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

        $image->move('uploads/Service', $image_new_name);

        $service = Service::create([
			
            'name' => $request->name,

            'description' => $request->description,

            'image' => 'uploads/Service/'.$image_new_name,
            
        ]);

        Session::flash('success','service created successfully');

        return redirect()->route('service.index');
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
        $service = Service::find($id);

        return view('admin.Service.edit')->with('service',$service);
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
        $service = Service::find($id);
		
		if($request->hasFile('image')){
			
			 $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/Service', $image_new_name);
		
		$service->image = 'uploads/Service/'.$image_new_name;	
				
			
		}
		
		 $service->name = $request->name;
		
         $service->description = $request->description;
		
		
		$service->save();
		
		Session::flash('success','service updated Successfully');
		
		return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
		
		$imagePath = $service->image;
		
		if(file_exists($imagePath)){
			
			 File::delete($imagePath);
		}
		$service->delete();
		
		 Session::flash('success', 'service Deleted successfully.');

        return redirect()->route('service.index');
    }
}
