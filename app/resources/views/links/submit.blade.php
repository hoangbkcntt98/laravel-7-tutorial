@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1> Submit a link</h1>
        </div>
        <div class="row">
            <form action="/links" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role = 'alert'>
                        Please fix the following errors
                    </div>
                    @foreach ($errors as $item)
                        <div>{{$item}}</div>
                    @endforeach
                @endif
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control @error('age')
                        is-invalid
                    @enderror" 
                    id="age"
                    name="age"
                    placeholder="Age"
                    value="{{old('age')}}">
                    @error('age')
                        <div class="invalid-feedback">{{$message}}</div>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid    
                        @enderror"
                        id="title"
                        name="title"
                        placeholder="Title"
                        value="{{old('title')}}"
                    >
                    @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">url</label>
                    <input type="text" class="form-control
                        @error('url') is-invalid    
                        @enderror"
                        id="url"
                        name="url"
                        placeholder="url"
                        value="{{old('url')}}"
                    >
                    @error('url')
                    <div class="invalid-feedback">{{$message}}</div>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea class="form-control 
                        @error('description') is-invalid    
                        @enderror"
                        id="description"
                        name="description"
                        placeholder="description"
                        value="{{old('description')}}"
                    ></textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Submit Link</button>
            </form>
        </div>
    </div>
@endsection