<x-layout>
<section class="position-relative py-4 py-xl-5" style="margin-top: 30px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Log in</h2>
                <p class="w-lg-50">Login to write your own blogs.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-5">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                            </svg></div>
                        <form class="text-center" method="post" action='/users/authenticate'>
                            @csrf
                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}"></div>
                            @error('email')
                                <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">{{$message}}</p>
                            @enderror
                            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" value="{{old('password')}}"></div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div>
                            <p class="text-muted"><a href={{'\\register'}} style="all:unset;cursor:pointer">Don't have account yet?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
            <p>Chronycles is a versatile and engaging blogging website that covers a wide range of topics spanning various industries such as technology, healthcare, education, and entertainment. Its intuitive and user-friendly interface allows readers to seamlessly navigate through the website and discover new and exciting content with ease. At Chronycles, quality is a top priority, and the team of expert writers and editors pride themselves on delivering well-researched and informative articles that are also entertaining. Whether it's the latest fashion trends or the most recent advancements in artificial intelligence, readers can find a variety of engaging content on Chronycles. With its commitment to accuracy and timeliness, Chronycles is the go-to source for readers seeking high-quality and engaging content.</p>
        </div>
    </div>
</div>
<hr>

</x-layout>