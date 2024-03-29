{{ include('layouts/header.php', {title: 'Inscription'})}}
<div class="container">
    {% if errors is defined %}
    <div class="error">
        <ul>
        {% for error in errors %}
            <li>{{ error }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
    <form method="post">
        <h2>Inscription</h2>
        <label>Nom
            <input type="text" name="nom" value="{{ utilisateur.nom }}">
        </label>
        <label>Nom utilisateur
            <input type="text" name="nom_utilisateur" value="{{ utilisateur.nom_utilisateur }}">
        </label>
        <label>Mot de passe
            <input type="password" name="mot_de_passe">
        </label>
        <label>Email
            <input type="email" name="email" value="{{ utilisateur.email }}">
        </label>
        <label>Adresse
            <input type="text" name="adresse" value="{{ utilisateur.adresse }}">
        </label>
        <input type="hidden" name="privilege_id" value="2">
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php') }}
