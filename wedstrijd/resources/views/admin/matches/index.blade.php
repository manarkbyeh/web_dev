@extends('main') @section('title', '| All matches') @section('content')

<div class="row">
  <div class="col-md-10">
    <h1>All matches</h1>
  </div>

  <div class="col-md-2">
    <a href="{{ route('matches.create') }}" class="btn btn-lg btn-primary btn-h1-spacing">Create New matches</a>
  </div>
  <div class="col-md-12">
    <hr>
  </div>
</div>
<!-- end of .row -->

<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created At</th>
        <th></th>
      </thead>

      <tbody>
        @if($matches) @foreach ($matches as $match)

        <tr>
          <th>{{ $match->match_id }}</th>
          <td>{{ $match->match_name }}</td>
          <td>{{ $match->match_description }}</td>
          <td>{{ date('M j, Y', strtotime($match->created_at)) }}</td>
          <td><a href="#" class="btn btn-default btn-sm">View</a> <a href="#" class="btn btn-default btn-sm">Edit</a></td>
        </tr>

        @endforeach @endif

      </tbody>
    </table>


  </div>
</div>

@endsection