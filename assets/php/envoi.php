    <section class="envoi">
        <img class="img-fluid mx-auto d-block" src="./assets/img/logoPouletteBlanc.png" alt="logo">
            <u>Nom : </u>
            <!-- Rappelle des fonction de le tableaux sanitizer -->
            <p><?php echo $result['name']?></p>
            <u>Prenom : </u>
            <p><?php echo $result['firstname']?></p>
            <u>Genre : </u>
            <p><?php echo $result['genre']?></p>
            <u>Pays : </u>
            <p><?php echo $result['pays']?></p>
            <u>Adresse mail : </u>
            <p><?php echo $result['email']?></p>
            <u>Sujet : </u>
            <p><?php echo $result['sujet']?></p>
            <p><?php echo $result['message']?></p>
    </section>