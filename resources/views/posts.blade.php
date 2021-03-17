@extends('layout')
@section('content')

<h1>All Posts</h1>
<table class="table table-light center mx-auto">
    <thead>
        <tr>
            <th scope="col ">Post Name</th>
            <th scope="col">Post Email</th>
            <th scope="col">Post Password</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)

        <tr>
            <th scope="row">{{$post->name}}</th>
            <th scope="row">{{$post->email}}</th>
            <th scope="row">{{$post->password}}</th>
            <th scope="row">{{$post->active}}</th>

            <th scope="row">
                <a href="/delete-post/{{$post->id}}">Delete</a>
                <a href=/edit-post/{{$post->id}}">Edit</a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection