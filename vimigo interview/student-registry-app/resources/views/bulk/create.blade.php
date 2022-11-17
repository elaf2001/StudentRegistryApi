@extends('index')
@section('content')
<h3> Upload your file to create students! </h3>
    <form method="POST" action="{{route('upload')}}">
        @csrf
        <div style="display: flex; align-items: center; justify-content: center;">
            <input type="file" name="file" class="mdl-textfield__input" style="width:70%;">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="margin-left:2%">
                Create
            </button>
        </div>
    </form>
@endsection