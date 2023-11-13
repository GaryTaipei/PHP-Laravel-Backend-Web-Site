@extends('app')
@section('content')
    <section class="container">
        <form action="{{ url('article/' . $query->id ) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <label for="title">title</label><input type="text" name="title" class="form-control" value="{{ $query->title }}">
            <label for="content">content</label><textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $query->content }}</textarea>
            @if (empty($query->image_path) == false)
                <div>
                    <img src="{{ asset('uploads/'. $query->image_path) }}" alt="{{ $query->title }}" srcset="">
                </div>
            @endif
            <input type="file" name="file" id="inputFile" class="form-control @error('file') is-invalid @enderror">
            <label for="active">active</label><input type="checkbox" name="active" value="Y" {{ ($query->active === 'Y' ? 'checked' : '')}} ><br>
            <input type="submit" value="送出" class="btn btn-primary">
        </form>
        @if (count($errors) > 0)
        <div class="errors-container">
            <ul>
                @foreach ($errors->all() as $message)
                <li> {{ $message }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </section>

@stop