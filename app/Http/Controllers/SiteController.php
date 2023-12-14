<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::all();
        // dd($sites);
        return view('welcome', compact('sites'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('sites.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required',
            'catagory' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $input['thumbnail'] = "$profileImage";
        }
      
        Site::create($input);
       
        return redirect()->route('sites.index')
                        ->with('success','Site created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    // public function show(Product $product): View
    // {
    //     return view('products.show',compact('product'));
    // }
  
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Product $product): View
    // {
    //     return view('products.edit',compact('product'));
    // }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required',
            'catagory' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $input['thumbnail'] = "$profileImage";
        }else{
            unset($input['image']);
        }
            
        $site->update($input);
      
        return redirect()->route('sites.index')
                        ->with('success','Product has been updated successfully.');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $Site): RedirectResponse
    {
        $Site->delete();
         
        return redirect()->route('sites.index')
                        ->with('success','Product has been deleted successfully.');
    }
}
