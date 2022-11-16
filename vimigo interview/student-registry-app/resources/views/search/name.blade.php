@extends('index')
@section('content')
<h2> Searching for a student? </h2>
    <form method="GET" action="{{ route('welcome.login')">
        <div style="display: flex;">
            <div class="mdl-textfield mdl-js-textfield" style="margin-left: 15%; margin-right: 3%">
                <input class="mdl-textfield__input" type="text" id="sample1" >
                <label class="mdl-textfield__label" for="sample1">Please input the name here.</label>
            </div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="margin-top: 2%;" >
                Search
            </button>

        </div>
    </form>
    <div style="display: flex; align-items: center; justify-content: center;"> 
        <table  class="mdl-data-table mdl-js-data-table" style="width=100%">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Name</th>
                    <th class="mdl-data-table__cell--non-numeric">Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                                
                </tr>
            </tbody>
        </table>
    </div>
@endsection
