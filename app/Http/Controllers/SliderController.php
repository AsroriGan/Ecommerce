<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider(){
        $data=Slider::all();
        return view('dashboardadmin.slider.slider', compact('data'));
    }

    public function updateslider(Request $request, $id)
    {
        // dd($request->all);
        $data =Slider::find($id);
        $data->update([
            // 'foto1' =>$request->foto1
        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('slider/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('slider')->with('success', 'Berhasil Di Update');
    }
}
