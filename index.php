<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Clique-moi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        #message {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Mon Application Clique-moi</h2>
        
        <!-- Le bouton cliquable -->
        <button id="monBouton">Clique-moi !</button>
        
        <!-- Zone d'affichage du message -->
        <div id="message">
            <?php
                
                echo "Page chargée avec succès.";
            ?>
        </div>
    </div>

    <script>
        
        const bouton = document.getElementById('monBouton');
        const messageDiv = document.getElementById('message');
        
        let compteur = 0;

        bouton.addEventListener('click', function() {
            compteur++;
            messageDiv.innerHTML = "Bravo ! Vous avez cliqué <strong>" + compteur + "</strong> fois.";
        });
    </script>

</body>
</html>