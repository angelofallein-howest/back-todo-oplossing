<?php

    //????????????

?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	
    <link rel="stylesheet" href="css/screen.css">
    <title>Taken - overview</title>
</head>
<body>

<header>
    <nav class="navbar navbar-default">
        <nav class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">ToDo</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="index.php" class="navbar-brand">ToDo</a>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="create-taak.php">Nieuwe toDo</a></li>
                </ul>
            </div>
        </nav>
    </nav>
</header>

<main>
    <section id="overview" class="container">
        <h1>Update een bestaande taak</h1>
        <form class="form">
            <div class="form-group">
                <label for="titel">id</label>
            </div>

            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" name="titel" id="titel " value="<?php echo $taak->titel ?>" placeholder="">
            </div>
            <div class="form-group">
               
            </div>
			
            <div class="form-group">
             

            </div>

						
          
        </form>
    </section>
</main>

<footer class="text-center container">MIT</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>