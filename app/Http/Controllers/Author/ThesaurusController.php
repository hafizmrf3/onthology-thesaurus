<?php

namespace App\Http\Controllers\Author;

use App\Thesaurus;
use App\Category;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use App\Notifications\NewAuthorPost;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class ThesaurusController extends Controller
{

    

    public function index()
    {
        $thesauruses = Thesaurus::take(1000)->where('status', true)->get();
        return view('author.thesaurus.index', compact('thesauruses'));
    }


    public function wordmap(Request $request, $id)
    {
        $thesaurus = Thesaurus::find($id);
        return view('author.hierarchy.wordmap', compact('thesaurus'));
    }

    public function disablewords()
    {
        $thesauruses = Thesaurus::take(10)->where('status', false)->get();
        return view('author.thesaurus.disablewords',compact('thesauruses'));
    }

    public function create()
    {
        return view('author.thesaurus.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mt' => 'required',
            'sn' => 'required',
            'uf' => 'required',
            'use' => 'required',
            'bt' => 'required',
            'nt' => 'required',
            'it' => 'required',
            'so' => 'required',
            'author' => 'required',
        ]);

        $thesaurus = new Thesaurus();
        $thesaurus->id = $request->id;
        $thesaurus->mt = $request->mt;
        $thesaurus->sn = $request->sn;
        $thesaurus->uf = $request->uf; 
        $thesaurus->use = $request->use;
        $thesaurus->bt = $request->bt;
        $thesaurus->nt = $request->nt;
        $thesaurus->it = $request->it;
        $thesaurus->so = $request->so;
        $thesaurus->de = $request->de;
        $thesaurus->ko = $request->ko;
        $thesaurus->ana = $request->ana;
        $thesaurus->tgl = $request->tgl;
        $thesaurus->author = $request->author;

        $thesaurus->save();
        Toastr::success('Thesaurus Successfully Saved :)', 'Success');
        return redirect()->route('author.thesaurus.index');
    }
    
    
    public function edit($id)
    {
        $thesaurus = Thesaurus::find($id);
        return view('author.thesaurus.edit', compact('thesaurus'));

    }

    public function update(Request $request, $id)
    {
        $thesaurus = Thesaurus::find($id);
        $thesaurus->id = $request->id;
        $thesaurus->mt = $request->mt;
        $thesaurus->sn = $request->sn;
        $thesaurus->uf = $request->uf; 
        $thesaurus->use = $request->use;
        $thesaurus->bt = $request->bt;
        $thesaurus->nt = $request->nt;
        $thesaurus->it = $request->it;
        $thesaurus->so = $request->so;
        $thesaurus->de = $request->de;
        $thesaurus->ko = $request->ko;
        $thesaurus->ana = $request->ana;
        $thesaurus->tgl = $request->tgl;
        $thesaurus->status = $request->status;
        $thesaurus->author = $request->author;
        
        $thesaurus->save();
        Toastr::success('Thesaurus Successfully Updated :)', 'Success');
        return redirect()->route('author.thesaurus.index');

    }
    
    
}
