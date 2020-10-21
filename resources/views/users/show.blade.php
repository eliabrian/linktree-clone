@extends('layouts.links')

@section('content')
<div style="background: {{$user->background_color}}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                @foreach ($user->links as $link)
                    <link-component :user="{{$user}}" :link="{{$link}}"></link-component>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection