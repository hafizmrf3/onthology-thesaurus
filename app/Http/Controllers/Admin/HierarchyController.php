<?php

namespace App\Http\Controllers\Admin;


use App\Thesaurus;
use App\Category;
use App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class HierarchyController extends Controller
{
    public function index()
    {
      //nampilin semua data  $thesauruses = Thesaurus::latest()->get();
      //$thesauruses = DB::table('thesauruses')->where('mt', 'Abaca (plant)')->first();  
      //$thesauruses = Thesaurus::all()->pluck('mt');
      //$thesauruses = Thesaurus::latest()->get();
      //$thesauruses = Thesaurus::orderBy('mt', 'asc')->simplePaginate(100); 
      


        //$thesauruses = DB::table('thesauruses')
        //                ->groupBy('name')
        //                ->get();
        //return view('hierarchy_controller')->with('thesauruses', $thesauruses);

      //$thesauruses = Thesaurus::latest()->get();
     
      
      /* udh bener */
      ini_set('memory_limit','2048M');
      //$thesauruses = Thesaurus::take(50000)->where('status', true)->oldest()->get();
      $thesauruses = Thesaurus::take(30000)->where('status', true)->orderBy('mt', 'ASC')->get();
      $categories = Category::all();
      //$thesauruses = Thesaurus::all();
      //kalo mau nampilin json filenya
     //   return $thesauruses;
      return view('admin.hierarchy.indextab', compact('thesauruses', 'categories'));
      
    }


    public function showall() 
    {
        ini_set('memory_limit','1024M');
        $thesauruses = Thesaurus::take(30000)->where('status', true)->orderBy('mt', 'ASC')->get();
        return view('admin.hierarchy.showall', compact('thesauruses'));
    }


    public function wordmap(Request $request, $id)
    {
        $thesaurus = Thesaurus::find($id);
        $cari = $request->get('searchData');
        //return view('admin.hierarchy.mapping');
        return view('admin.hierarchy.wordmap', compact('thesaurus', 'cari'));
    }

    /* public function search()
    {
        return view('admin.hierarchy.search');
    }
    */
    public function mapping()
    {
        return view('admin.hierarchy.mapping');
    }

     public function search(Request $request) 
     {
         $cari = $request->get('searchData');
         //$thesauruses = Thesaurus::where("mt","=",$cari);
         //Product::where("status", "active")->first();

         $thesauruses = Thesaurus::where('mt','LIKE','%'.$cari.'%')
                                  /*  ->orwhere('nt','LIKE','%'.$cari.'%')
                                    ->orwhere('bt','LIKE','%'.$cari.'%')
                                    ->orwhere('it','LIKE','%'.$cari.'%')
                                    ->orwhere('sn','LIKE','%'.$cari.'%')
                                    ->orwhere('use','LIKE','%'.$cari.'%')
                                    ->orwhere('uf','LIKE','%'.$cari.'%') */
                                    ->paginate(40000);
         return view('admin.hierarchy.filter', compact('cari','thesauruses'));
     }

     public function autocomplete(Request $request)
     {
         $data = Thesaurus::select("mt")->where("mt","LIKE","%{$request->input('query')}%")->get();
         return response()->json($data);
     }
     


}
