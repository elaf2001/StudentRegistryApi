@extends('index')
@section('content')
<h3> Upload your file to create students! </h3>
    <form method="POST" action="{{route('upload')}}">
        @csrf
        <div style="display: flex; align-items: center; justify-content: center;">

            <input 
                type="file" 
                class=" mdl-textfield__input form-control form-control-user @error('file') is-invalid @enderror" 
                id="exampleFile"
                name="file" 
                value="{{ old('file') }}"
                tyle="width:70%;">

            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="margin-left:2%" type='submit'>
                Create
            </button>
        </div>
    </form>
@endsection