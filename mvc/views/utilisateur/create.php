{{ include('layouts/header.php', {title: 'Inscription'})}}
<div class="container" style="text-align: center;">
    {% if errors is defined %}
    <div class="error">
        <ul>
        {% for error in errors %}
            <li>{{ error }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
    <form method="post" style="display: inline-block; text-align: left;">
        <h2 style="font-size: 30px; margin-top: 20px; margin-bottom: 20px;">Inscription</h2>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Nom
            <input type="text" name="nom" value="{{ utilisateur.nom }}" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
        </label>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Nom utilisateur
            <input type="text" name="nom_utilisateur" value="{{ utilisateur.nom_utilisateur }}" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
        </label>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Mot de passe
            <input type="password" name="mot_de_passe" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
        </label>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Email
            <input type="email" name="email" value="{{ utilisateur.email }}" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
        </label>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Adresse
            <input type="text" name="adresse" value="{{ utilisateur.adresse }}" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
        </label>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Privilège
            <select name="privilege_id" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
                <option value="1">Admin</option>
                <option value="2" selected>Membre</option>
            </select>
        </label>
        <input style=" background-color: #1d3b58; color: white; padding: 10px; font-family: var(--police-principale);" type="submit"  value="Save">
    </form>
</div>
{{ include('layouts/footer.php') }}