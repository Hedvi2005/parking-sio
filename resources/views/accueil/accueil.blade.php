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


        h1 {
            color: #333;
        }

        .buttons {
            margin-top: 70px;
        }

        .btn {
            background-color: rgb(138, 140, 142);
            color: white;
            padding: 15px 30px;
            font-size: 19px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: rgb(117, 120, 123);
        }

        
        
    </style>
</head>
<body>
    <div class="navbar">
    <a href="{{ url('/root') }}">Root</a>
    <a href="{{ url('/inscription') }}">inscription</a> 
        
    </div>

    <div class="container">

        <img src="/images/parking-logo.png" width="150" alt="logo du parking">
        <h1>Bienvenue !</h1>
        <p>Veuillez vous connecter ou vous inscrire pour réserver une place de Parking.</p>

        <div class="buttons">
            <a href="connexion" class="btn">Se connecter</a>
        </div>
    </div>

    
</body>
</html>