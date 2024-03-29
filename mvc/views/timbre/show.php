{{ include('layouts/header.php', {title: 'Timbre'}) }}

<div class="container" style="padding: 20px;">
    <h2 style="font-size: 30px; margin-top: 20px; margin-bottom: 20px;">Détails du Timbre</h2>
    <div style="display: flex; align-items: center; margin-bottom: 20px;">
        <div style="display: flex; width: 40%; justify-content: space-around;">
            <img src="{{ base }}/uploads/{{image}}" alt="Image Principale" style="width: 80%; height: 100%; object-fit: contain; margin-right: 20px;">
        </div>
        <div style="width: 60%;">
            <p style="color: black; margin-top: 20px; ">Nom:   {{ timbre.nom }}</p>
            <p style="color: black; margin-top: 20px; ">Description:   {{ timbre.description }}</p>
            <p style="color: black; margin-top: 20px; ">Année:   {{ timbre.annee }}</p>
            <p style="color: black; margin-top: 20px; ">Pays:   {{ timbre.pays }}</p>
            <p style="color: black; margin-top: 20px; ">Certifié:   {{ timbre.certifie }}</p>
            <p style="color: black; margin-top: 20px; margin-bottom: 20px; ">État du timbre:   {{ timbre.etat_timbre }}</p>
        </div>
    </div>
    <a style="border-radius: 5px; text-decoration: none; padding: 10px; background-color: #1d3b58; color:white;font-size: 22px; float: right;" href="{{ base }}/enchere/create" class="btn">Miser sur le timbre</a>
    <a style="border-radius: 5px; text-decoration: none; padding: 10px; background-color: #1d3b58; color:white;font-size: 22px; float: left;"  href="{{ base }}/timbre/index" class="btn">Retour à la liste des timbres</a>
</div>


{{ include('layouts/footer.php') }}