@extends('Front end.layout')
@section('content')
    <h1>Create form</h1>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">logout</button>
    </form>

    <form action="{{ route('createbook') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release Date</label>
            <input name="release" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Price">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre Id</label>
            <input name="genreId" type="text" class="form-control" id="formGroupExampleInput" placeholder="genre id">
        </div>
        @error('price')
            <div class="alert alert-danger"> <h1>{{ $message }}</h1></div>
        @enderror
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection