@extends('layout')
@section('content')

<body>
    <section>
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <h3>Edit Post</h3>
                <form method="GET" action="{{route('post.update')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$post->id}}"
                    <div class="form-group">
                        <label for="inputname" class="sr-only">Name</label>
                        <input type="text" id="inputname" name="name" class="form-control" placeholder="Name" value="{{$post->name}}" required>
                        <label for="inputemail" class="sr-only">E-mail</label>
                        <input type="text" id="inputemail" name="email" class="form-control" placeholder="E-mail" value="{{$post->email}}" required>
                        <label for="inputpassword" class="sr-only">Password</label>
                        <input type="text" id="inputpassword" name="password" class="form-control" placeholder="Password" value="{{$post->password}}" required>
                        <input type="submit" value="Update post" />
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

@endsection