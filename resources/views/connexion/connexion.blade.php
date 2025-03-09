<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
     body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #333;
            display: flex;
            justify-content: flex-end;
            padding: 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 20px;
            display: flex;
            align-items: center;
        }

        .navbar a i {
            margin-right: 8px;
        }

        .container {
            text-align: center;
            margin-top: 100px;
        }

        .logo-center {
    width: 100px; 
    height: auto;
    display: block;
    margin: 0 auto 20px auto; 
        }

        .contactez-nous {
    max-width: 450px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    }

    h1 {
    text-align: center;
    color: #333;
    }

label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
    color: #555;
    }

input, select, textarea {
    width: 90%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    }

textarea {
    height: 120px;
    resize: vertical;
    }

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color:rgb(119, 119, 119);
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
    }

button:hover {
    background-color: #0056b3;
    }



    </style>
</head>
<body>
<body>
    <div class="navbar">
        <a href="{{ url('/root') }}">Root</a>
        <a href="{{ url('/inscription') }}">S'incrire</a>
        
    </div>

    <div class="container">

       
<div class="contactez-nous">

<h1>Connexion</h1>

<p>Un problème, une question, envoyez nous un message :) </p>

<form action="{{ url('/connexion') }}" method="post">

    <div>
        <label for="email">Votre e-mail</label>
        <input type="email" id="email" name="email" placeholder="Hedvi@exemple.com" required>
    </div>


    <div>
        <label for="nom">Votre mot de passe</label>
        <input type="password" id="password" name="passwordphp" placeholder="****" required>
    </div>

    <div>
        <button type="submit">Connexion</button>
    </div>
    <p>
</form>
</div>
</html>