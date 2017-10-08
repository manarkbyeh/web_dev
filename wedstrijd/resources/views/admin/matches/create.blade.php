@extends('main') @section('title', '| All matches') @section('content')

<div class="row">
  <div class="col-md-12">
    <a href="{{ route('matches.index')}}" class="btn btn-lg btn-primary btn-h1-spacing" style="float: right">View matches</a>
  </div>
</div>
<!-- end of .row -->
<div class="col-md-8 col-md-offset-2">
  <h1>Create New Matches</h1> @if(session()->has('msg'))
  <div class="alert alert-{{ session('alert') }}">
    {!! session('msg') !!}
  </div>
  @endif
  <hr> {!! Form::open(array('route' => 'matches.store', 'data-parsley-validate' => '', 'files' => true)) !!} {{ Form::label('match_name', 'Title:') }} {{ Form::text('match_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))
  }} {{ Form::label('match_description', "Maches Body:") }} {{ Form::textarea('match_description', null, array('class' => 'form-control')) }} {{ Form::submit('Create matches', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:
  20px;')) }} {!! Form::close() !!}
</div>
</div>

@endsection