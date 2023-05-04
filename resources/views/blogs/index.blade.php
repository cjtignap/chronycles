<x-layout>


@if(count($blogs)==0)
<h1>No listings found</h1>
@endif

@include('partials._index_header')
<div class="container">
    <div class="row">
        <div class="col" style="text-align: right;">
            <form action="/" method="get">
            <h4 class="fs-5 fw-lighter">Search<input class="form-control-sm" type="search" name="search"></h4>
            <input type="submit" value="search"/>
        </form>
        </div>
    </div>
</div>
<div class="container">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-8">
            
            @foreach($blogs as $blog)
                <x-blog_item :blog="$blog" />
            @endforeach

        </div>
    </div>  
</div>

<div class="clearfix float-end" style="margin-right:20%">
    {{-- <button class="btn btn-primary float-end" type="button">Older Posts&nbsp;⇒
        </button> --}}
        {{$blogs->links()}}
</div>

{{-- <div class="bg-dark text-light" style="height:10px">
    {{$blogs->links()}}
</div> --}}
</x-layout>