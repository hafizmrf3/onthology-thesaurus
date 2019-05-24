<?php

namespace App\Http\Controllers\Author;


use App\Thesaurus;
use App\Category;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;


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
      ini_set('memory_limit','256M');
      $thesauruses = Thesaurus::take(500)->where('status', true)->oldest()->get();
      $categories = Category::all();
      //$thesauruses = Thesaurus::all();
      //kalo mau nampilin json filenya
     //   return $thesauruses;
      return view('author.hierarchy.indextab', compact('thesauruses', 'categories'));
    }


    public function wordmap(Request $request, $id)
    {
        $thesaurus = Thesaurus::find($id);
        return view('author.hierarchy.wordmap', compact('thesaurus'));
    }




}
