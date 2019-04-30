@extends('main')

@section('content')

      <div class="row">
    <div class="container">
            <table class="table table-striped">
                    <thead>
                            <th>S No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Writer</th>
                        </thead>

                 @foreach($articles as $article)
                 <form method="post" action="{{route('delete',$article->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <tbody>
                            <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->description}}</td>
                            <td>{{$article->writer}}</td>
                            <td><a class="btn btn-primary" href="{{route('edit',$article->id)}}">Edit</a>
                            <button class="btn btn-danger" type="submit">Delete</button></td>
                            </tr>
                        </tbody>
                    </form>
                 @endforeach
            </table>
        </div>
    </div>

 @endsection
