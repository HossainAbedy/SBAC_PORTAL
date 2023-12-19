<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Popup;
use Illuminate\Http\Request;
use App\Http\Controllers\PopupController;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::all();
        $popupController = new PopupController();
        $popups = $popupController->index1();
        return view('welcome', compact('sites','popups'));
    }

    public function view()
    {
        $sites = Site::all();
        // dd($sites);
        return view('sitelist', compact('sites'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
            'category' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $input['thumbnail'] = "$profileImage";
        }
      
        Site::create($input);
       
        return redirect()->route('sites.view')
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
    public function edit(Site $site)
    {
        return view('siteedit', compact('site'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required',
            'category' => 'required', // corrected 'catagory' to 'category'
        ]);

        $input = $request->except('_token', '_method');

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $input['thumbnail'] = $profileImage;
        }

        $site->update($input);

        return redirect()->route('sites.view')
            ->with('success', 'Site has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        $site->delete();

        return redirect()->route('sites.view')
            ->with('success', 'Site has been deleted successfully.');
    }
}
