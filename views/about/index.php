<nav >
<div class="jumbotron">
  <section>
             <aside>
                 <h1>À propos de l'ENSAT</h1>
                 <p class="navbar-text">L'École nationale des sciences appliquées de Tanger (ENSAT) (en arabe : المدرسة الوطنية للعلوم التطبيقية طنجة) sise à Tanger le chef-lieu de la région nord du Maroc, est une grande école d’ingénieurs marocaine créée par l'université Abdelmalek Essaâdi (UAE). C’est un établissement public, formant des ingénieurs d’état généralistes avec des spécialisations en : Génie des systèmes de télécommunication & réseaux (GSTR), Génie informatique (GInf), Génie des systèmes électroniques et automatique (GSEA), Génie industriel & logistique (GIL), et Génie Eco-Énergétique et Environnement Industriel (G3EI)
L’innovation du projet, ainsi que le succès de l’ENSA de Tanger donnèrent lieu à l’implémentation du modèle ENSA dans d’autres villes et la création d’un réseau ENSA au sein du Maroc.</p>
             </aside>
             <article>
                 <h4>Contactez-nous:</h4>
                 <ul>
                   <li>Email: ensat@ensat.ac.ma</li>
                   <li>Adresse: BP 1818 Tanger Principal  Tanger</li>
                   <li>Tél: 0539393744</li>

                 </ul>
             </article>
  </section>
</div>
</nav>


<?php if(isset($_SESSION['is_logged_in'])) : ?>
  <div class="jumbotron">
    <section>
     <aside>
         <h1>Presentation Des Clubs</h1>
     </aside>

     <article>
     </article>

     <article>
     </article>

     <article>
     </article>

     <article>
     </article>

     <article>
       <p><strong>BDE :</strong> Bureau des étudiants de l’ENSAT, chargé des affaires pédagogiques, économiques, d’internat et du restaurant de l’institut.</p>
     </article>

     <article>
       <p><strong>ENSACTUS :</strong> vise à promouvoir le progrès sociétal par l&#39;action entrepreneuriale. Enactus soutient les étudiants des écoles et universités à travers le monde (36 pays participent au programme), et fait collaborer les acteurs économiques et académiques. La qualité et l&#39;impact des projets étudiant sont évalués par des professionnels au cours de différents événements régionaux, nationaux en enfin durant la World Cup annuelle.</p>
     </article>

     <p><strong>CSC :</strong>Computer Science Club, le club des formations informatiques.</p>

     <p><strong>CESE :</strong> Le club de l’électronique et des système embarqués</p>

     <article>
       <p><strong>Great debaters :</strong>Le club des débats sociaux et politiques</p>
     </article>
    </section>
  </div>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
  <div class="jumbotron">
      <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <div><input class="form-control" name="id_cne" type="text" value="<?php echo $_SESSION['user_data']['CNE'];  ?>" readonly/></div>
        <div><input class="form-control" name="name" type="text" value="<?php echo $_SESSION['user_data']['name'];  ?>" readonly/></div>
        <div><input class="form-control" name="email" type="text" value="<?php echo $_SESSION['user_data']['email'];  ?>" readonly/></div>
        <div><input class="form-control" name="club" type="text" value="<?php echo $_SESSION['user_data']['club'];  ?>" readonly/></div>
   </div>
   <?php if(isset($_SESSION['user_data']['club'])) : ?>
       <p class="navbar-text">Vous déja inscrit dans le club <strong><?php echo $_SESSION['user_data']['club'];?></strong>! Vous voulez Changer ?</p>
   <?php endif; ?>

   <div class="jumbotron">
	     Votre Choix:
	     <span class="custom-dropdown custom-dropdown--white">
	         <select class="custom-dropdown__select custom-dropdown__select--white" name="club">
	             <option>BDE</option>
	             <option>ENACTUS</option>
	             <option>CSC</option>
	             <option>CESE </option>
               <option>Great debaters </option>
	         </select>
	     </span>
       <input type="submit" name="submit" value="Valider" class="<?php if(isset($_SESSION['user_data']['club'])){echo 'btn btn-danger';}else{echo'btn btn-success dropdown-toggle'; } ?>" >
  </div>
<?php endif; ?>
 </form>
<?php endif; ?>
