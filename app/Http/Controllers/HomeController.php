<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\website\Prize;
use App\models\blog\BlogCategory;
use App\models\Services;
use App\models\ReviewCus;
use App\models\BannerAds;
use App\models\PageContent;

class HomeController extends Controller
{
    public function home()
    {
        $data['productnew'] = Product::where('status',1)->limit(6)->get(['id','category','name','discount','price','images','slug','cate_slug','type_slug']);
        $data['hotnews'] = Blog::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->limit(6)->get(['id','title','slug','created_at','image','description']);
        $data['aboutUs'] = PageContent::where(['status'=>1,'language'=>'vi','type'=>'ve-chung-toi'])->first();
        $data['reviewcus'] = ReviewCus::where(['status'=>1])->get();
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['video'] = Prize::where(['status'=>1])->orderBy('id','DESC')->get(['id','image','name','link']);
        $data['bannerqc'] = BannerAds::where('status',1)->get(['name','image','id','content']);
        return view('home',$data);
    }
}
