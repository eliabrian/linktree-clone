@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Create a new link</h2>
                    <form action="/dashboard/links/new" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid  @enderror" placeholder="My Youtube Channel" value="{{ @old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="link">Link URL</label>
                                    <input type="text" name="link" id="link" class="form-control @error('link') is-invalid  @enderror" placeholder="https://youtube.com/user/my-channel" value="{{ @old('link') }}">
                                    @error('link')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save Link</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection