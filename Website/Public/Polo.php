<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/shirts.css">
	<title>Simple Database App</title>
</head>
<nav>
	<ul>
		<a href="#"><img src="afbeeldingen/logo/Greed.svg" alt="Het logo van de website" class="logo"></a>
		<li>
		<a href="#">Home</a>
	  </li>
		<li>
		<a href="index.php">Shirts</a>
		</li>
	</ul>
</nav>

<div class="container">
  <section>
  	<img src="afbeeldingen/Polo.png" alt="foto van een Polo shirt">
  </section>
  <section>
    <h3><strong>Polo</strong></h3>
  	<p>Greed - Polo shirt</p>
    <p>Een poloshirt of kortweg polo is een kledingstuk met korte mouwen en een kraag zoals dat van een overhemd
      en een korte sluiting met knoopjes aan de voorkant. De polo kent zijn oorsprong in de vrijetijdskleding
      van de hogere sociale klassen en wordt nog altijd beschouwd als ietwat geklede vrijetijdskleding.</p>
    </br>
    <fieldset class="maten">
    <label><input type="radio" name="Maat" value="S"> S </label>
    <label><input type="radio" name="Maat" value="M"> M </label>
    <label><input type="radio" name="Maat" value="L"> L </label>
    <label><input type="radio" name="Maat" value="XL"> XL </label>
    </fieldset>

    <fieldset class="kleuren">
    <label><input type="radio" name="kleur" value="w"> Wit </label>
    <label><input type="radio" name="kleur" value="z"> Zwart </label>
    <label><input type="radio" name="kleur" value="r"> Rood </label>
    <label><input type="radio" name="kleur" value="g"> Groen </label>
    </fieldset>

    <fieldset>
      <label>
        <select name="Hoeveelheid" required>
          <option value="">Selecteer de hoeveelheid</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="25">25</option>
          <option value="50">50</option>
        </select></label>
      </br>
        <input type="button" name="Buy it" value="Buy It">
    </fieldset>
  </section>


</div>












<?php include "Templates/footer.php"; ?>
