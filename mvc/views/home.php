{{ include('layouts/header.php', {title: 'Inscription'})}}
    <main class="main-accueil">
    {% if guest is empty %}
       <p class="hello-message">hello {{ session.nom_utilisateur }} !</p>
       {% endif %}
        <div class="message-accueil">
            <h1>Bienvenue sur notre site de vente de timbres aux enchères</h1>
            <section class="hero-accueil">
              <h2>Découvrez notre collection de timbres rares</h2>
              <p>Nous proposons une vaste sélection de timbres provenant du monde entier.</p>
              <br>
              <p>Parcourez notre catalogue pour découvrir des pièces uniques et historiques.</p>
              <div class="button-accueil">
                <a href="catalogue.html"><button>Accéder au Catalogue</button>
                </a>
              </div>
            </section>
            <section class="accueil-histoire">
                <h2>Qui sommes nous ?</h2>
                <div class="contenu-accueil-histoire">
                    <img src="{{ asset }}/assets/img/photos/postage-stamps-4699092_1280.jpg" alt="">
                    <div class="presentation-accueil">
                        <h2>La passion des collectionneurs</h2>
                        <p>Nous partageons votre passion pour les timbres-poste et nous nous engageons à offrir une expérience d'achat exceptionnelle. Notre équipe dévouée vous guide à travers le monde captivant de la philatélie, offrant un service personnalisé et une expertise approfondie à chaque étape de votre parcours. Que vous soyez un collectionneur chevronné ou un amateur passionné, notre plateforme est votre destination pour découvrir, collectionner et partager les trésors philatéliques uniques qui racontent l'histoire, l'art et la culture à travers les âges.</p>
                    </div>
                </div>
                <div class="button-accueil">
                  <a href="catalogue.html"><button>Accéder au Catalogue</button>
                  </a>
                </div>
            </section>
          </div>
          <section class="principes">
            <div class="confiance">
              <img src="{{ asset }}/assets/img/icons/confiance.png" alt="">
                <div class="contenu-confiance">
                    <h3>Transparence</h3>
                    <p>"Nous valorisons la transparence à chaque étape de votre expérience. Chaque détail est clairement communiqué, assurant une compréhension totale de nos services et de nos processus."</p>
                </div>
            </div>
            <div class="securite">
              <img src="{{ asset }}/assets/img/icons/Securite-paiement.png" alt="">
                <div class="contenu-securite">
                    <h3>Paiement Sécurisé</h3>
                    <p>"La sécurité de vos transactions est notre priorité absolue. Nous utilisons des protocoles de paiement éprouvés pour garantir la confidentialité de vos informations personnelles à chaque transaction."</p>
                </div>
            </div>
            <div class="livraison">
              <img src="{{ asset }}/assets/img/icons/Livraison-paiement.png" alt="">
                <div class="contenu-livraison">
                    <h3>Livraison offerte</h3>
                    <p>"Profitez de la livraison gratuite sur toutes vos commandes. Notre engagement envers la commodité signifie que vous pouvez recevoir vos articles sans frais supplémentaires, vous offrant ainsi une expérience de magasinage sans tracas."</p>
                </div>
            </div>
        </section>
    </main>
    <section class="infolettre">
        <h2>Restez informé</h2>
        <p>Inscrivez-vous à notre newsletter pour recevoir les dernières mises à jour sur nos nouvelles acquisitions, nos événements spéciaux et nos offres exclusives.</p>
        <div class="formulaire">
          <form action="inscription_newsletter.php" method="post">
              <label for="nom">Votre nom :</label>
              <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
              <label for="email">Votre adresse e-mail :</label>
              <input type="email" id="email" name="email" placeholder="Votre email" required>
              <button type="submit">S'inscrire</button>
          </form>
        </div>
    </section>
{{ include('layouts/footer.php') }}
