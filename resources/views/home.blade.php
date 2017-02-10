@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Project</div>

                <div class="panel-body">
                    <form action="/project/new" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="Create A new Project" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new Contact</div>

                <div class="panel-body">
                    <form action="/contact/new" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="Create A new Contact" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <ul>
                        @foreach($projects as $proj)
                            <li>
                                <a href="/project/{{$proj->projectId}}">{{$proj->projectTitle or 'title Not Found'}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
