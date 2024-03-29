{{ include('layouts/header.php', {title: 'Timbre'}) }}

<div class="container" style="padding: 20px;">
    <h2>Détails du Timbre</h2>
    <?php foreach ($images as $image): ?>
    <img src="../../uploads/<?php echo $image['image_principale']; ?>" alt="Image Principale">
    <img src="../../uploads/<?php echo $image['image_secondaire']; ?>" alt="Image Secondaire">
    <?php endforeach; ?>
    <p><strong>Nom:</strong> <?php echo $timbre['nom']; ?></p>
    <p><strong>Description:</strong> <?php echo $timbre['description']; ?></p>
    <p><strong>Année:</strong> <?php echo $timbre['annee']; ?></p>
    <p><strong>Pays:</strong> <?php echo $timbre['pays']; ?></p>
    <p><strong>Certifié:</strong> <?php echo $timbre['certifie']; ?></p>
    <p><strong>État du timbre:</strong> <?php echo $timbre['etat_timbre']; ?></p>
    <a href="<?php echo $base; ?>/timbre/index" class="btn">Retour à la liste des timbres</a>
</div>

{{ include('layouts/footer.php') }}