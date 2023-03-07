@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Upload a file</h2>
        <form action="/upload" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">Upload</button>
        </form>
    </div>
@endsection
