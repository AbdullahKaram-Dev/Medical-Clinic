<?php

namespace App\Http\Controllers\BackEnd;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
       return view('back.gallery.upload-gallery');
    }

    function upload(Request $request)
    {

        $ImageName =[];
        $image_code = '';

        if(!empty($request->file('file')) && count($request->file('file')) === 6 && $request->status == 'active'|| 'deactivate'){

            $images = $request->file('file');
            foreach($images as $image)
            {
                $newName = $image->store('gallery/images');
                array_push($ImageName,$newName);
                $image_code .= '<div class="col-md-1" style="margin-bottom:24px;"><img src="'.asset('storage').'/'.$newName.'" class="img-thumbnail" /></div>';
            }

            $output = array(
                'success'  => 'Images Uploaded Successfully',
                'image'   => $image_code
            );

        }else{
            $output = array(
                'error'  => 'You Can Upload Only Images Type And 6 Photos',
            );
        }
       $gallery = Gallery::create([
            'image_0'=>$ImageName[0],
            'image_1'=>$ImageName[1],
            'image_2'=>$ImageName[2],
            'image_3'=>$ImageName[3],
            'image_4'=>$ImageName[4],
            'image_5'=>$ImageName[5],
            'status'=>$request->status,
        ]);
        $gallery->save();
        return response()->json($output);
     }

     public function show()
     {
        $galleries = Gallery::paginate(paginate);
        $array = array('image_0','image_1','image_2','image_3','image_4','image_5');
        return view('back.gallery.show-gallery',compact('galleries','array'));
     }

     public function deleteGallery($id)
     {
        $delete = Gallery::findOrFail($id);
        $delete->delete();
         alert()->success('Gallery Deleted Successfully','Success');
         return back();
     }

     public function changeStatus($id)
     {
         $status = Gallery::findOrFail($id);
         if($status->status === 'active'){

             $status->status='deactivate';
             $status->save();
             alert()->success('Gallery Status Changed Successfully To '.$status->status,'Success');
             return back();
         }else{
             $status->status='active';
             $status->save();
             alert()->success('Gallery Status Changed Successfully To '.$status->status,'Success');
             return back();
          }
     }

}
