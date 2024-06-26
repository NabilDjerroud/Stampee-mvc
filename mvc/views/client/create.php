{{ include('layouts/header.php', {title: 'Client Create'})}}
    <div class="container">
        <h2>Client Create</h2>
        <form method="post">
            <label>Name
                <input type="text" name="name" value="{{ client.name }}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>adresse
                <input type="text" name="adresse" value="{{ client.adresse }}">
            </label>
            {% if errors.adresse is defined %}
                <span class="error">{{ errors.adresse}}</span>
            {% endif %}
            <label>Zip Code
                <input type="text" name="zip_code" value="{{ client.zip_code }}">
            </label>
            {% if errors.zip_code is defined %}
                <span class="error">{{ errors.zip_code}}</span>
            {% endif %}
            <label>Phone
                <input type="text" name="phone" value="{{ client.phone }}">
            </label>
            {% if errors.phone is defined %}
                <span class="error">{{ errors.phone}}</span>
            {% endif %}
            <label>email
                <input type="email" name="email" value="{{ client.email }}">
            </label>
            {% if errors.email is defined %}
                <span class="error">{{ errors.email}}</span>
            {% endif %}
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php') }}