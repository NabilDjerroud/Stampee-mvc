
{{ include('layouts/header.php', {title: 'Ajouter un produit'}) }}

<main class="main-login">

    <div class="form-form-login">

        <form class="form-login" method="post" enctype="multipart/form-data">
            <label>date_debut :
                <input type="date" name="date_mise" value="{{ enchere.date_mise }}">
            </label>
            {% if errors.date_mise is defined %}
            <span class="error">{{ errors.date_mise }}</span>
            {% endif %}

            <label>coup_de_coeur :
                <input type="text" name="coup_de_coeur" value="{{ enchere.coup_de_coeur }}">
            </label>
            {% if errors.coup_de_coeur is defined %}
            <span class="error">{{ errors.coup_de_coeur }}</span>
            {% endif %}

            <label>active :
                <input type="text" name="mise_encours" value="{{ enchere.mise_encours }}">
            </label>
            {% if errors.mise_encours is defined %}
            <span class="error">{{ errors.mise_encours }}</span>
            {% endif %}


            <input type="hidden" name="utilisateur_id" value="{{session.utilisateur_id}}">
            <input type="hidden" name="timbre_id" value="{{session.timbre_id}}">

            <input type="submit" class="btn" value="Enregistrer">

        </form>
    </div>
</main>

{{ include('layouts/footer.php') }}
