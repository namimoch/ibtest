@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>ADMIN </strong>
                    {!! Form::open(['route' => 'production.index']) !!}
                        echo Form::text('username');
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
