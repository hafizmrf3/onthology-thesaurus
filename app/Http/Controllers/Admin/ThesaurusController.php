<?php

namespace App\Http\Controllers\Admin;

use App\Thesaurus;
use App\Category;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use App\Notifications\AuthorPostApproved;
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
        // udh bener 
      ini_set('memory_limit','1024M');
      //$thesauruses = Thesaurus::take(3000)->where('status', false)->get();
      $categories = Category::all();
      //$thesauruses = Thesaurus::oldest()->take(30000)->get();
      //terakhir 
      $thesauruses = Thesaurus::take(3000)->where('status', true)->orderBy('mt', 'ASC')->get();
      //$thesauruses = Thesaurus::where('mt','like', 'H%')->orderBy('mt', 'DESC')->get();
      //$thesauruses = Thesaurus::all();
      //kalo mau nampilin json filenya
     //   return $thesauruses;
        

        /*
        $thesauruses = Thesaurus::chunk(10000, function($thesauruses)  {
            foreach($thesauruses as $thesaurus) {
               
            }    
        });
        */
        return view('admin.thesaurus.index', compact('thesauruses'));

        
        /*
        $thesauruses = Thesaurus::latest('id')
                ->select('id', 'mt', 'nt', 'bt', 'it')
                ->chunk(3000, function($thesauruses) {
                foreach ($thesauruses as $thesaurus) {
                    // apply some action to the chunked results here
                }
        });
        */
    }
    

    public function show(Thesaurus $thesaurus)
    {
        return view('admin.thesaurus.show',compact('thesaurus'));
    }

    public function showall()
    {
        return view('admin.thesaurus.show',compact('thesaurus'));
    }


    public function wordmap(Request $request, $id)
    {
        $thesaurus = Thesaurus::find($id);
        return view('admin.hierarchy.wordmap', compact('thesaurus'));
    }
    public function disablewords()
    {
        $thesauruses = Thesaurus::latest()->take(10)->where('status', false)->get();
        return view('admin.thesaurus.disablewords',compact('thesauruses'));
    }

    public function enableword(Request $request, $id)
    {
        $thesaurus = Thesaurus::find($id);

        $thesaurus->status = true;
        $thesaurus->save();
        Toastr::warning('Check it out on Thesaurus Vocab !', 'Warning', ['hideDuration: 10000']);
        Toastr::success('Words Successfully Enabled.', 'Success');
        return redirect()->route('admin.dashboard');
    }


    public function disableword(Request $request, $id)
    {
        $thesaurus = Thesaurus::find($id);

        $thesaurus->status = false;
        $thesaurus->save();
        Toastr::warning('Check it out on DisableWords Page (click DisableWord info-box !)', 'Warning', ['hideDuration: 10000']);
        Toastr::success('Words Successfully Disabled.', 'Success');
        return redirect()->route('admin.dashboard');
        
    }



    public function create()
    {
        $thesauruses = Thesaurus::all();
        return view('admin.thesaurus.create', compact('thesauruses'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mt' => 'required',
            'so' => 'required',
            'author' => 'required',
        ]);

        $thesaurus = new Thesaurus();

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
        return redirect()->route('admin.thesaurus.index');
    }
    
    public function pending()
    {
        $posts = Thesaurus::where('is_approved',false)->get();
        return view('admin.post.pending',compact('posts'));
    }
    public function approval($id)
    {
        $post = Post::find($id);
        if ($post->is_approved == false)
        {
            $post->is_approved = true;
            $post->save();
            $post->user->notify(new AuthorPostApproved($post));
            
            $subscribers = Subscriber::all();
            foreach ($subscribers as $subscriber)
            {
                Notification::route('mail',$subscriber->email)
                    ->notify(new NewPostNotify($post));
            }
            
            Toastr::success('Post Successfully Approved :)','Success');
        } else {
            Toastr::info('This Post is already approved','Info');
        }
        return redirect()->back();
    }
    
    
    
    
    
  

    public function edit($id)
    {
        $thesaurus = Thesaurus::find($id);
        return view('admin.thesaurus.edit', compact('thesaurus'));

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
        return redirect()->route('admin.hierarchy.index');

    }
    public function destroy($id)
    {
        $thesaurus = Thesaurus::find($id);

        $thesaurus->delete();
        Toastr::success('Thesaurus Successfully Deleted', 'Success');
        return redirect()->back();
    }

   
    
}
