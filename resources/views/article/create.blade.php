@extends('app')
@section('content')
    <section class="container">
        <form action="{{ url('article') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="title">title</label><input type="text" name="title" class="form-control" >
            <label for="content">content</label><textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            <label class="form-label" for="inputFile">File:</label>
            <input type="file" name="file" id="inputFile" class="form-control @error('file') is-invalid @enderror">
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label for="active">active</label><input type="checkbox" name="active" value="Y"><br>
            <input type="submit" value="送出" class="btn btn-primary">
        </form>
    </section>
@stop