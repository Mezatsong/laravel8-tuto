<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('lien1') }}">Lien 1</a>
            <a href="{{ route('lien2') }}">Lien 2</a>
            <a href="{{ route('lien3') }}">Lien 3</a>
            <a href="{{ route('lien4') }}">Lien 4</a>
            <a href="{{ route('lien5') }}">Lien 5</a>
        </nav>

    </header>
    <br>
    <br>
    <br>
    <section>
        @section('section')
        hello !
        @show
    </section>

    <br>
    <br>

    <p>Ceci est un paragraphe</p>

    <footer>
        Ce site est une pratique du tutoriel.
        <br>
        Good luck !
    </footer>
</body>
</html>
