<?php

namespace App\Http\Controllers;

use App\Models\Designs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\Console\Input\Input;

class DesignController extends Controller
{
    public function AllDesigns(){
        
        $designs=Designs::all();
        return view('staff.designs.allDesigns',compact('designs'));
    }

    public function AddDesigns(Request $request){
        $validatedData = $request->validate([
            'designType' => 'required|unique:designs|min:4',

            
        ],
        [
            'designImage.min'=>'Design Longer Then 4 Characters',
            'designType.required'=>'Please Input Design Image',
        ]);
      
            $designImage=$request->file('designImage');

            $name_gen=hexdec(uniqid());
            $img_ext=strtolower($designImage->getClientOriginalExtension());
            $img_name=$name_gen.'.'.$img_ext;
            $up_location='image/designs/';
            $last_img=$up_location.$img_name;
            $designImage->move($up_location,$img_name);

            Designs::insert([
                'designImage'=>$last_img,
                'designType'=>$request->designType,
                'designTitle'=>$request->designTitle,
                'designDesc'=>$request->designDesc,
                'created_at'=>Carbon::now()

            ]);
           
        return Redirect()->back()->with('success','Design Successful Inserted');
    }

    public function EditDesigns($id){
        $design=Designs::find($id);
        return view ('staff.designs.editDesigns',compact('design'));
    }

    public function UpdateDesigns(Request $request,$id){
        $validatedData = $request->validate([
            'designType' => 'required|min:4',            
        ],
        [
            'designImage.min'=>'Design Longer Then 4 Characters',
            'designType.required'=>'Please Input Design Image',
        ]);

            $oldImage=$request->oldImage;
      
            $designImage=$request->file('designImage');

            $name_gen=hexdec(uniqid());
            $img_ext=strtolower($designImage->getClientOriginalExtension());
            $img_name=$name_gen.'.'.$img_ext;
            $up_location='image/designs/';
            $last_img=$up_location.$img_name;
            $designImage->move($up_location,$img_name);

            unlink($oldImage);

            Designs::find($id)->update([
                'designImage'=>$last_img,
                'designType'=>$request->designType,
                'designTitle'=>$request->designTitle,
                'designDesc'=>$request->designDesc,
            ]);
           
        return Redirect()->back()->with('success','Design Successful Updated');
    }

    public function DeleteDesigns($id)
    {
        $image=Designs::find($id);
        $oldImage=$image->designImage;
        unlink($oldImage);

        Designs::find($id)->delete();
        return Redirect()->back()->with('success','Design Successful Deleted');


    }

}
