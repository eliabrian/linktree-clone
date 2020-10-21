@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Your Links</h2>
                    <a href="/dashboard/links/new" class="btn btn-primary mb-3">Add Link</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Visits</th>
                                <th>Last Visit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($links as $link)
                                <tr>
                                    <td>{{$link->name}}</td>
                                    <td><a href="{{$link->link}}" target="_blank">{{$link->link}}</a></td>
                                    <td>{{$link->visits_count}}</td>
                                    <td>{{$link->latest_visit ? $link->latest_visit->created_at->format('M j Y - H:ia') : 'N/A'}}</td>
                                    <td><a href="/dashboard/links/{{$link->id}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection