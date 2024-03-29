{{ include('layouts/header.php', {title: 'Login'})}}
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
        <h2 style="font-size: 30px; margin-top: 20px; margin-bottom: 20px;">Login</h2>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Nom utilisateur
            <input type="text" name="nom_utilisateur" value="{{ utilisateur.nom_utilisateur }}" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
        </label>
        <label style="font-size: 20px; display: block; margin-bottom: 10px;">Mot de passe
            <input type="password" name="mot_de_passe" style="padding: var(--space-xs); border-radius: var(--space-xxs); border: 1px solid #ccc; font-family: var(--police-paragraphe); font-size: 20px; margin-right: var(--space-xs);">
        </label>
        <input style=" background-color: #1d3b58; color: white; padding: 10px; font-family: var(--police-principale);" type="submit" class="btn" value="Login">
    </form>
</div>
{{ include('layouts/footer.php')}}
