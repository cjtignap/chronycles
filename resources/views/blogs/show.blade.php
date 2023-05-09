<x-layout>

@php
    $unformated_date = $blog->created_at;
    $formated_date=date_format($unformated_date,"F j, Y" );

    
@endphp
@section('content')
<header class="masthead" style="background-image:url('{{$blog['header-image']?asset('storage/'.$blog['header-image']):asset('img/post-bg.jpg')}}');">

    

    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto position-relative">
                <div class="post-heading">
                    <h1>{{$blog->title}}</h1>
                    <h2 class="subheading">{{$blog->subtitle}}</h2><span class="meta">Posted by&nbsp;<a href="#">{{$blog->writtenByName}}</a>&nbsp;on {{$formated_date}}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p>{{$blog->description}}</p>
                @if($blog['blog-image'])
                <img class="img-fluid" style="min-width:50%"src={{asset('storage/'.$blog['blog-image'])}}/>
                @endif
                <br />

                @if($blog->showControls==true)
                <button class="btn btn-dark btn-sm" type="submit" style="font-size: 12px;padding: 8px 25px;margin-top: 8px;text-align: justify;" 
                    onclick="location.href='{{$blog->id."/edit"}}';">EDIT
                </button>

                <form action="/blogs/{{$blog->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm " type="submit" style="font-size: 12px;padding: 8px 25px;margin-top: 8px;text-align: justify;" 
                       >DELETE
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>
    
</article>
</x-layout>