{{ include('layouts/header.php', {title: 'Login'})}}
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
    <h2>Login</h2>
    <label>Nom utilisateur
        <input type="text" name="nom_utilisateur" value="{{ utilisateur.nom_utilisateur }}">
    </label>
    <label>Mot de passe
        <input type="password" name="mot_de_passe">
    </label>
    <input type="submit" class="btn" value="Login">
</form>
</div>
{{ include('layouts/footer.php')}}