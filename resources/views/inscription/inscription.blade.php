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

        .container {
            text-align: center;
            margin-top: 80px;
        }

        .contactez-nous {
            max-width: 350px;
            margin: 0 auto;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 22px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 8px;
            color: #555;
        }

        input, textarea {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            display: block;
            width: 100%;
            padding: 8px;
            background-color: rgb(119, 119, 119);
            color: white;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="navbar">
        <a href="{{ url('/root') }}">Root</a>
        <a href="{{ url('/connexion') }}">Connexion</a> 
    </div>

    <div class="container">
        <div class="contactez-nous">
            <h1>Inscription</h1>
            <p>Un problème, une question, envoyez-nous un message :)</p>
            <form action="{{ url('/inscription') }}" method="post" >
                {{ csrf_field() }}
                <div>
                    <label for="Prénom">Prénom</label>
                    <input type="text" id="prénom" name="Prénom" placeholder="Nadé" required>
                </div>

                <div>
                    <label for="Nom">Nom</label>
                    <input type="text" id="Nom" name="Nom" placeholder="Nadé" required>
                </div>

                <div>
                    <label for="Email">Votre e-mail</label>
                    <input type="Email" id="Email" name="Email" placeholder="Hedvi@exemple.com" required>
                </div>

                <div>
                    <label for="password">Votre mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="****" required>
                </div>

                <div>
                    <button type="submit">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
