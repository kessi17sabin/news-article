@extends('main')

@section('content')
<div class="container">
<form method="POST" action="{{route('store')}}">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Title">
        </div>

        <div class="form-group">
          <label for="desc">Description</label>
          <input type="text" class="form-control" name="description" placeholder="Description">
        </div>

        <div class="form-group">
                <label for="writer">Writer</label>
                <input type="text" class="form-control" name="writer" placeholder="Writer">
              </div>

        <div class="form-group">
          <label for="name">Image</label>
          <input type="file" name="image">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
