<x-layout>
<section class="position-relative py-4 py-xl-5" style="margin-top: 30px;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Register</h2>
                <p class="w-lg-50">Register to read other's blog and also write your own.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-5">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                            </svg></div>
                        <form class="text-center" method="POST" action="/users" enctype="multipart/form-data">

                            @csrf
                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}"></div>
                            @error('email')
                                <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">Email is required</p>
                            @enderror
                            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" value="{{old('username')}}"></div>
                            @error('username')
                                <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">Username is required</p>
                            @enderror
                            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name" value="{{old('name')}}"></div>
                            @error('name')
                                <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">Name is required</p>
                            @enderror
                            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" value="{{old('password')}}"></div>
                            @error('password')
                                <p class="text-danger" style="font-size:0.8em;margin:0px;padding:0px">Password is required</p>
                            @enderror
                            <label for="profile-image">Select profile picture</label>
                            <input class="form-control form-control-sm" type="file" name="profile-image">
                            <br />
                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">SIGN UP</button></div>
                            <p class="text-muted"><a href={{'\\login'}} style="all:unset;cursor:pointer">Already have an account?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>