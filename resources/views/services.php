@extends('layouts.app') 
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ route('clients.store') }}" method="POST">
<label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

    >

        <label for="date_naissance">Date de naissance:</label><br>
        <input type="date" id="dateNaissance" name="email" required><br><br>

        <label for="adresse">Adresse:</label><br>
        <input type="text" id="adresse" name="adresse" required><br><br>

        <label for="tel">Téléphone:</label><br>
        <input type="tel" id="tel" name="telephone" required><br><br>

        <input type="submit" value="Envoyer">
    </form>




  

    
</body>
</html>
