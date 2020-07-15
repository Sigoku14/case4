@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="getJson" method="post" enctype="multipart/form-data">
            @csrf
            JSON : <input type="file" name="json" id="json">
            name : <input type="text" name="iiii">
            <input type="submit" name="send" value="send">
        </form>
    </div>

@endsection