<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  

<form class="excuse" method="get" action="">
   <img src= 'https://mir-s3-cdn-cf.behance.net/projects/404/c8786049443083.58b520359776b.jpg' width="200" height="150" class="w3-circle"><br><br>
<h1>The best Fake Excuse Notes Generator for parents </h1>

   <label for="name" class='inline'>Child's name: </label>
    <input type="text" id="name" name="name" value="" /><br>
    Choose  gender: <input type="radio" value="ma fille" name="gender" checked>F
    <input type="radio" value="fils" name="gender" checked>M<br>
    <label for="teacher" class='inline'>Name of teacher: </label>
    <input type="text" id="teacher" name="teacher" value="" /><br>

    Reason: <br>

    <input type="radio" value="illness" name="reason" checked>illness<br>
    <input type="radio" value="death" name="reason" checked>death of the pet (or a family member)<br>
    <input type="radio" value="activity" name="reason" checked>significant extra-curricular activity<br>
    <input type="radio" value="other" name="reason" checked>any other excuse of your choice <br>
    <input type="submit" name="submit" value="Find Excuse">
   
      <?php
      $now = date("D j M Y");
      if(isset($_GET['reason'])){
        $reason = $_GET['reason'];
        $name = $_GET['name'];
        $techer= $_GET['teacher'];
        $gender = $_GET['gender'];
        $excuse =($reason=='illness')?'Madame l’institutrice

        Mon fils Quentin s’est éveillé ce matin avec un fort mal de tête, et je ne pense même qu’il a de la fièvre. J’ai donc jugé plus prudent de le pas le conduire à l’école aujourd’hui, et d’appeler le médecin.
        
        J’ignore encore, ce matin, si il sera absent plusieurs jours, mais je ne manquerai pas de vous le faire savoir, sur ce cahier de liaison, dès que le docteur aura établi un diagnostic médical.
        
        Croyez, monsieur l’instituteur (madame l’institutrice) à mes sentiments les meilleurs.
        
        Madame Louise, la maman de Quentin.':(($reason=='death')?' Monsieur (ou Madame),
        
        Je vous prie de bien vouloir excuser l’absence de mon enfant (nom, prénom) à l’école le (date). En effet, (lien de parenté avec l’enfant) est décédé et nous devons nous rendre à son enterrement ce jour-là.
        
        Je vous prie d’agréer, Monsieur (ou Madame), l’expression de mes salutations distinguées.':(($reason=='activity')?'Madame, Monsieur,

        Je vous prie de bien vouloir excuser l’absence de mon fils/ma fille qui a eu/aura lieu le (date).
        
        En effet, il n’a pas pu/ne pourra pas se rendre en classe (ou autre) à cause de (préciser le motif : empêchement, problèmes de santé…)
        
        Je vous saurais gré d’en prendre note et m’en remets à votre compréhension.
        
        Je vous prie de croire, Madame, Monsieur, à l’assurance de mes salutations les plus sincères.': 'write your Reason'));
    }
       ?>

<p><?php 
  echo $now . "</br>","</br>";
  echo $excuse;?></p>
</form>
</body>
</html>