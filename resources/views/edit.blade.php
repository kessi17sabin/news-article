@extends('main')

@section('content')

<div class="container">
<form method="post" action="{{route('update',$article->id)}}">
                @csrf
               {{@method_field('PUT')}}
                <div class="form-group">
                  <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="{{$article->title}}">
                </div>

                <div class="form-group">
                  <label for="desc">Description</label>
                <input type="text" class="form-control" name="description" placeholder="{{$article->description}}">
                </div>

                <div class="form-group">
                        <label for="writer">Writer</label>
                <input type="text" class="form-control" name="writer" placeholder="{{$article->writer}}">
                      </div>

                <div class="form-group">
                  <label for="name">Image</label>
                  <input type="file" name="image">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

@endsection
