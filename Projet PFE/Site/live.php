<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Live</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="divLogo">
          <img class="logo" src="img/logo.png" alt="">
          <h1>Gestion des commandes</h1>
        </div>
        <div class="divIcone">
          <img class="icone" src="img/live.png" alt="">
          <h2>Live</h2>
        </div>
    </div> 
<center>
<form action="agent_live.php" method="post">
        <div>
            <input type="search" placeholder="Chercher un agent" name="nom" id="nom">
        </div>
        <div class="buttonChercher">
            <button type="submit" name="butt">
                <img class="recherche" src="img/recherch.png" alt="">
            </button>
        </div>
</form>
</center> 
    
</body>
</html>