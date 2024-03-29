{{ include('layouts/header.php', {title: 'Timbre Create'}) }}

<div class="container" style="padding: 20px; display: flex; justify-content: center; align-items: center; height: 80vh;">
    <div style="width: 50%;">
        <h2 style="font-size: 30px;">Créer le Timbre</h2>
        <form action="{{ base }}/timbre" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column;">
            <label style="font-size: 20px; margin-bottom: 15px;">Nom du timbre
                <input type="text" name="nom" value="{{ timbre.nom }}" required>
            </label>
            {% if errors.nom is defined %}
                <span class="error">{{ errors.nom }}</span>
            {% endif %}
            <label style="font-size: 20px; margin-bottom: 15px;">Description
                <input type="text" name="description" value="{{ timbre.description }}" required>
            </label>
            {% if errors.description is defined %}
                <span class="error">{{ errors.description }}</span>
            {% endif %}
            <label style="font-size: 20px; margin-bottom: 15px;">Année
                <input type="text" name="annee" value="{{ timbre.annee }}" required>
            </label>
            {% if errors.annee is defined %}
                <span class="error">{{ errors.annee }}</span>
            {% endif %}
            <label style="font-size: 20px; margin-bottom: 15px;">Pays
                <input type="text" name="pays" value="{{ timbre.pays }}" required>
            </label>
            {% if errors.pays is defined %}
                <span class="error">{{ errors.pays }}</span>
            {% endif %}
            <label style="font-size: 20px; margin-bottom: 15px;">Le timbre est-il Certifié ?
                <input type="checkbox" id="certifie" name="certifie" value="Oui">Oui
                <input type="checkbox" id="certifie" name="certifie" value="Non">Non
            </label>
            <label style="font-size: 20px; margin-bottom: 15px;">État du timbre
                <input type="text" name="etat_timbre" value="{{ timbre.etat_timbre }} " required>
            </label>
            {% if errors.etat_timbre is defined %}
                <span class="error">{{ errors.etat_timbre }}</span>
            {% endif %}
            <label style="font-size: 20px; margin-bottom: 15px;">
            Choisir l'image principale du timbre:
                <input type="file" name="image_principale" required>
            </label>
            <label style="font-size: 20px; margin-bottom: 15px;">
                Choisir l'image secondaire du timbre:
                <input type="file" name="image_secondaire">
            </label>
            <input type="submit" class="btn" value="Save" style="margin-top: 15px;background-color: #1d3b58; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px; font-size: 20px;">
        </form>
    </div>
</div>

{{ include('layouts/footer.php') }}
