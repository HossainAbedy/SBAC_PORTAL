<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function index1()
    {
        $popups = Popup::all();
        return view('welcome', compact('popups'));
    }

    public function index2()
    {
        $popups = Popup::all();
        return view('popuplist', compact('popups'));
    }

    public function view()
    {
        return view('addpopup');
    }

    public function store(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'popup' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($popup = $request->file('popup')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $popup->getClientOriginalExtension();
            $popup->move($destinationPath, $profileImage);
            $input['popup'] = "$profileImage";
        }
      
        Popup::create($input);
       
        return redirect()->route('sites.index')
                        ->with('success','Popup created successfully.');
    }

    public function destroy(Popup $popup)
    {
        $popup->delete();

        return redirect()->route('sites.index')
            ->with('success', 'Popup has been deleted successfully.');
    }
}
