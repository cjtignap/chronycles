<x-layout>

    <section class="position-relative py-4 py-xl-5" style="margin-top: 30px;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Edit Blog</h2>
                    <p class="w-lg-50">Edit {{$blog->title}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="/blogs/{{$blog->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h5 class="fw-semibold" >Title</h5><input class="form-control" type="text" name="title" placeholder="The quick brown fox jumps..." value={{$blog->title}}>
                        @error('title')
                            <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">Title is required</p>
                        @enderror
                        <h6 class="fw-semibold" style="margin-top:17px">Subtitle</h6><input class="form-control" type="text" name="subtitle" placeholder="Mitochondria is the powerhouse of the cell." value={{$blog->subtitle}}>
                        @error('subtitle')
                                <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">Subtitle is required</p>
                            @enderror
                        <h6 class="fw-normal" style="margin-top: 9px;">Description</h6><textarea  class="form-control" style="min-height: 200px;" name="description" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. " >{{$blog->description}}</textarea>
                        @error('description')
                                <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">Description is required</p>
                            @enderror
                        <h6 class="fw-normal" style="margin-top: 9px;">Select blog image and header image</h6>
                        <input class="form-control form-control-sm" type="file" name="blog-image">
                        <img class="img-fluid" style="height:200px" src={{asset('storage/'.$blog['blog-image'])}}/>
                        <input class="form-control form-control-sm" type="file" name="header-image" style="margin-top: 7px;">
                        <img class="img-fluid" style="height:200px" src={{asset('storage/'.$blog['header-image'])}}/><br />
                        <button class="btn btn-dark btn-sm" type="submit" style="font-size: 12px;padding: 8px 25px;margin-top: 8px;text-align: justify;">UPDATE</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    
    </x-layout>