@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th scope="row" class="align-middle">{{ $post->id }}</th>
                                <td class="align-middle">{{ $post->post_title }}</td>
                                <td class="align-middle">{{ $post->post_author }}</td>
                                <td class="align-middle">{{ $post->post_date }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">View</a>
                                    <a href="#" class="btn btn-success mx-1">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">Posts are not available</td>
                            </tr>
                        @endforelse      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
