<?php  echo $_SERVER['REQUEST_URI'] ?> 




<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="top">
    <div class="roof">
      <div class="cercle">
        <div><img src="/asset/telescope_icon_138110(1).png
          " alt="telescope">
        </div>


      </div>
     
      <h1>Observatoire du Mont Curieux</h1>
    </div>
  </header>
  <section class="fond">
    <div>
   
      <h2>Inscrivez-vous!!</h2>
      <form method="POST" class="one">
        <div id="form1">

          <ul>
            <li>
              <label for="name">Nom:</label><br>
              <input type="text" id="name" name="name" required />
            </li><br>
            <li>
              <label for="firstName">Prénom:</label><br>
              <input type="text" id="firstName" name="firstName" required />
            </li><br>
            <li>
              <label for="mail">Adresse mail:</label><br>
              <input type="email" id="mail" name="mail" required />
            </li><br>


            <li>
              <label for="motdepasse">Mot de passe:</label><br>
              <input type="password" id="motdepasse" name="motdepasse" required>
            </li><br>
            <li>
              <label for="motdepasse2">Confirmez le mot de passe:</label><br>
              <input type="password" id="motdepasse2" name="motdepasse2" required>
            </li>

          </ul><br>

          <button type="button" onclick="validateform1(event)">Suivant</button>

          <a href=".html">Next</a>


        </div>

  </section>
  <!-- Formulaire 2 -->

  <!--               
                <div id="form2" class="hidden">
                  <ul>
                    <li>
                      <label for="region">Selectionner une région</label>
                      <select name="region" id="region" required>
                        <option value="" disabled selected>Sélectionnez une région</option>
                        <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                        <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                        <option value="Bretagne">Bretagne</option>
                        <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                        <option value="Corse">Corse</option>
                        <option value="Grand Est">Grand Est</option>
                        <option value="Hauts-de-France">Hauts-de-France</option>
                        <option value="Île-de-France">Île-de-France</option>
                        <option value="Normandie">Normandie</option>
                        <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                        <option value="Occitanie">Occitanie</option>
                        <option value="Pays de la Loire">Pays de la Loire</option>
                        <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                      </select>
              
              
                    </li>
              
              
                    <li>
                      <label for="dispo">Sélectionnez vos disponibilités :</label><br>
              
                      <input type="checkbox" name="dispo[]" value="semaine">En semaine<br>
                      <input type="checkbox" name="dispo[]" value="weekend">Le week-end<br>
              
                    </li>
                    <li>
                      <label for="preference">Sélectionner vos préférences d'horaires</label><br>
                      <input type="checkbox" name="dispo-horaire[]" value="matin">Matin<br>
                      <input type="checkbox" name="dispo-horaire[]" value="apres-midi">Après-midi<br>
                      <input type="checkbox" name="dispo-horaire[]" value="soir">Soir<br>
                      <input type="checkbox" name="dispo-horaire[]" value="nuit">Nuit<br>
                    </li>
                    <li>
                      <label for="preferences">Sélectionner vos préférences de postes</label><br>
                      <input type="checkbox">Sécurité<br>
                      <input type="checkbox">Bar<br>
                      <input type="checkbox">Technique<br>
                      <input type="checkbox">Animation<br>
                    </li>
                  </ul>
              
              
              
              
              
              
              
              
              
                  <button type="button" onclick="previousform()">Précédent</button>
                  <button type="button" onclick="validateform2(event)">Suivant</button>
              
              
              
                </div> -->

  <!-- Fin formulaire 3 -->
  <!-- <div id="form3" class="-hidden">
                  <ul>
                    <li>
                      <label for="expression">Exprimez vous!</label><br>
              
                      <textarea id="message" name="message"></textarea>
                    </li>
                  </ul>
                  <button type="button" onclick="previousform()" id="third">Précédent</button>
                  <button type="submit" onclick="validateform3(event)">Soumettre</button>
                </div> -->
  </form>
  </div>

  <footer class="pied">
    <div class="bas">
      <p> © Mentions légales - 2024 Tout droits réservés</p>
    </div>
  </footer>



</body>

</html>
