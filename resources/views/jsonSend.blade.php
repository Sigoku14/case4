@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="post" method="sendJson" enctype="multipart/form-data">
            @csrf
            JSON : <input type="file" name="json" id="json">
        </form>
    </div>

@endsection