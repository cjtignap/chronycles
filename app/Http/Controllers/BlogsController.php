<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogsController extends Controller
{
    public function index(){
        
        return view('blogs.index', [
            'heading' => "Latest blogs",
            // 'blogs'=>Blog::all()
            'blogs' => Blog::latest()->filter(request(['written-by','search']))->simplePaginate(10)
        ]);
    }

    public function show(Blog $blog){
       // $name = User::all();
        $name = User::where('username',$blog['username'])->first();
        $blog->writtenByName = $name['name'];
        $blog->showControls = false;
       
        if(!is_null(auth()->user())){
            if(auth()->user()->username==$blog['username']){
                $blog->showControls = true;
            }
        }
        
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'description'=>'required', 
            
        ]);

        //temporary
        $formFields['username']=auth()->user()->username;
        
        if($request->hasFile('header-image')){
            $formFields['header-image']= $request->file('header-image')->store('header-images','public');
        }

        if($request->hasFile('blog-image')){
            $formFields['blog-image']= $request->file('blog-image')->store('blog-images','public');
        }
        Blog::create($formFields);


        return redirect('/')->with('message','Blog Posted Succesfully.');
    }

    public function edit(Blog $blog){
        return view('blogs.edit',['blog'=>$blog]);

    }

    public function update(Request $request,Blog $blog){
        $formFields = $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'description'=>'required', 
            
        ]);

        //temporary
        $formFields['username']='cjtignap';
              
        if($request->hasFile('header-image')){
            $formFields['header-image']= $request->file('header-image')->store('header-images','public');
        }

        if($request->hasFile('blog-image')){
            $formFields['blog-image']= $request->file('blog-image')->store('blog-images','public');
        }
        $blog->update($formFields);


        return back()->with('message','Blog Updated Succesfully.');
    }

    public function destroy(Blog $blog){
        $blog->delete();
        return redirect('/')->with('message','Blog deleted succesfully');
    }


}
