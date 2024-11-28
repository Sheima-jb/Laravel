@extends('layouts.app')

@section('content')
<h1>{{ $title }}</h1>
<!-- Ajoutez ici le contenu de chaque page -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
    <h1>{{ $title ?? 'Titre par défaut' }}</h1>
    <p>this is the about page of our website.</p>
    
</body>
</html>
@endsection