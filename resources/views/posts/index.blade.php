<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @extends('posts.layout')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Wishlist</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('dashboard') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>

        </tr>
        @foreach ($posts as $post)
            <tr>
                <td><img style="width: 350px;height: 150px;" src="{{ $post->image }}"></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td><a href="{{ $post->link }}">{{ $post->price }}</td></a>
                <td>
                    <a class="btn btn-success" style="color:white;width:80px;" href="{{ route('posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-info" style="color:white;width:80px;" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
