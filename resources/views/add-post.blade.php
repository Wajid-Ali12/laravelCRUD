@extends('layout')
@section('content')



<!-- <style>
    body {
        padding-top: 5rem;
        padding-left: 20%;
    }
</style> -->

<body>
    <section>
        <div class="col-md-auto">
            <div class="card border-bg-light pb-5 w-50 d-flex justify-content-center">
                <div class="container">
                    <div class="col-md-6 offset-md-3">
                        <h3>Add Post</h3>
                        <form method="post" action="{{route('post.add')}}">
                            @csrf
                            <div class="form-group">
                                <label for="inputname" class="sr-only">Name</label>
                                <input type="text" id="inputname" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                                <small id="inputnameHelp" class="text-danger">
                                    {{$errors->first('name')}}
                                </small>
                                <label for="inputemail" class="sr-only">E-mail</label>
                                <input type="email" id="inputemail" name="email" class="form-control" placeholder="E-mail" value="{{old('email')}}">
                                <small id="inputnameHelp" class="text-danger">
                                    {{$errors->has('email') ? 'Email is required' : ''}}
                                </small>
                                <label for=" inputpassword" class="sr-only">Password</label>
                                <input type="text" id="inputpassword" name="password" class="form-control" placeholder="Password">
                                <small id="inputnameHelp" class="text-danger"> {{$errors->has('password') ? "Password Must be unique and have 8 Character" : ''}}</small>


                                <div class="form-group py-2">
                                <label for="active">Status</label>
                                    <select name="active" id="active" class="form-control">
                                        <option value="" disabled>Select Customer Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>
                                <div class="form-group py-2">
                                    <input class="btn btn-outline-dark" type="submit" value="add post" />
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection