@extends('layouts.app')
@section('main')
    <a href="{{ route('articles.create') }}">Create new article</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>AUTHOR</th>
                <th>TITLE</th>
                <th>BODY</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->author}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->body}}</td>
            <td>
                <a href="{{ route('articles.show', ['article' => $value->id]) }}">View</a>
                <a href="{{ route('articles.edit', ['article' => $value->id]) }}">Edit</a>
                <form action="{{ route('articles.destroy', ['article' => $value->id]) }}" method="article">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
</html>
