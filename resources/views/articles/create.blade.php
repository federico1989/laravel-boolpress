<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel struttura</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <input type="text" name="body" id="body" class="form-control" rows="3">
            </div>
            <div class="form-group">
              <label for="tag_id">Tag</label>
              <select type="text" name="tag_id" id="tag_id" class="form-control">
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="category_id">Category</label>
              <select type="text" name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
 
    </body>
</html>
