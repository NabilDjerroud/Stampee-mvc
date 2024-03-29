{{ include('layouts/header.php', {title: 'Timbre'})}}
<body>
    <div class="container" style="padding: 50px;">
        <h1>les Timbres</h1>
        <table style="margin-top: 20px; width: 100%; border-collapse: collapse;">
            <tr>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">Nom</th>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">Description</th>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">Année</th>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">Pays</th>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">Certifié</th>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">État du timbre</th>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">Consulter</th>
                <th style="font-size: 24px; padding: 8px; text-align: center; border-bottom: 1px solid #ddd; background-color: #4CAF50; color: white;">options</th>
            </tr>
            {% for timbre in timbres %}
                <tr>

                    <td style="font-size: 22px; text-align: center;">{{ timbre.nom }}</td>
                    <td style="font-size: 22px; text-align: center;">{{ timbre.description }}</td>
                    <td style="font-size: 22px; text-align: center;">{{ timbre.annee }}</td>
                    <td style="font-size: 22px; text-align: center;">{{ timbre.pays }}</td>
                    <td style="font-size: 22px; text-align: center;">{{ timbre.certifie }}</td>
                    <td style="font-size: 22px; text-align: center;">{{ timbre.etat_timbre }}</td>
                    <td style="font-size: 22px; text-align: center;"><a style="text-decoration: none;"  href="{{ base }}/timbre/show?id={{ timbre.id }}">Voir le timbre</a></td>
                    <td style="font-size: 22px; text-align: center;"><a style="text-decoration: none;" href="{{ base }}/timbre/edit?id={{ timbre.id }}">Éditer</a>  /  <a style="text-decoration: none;" href="{{ base }}/timbre/delete?id={{ timbre.id }}">Supprimer</a>   </td>

                </tr>
            {% endfor %}
        </table>
        <br><br>
        <a style="border-radius: 5px; text-decoration: none; padding: 10px; background-color: #1d3b58; color:white;font-size: 22px; float: right;" href="{{ base }}/timbre/create" class="btn">Ajouter un timbre</a>
    </div>
    
</body>
</html>
{{ include('layouts/footer.php') }}