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
            margin-top: 80px; /* ajusté */
        }

        .logo-center {
            width: 100px; 
            height: auto;
            display: block;
            margin: 0 auto 20px auto; 
        }

        .contactez-nous {
            max-width: 350px; 
            margin: 0 auto;
            padding: 15px; 
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
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

        input, select, textarea {
            width: 90%; 
            padding: 8px; 
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 40px; 
            resize: vertical;
        }

        .buttons {
            margin-top: 30px;
        }

        .btn {
            background-color: rgb(138, 140, 142);
            color: white;
            padding: 10px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
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
        <a href="{{ url('/inscription') }}">Réinscription</a> 
    </div>

    <div class="container">
        <div class="contactez-nous">
            <h1>Bravo !</h1>
            <p>Voici votre place de parking :</p>

            <div class="buttons">
            <a href="{{ url('/connexion') }}" class="btn">Retourner a l'Accueil</a>
            </div>s
            </form>
        </div><samp></samp>
    </div>
</body> 
</html>
