<?php

namespace App\Http\Controllers;

use App\Models\MultiImg;
use App\Models\Portfolio;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function Index(){
        $portfolios = Portfolio::latest()->get();
        foreach($portfolios as $portfolio){
            $portfolio->portfolio_images = MultiImg::where('product_id', $portfolio->id)->get();
        }
        return view('admin.portfolio.index',compact('portfolios'));
    }

    public function Add(){
        return view('admin.portfolio.add');
    }

    public function Store(Request $request){
        $data = new Portfolio();
             $image = $request->file('project_image');
             $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
             Image::make($image)->resize(1024,1024)->save('media/portfolio/'.$name_gen);
             Image::make($image)->save('media/portfolio/'.$name_gen);
             $save_url = 'media/portfolio/'.$name_gen;
           $data->project_image =  $save_url;



           $data->portfolio_tag=$request->portfolio_tag;
           $data->project_name=$request->project_name;
           $data->project_tag=$request->project_tag;
           $data->tags=json_encode($request->tags);
           $data->project_dev_name=$request->project_dev_name;
           $data->project_link=$request->project_link;
           $data->project_create=$request->project_create;
           $data->project_description=$request->project_description;
           $data->project_description=$request->project_description;
           $data->project_sub_img=$request->project_sub_img;

           $data->project_video_link=$request->project_video_link;

        $data->save();

        $p_id = $data->id;
          $images = $request->file('multi_image');
             foreach ($images as $img) {
                 $make_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                 Image::make($img)->resize(917,1000)->save('media/multi_img/'.$make_name);
                 $multi_url = 'media/multi_img/'.$make_name;

                $m_img = new MultiImg();
                $m_img->product_id  = $p_id;
                $m_img->photo_name = $multi_url;
                $m_img->save();

             }


             $notification=array(
                 'message'=>'Profile  Upload Success',
                 'alert'=>'success'
             );
             return Redirect()->back()->with($notification);

    }



        //edit category-----------------------------------------------------
        public function Edit($id){
            $portfolio = Portfolio::findOrFail($id);
            $multiImgs = MultiImg::where('product_id',$id)->latest()->get();
            return view('admin.portfolio.edit',compact('portfolio','multiImgs'));
        }


        public function Update(Request $request, $id){
            $data = Portfolio::find($id);
             $image = $request->file('project_image');
             if($image){
                @unlink($data->project_image);
                 $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(1024,1024)->save('media/portfolio/'.$name_gen);
                 Image::make($image)->save('media/portfolio/'.$name_gen);
                 $save_url = 'media/portfolio/'.$name_gen;
                 $data->project_image =  $save_url;
             }



           $data->portfolio_tag=$request->portfolio_tag;
           $data->project_name=$request->project_name;
           $data->project_tag=$request->project_tag;
           $data->portfolio_filters=json_encode($request->portfolio_filters);
           $data->tags=json_encode($request->tags);
           $data->project_dev_name=$request->project_dev_name;
           $data->project_link=$request->project_link;
           $data->project_create=$request->project_create;
           $data->project_description=$request->project_description;
           $data->project_description=$request->project_description;
           $data->project_sub_img=$request->project_sub_img;

           $data->project_video_link=$request->project_video_link;

        $data->save();

        $p_id = $data->id;
          $images = $request->file('multi_image');
          if($images){
            $multiImgs = MultiImg::where('product_id',$id);
            foreach ($multiImgs as $item) {
                @unlink($item->multi_image);
            }
              foreach ($images as $img) {
                  $make_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                  Image::make($img)->resize(917,1000)->save('media/multi_img/'.$make_name);
                  $multi_url = 'media/multi_img/'.$make_name;

                 $m_img = new MultiImg();
                 $m_img->product_id  = $p_id;
                 $m_img->photo_name = $multi_url;
                 $m_img->save();

              }
          }


             $notification=array(
                 'message'=>'Profile  Updated Success',
                 'alert'=>'success'
             );
             return Redirect()->route('portfolio')->with($notification);
        }


        public function Delete($id){
            $portfolio = Portfolio::findOrFail($id);
            @unlink($portfolio->project_image);
            $portfolio->delete();

            $multiImgs = MultiImg::where('product_id',$id);
            foreach ($multiImgs as $item) {
                @unlink($item->multi_image);
            }
            $multiImgs->delete();
            $notification=array(
                'message'=>'Profile  Delted Success',
                'alert'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
}



