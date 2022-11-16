<!DOCTYPE html>
<html>
    <head>
        <title>Student Registry app</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />
    </head>
    <body >
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
            <!-- Title -->
                <span class="mdl-layout-title">Student Registry App</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="{{ route('searchByName')}}">Search by name</a>
                    <a class="mdl-navigation__link" href="{{ route('searchByEmail')}}">Search by email</a>
                    <a class="mdl-navigation__link" href="{{ route('create')}}">Upload Students</a>
                </nav>
            </div>
        </header>
        <main class="mdl-layout__content" style="display: flex; align-items: center; justify-content: center;">
            <div class="page-content" >
                @yield('content')
                
            </div>
        </main>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </body>
</html>