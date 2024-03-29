<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ var }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset }}/assets/css/styles.css" />
  </head>
<body>
<header>
      <nav class="navigation_header">
        <img
          class="logo"
          src="{{ asset }}/assets/img/logos/logoSans_titre-removebg-preview.png"
          alt="test"
        />
        <div class="lien_page">
          <a href="{{ base }}/views/stampee/index.html"><i class="fas fa-home interactive"></i> Accueil</a>
          <a href="{{ base }}/views/stampee/catalogue.html"
            ><i class="fas fa-book interactive"></i> Catalogue</a
          >
          <a href="{{ base }}/views/stampee/apropos.html"
          ><i class="fas fa-question-circle interactive"></i> À propos</a
          >
          {% if guest %}
          <a href="{{ base }}/utilisateur/create">S'inscrire</a>
          <a href="{{base}}/login">Login</a>
          {% else %}
          <a href="{{ base }}/views/stampee/enchere.html"
            ><i class="fas fa-gavel interactive"></i> Enchère</a
          >
            <a href="{{base}}/logout">Logout</a>
            {% endif %}
        </div>
        <div class="connexion-langue">
          
            <svg
              width="21"
              height="21"
              viewBox="0 0 21 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.5 10.5C9.05625 10.5 7.82031 9.98594 6.79219 8.95781C5.76406 7.92969 5.25 6.69375 5.25 5.25C5.25 3.80625 5.76406 2.57031 6.79219 1.54219C7.82031 0.514063 9.05625 0 10.5 0C11.9437 0 13.1797 0.514063 14.2078 1.54219C15.2359 2.57031 15.75 3.80625 15.75 5.25C15.75 6.69375 15.2359 7.92969 14.2078 8.95781C13.1797 9.98594 11.9437 10.5 10.5 10.5ZM0 21V17.325C0 16.5813 0.191625 15.8979 0.574875 15.2749C0.958125 14.6519 1.4665 14.1759 2.1 13.8469C3.45625 13.1687 4.83437 12.6604 6.23437 12.3217C7.63437 11.9831 9.05625 11.8134 10.5 11.8125C11.9437 11.8125 13.3656 11.9822 14.7656 12.3217C16.1656 12.6612 17.5437 13.1696 18.9 13.8469C19.5344 14.175 20.0432 14.651 20.4264 15.2749C20.8097 15.8987 21.0009 16.5821 21 17.325V21H0Z"
                fill="#F39C12"
              /></svg>
          
            <svg
              width="21"
              height="21"
              viewBox="0 0 21 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15.3986 13.5431H14.4255L14.0807 13.2107C14.8504 12.3169 15.413 11.2642 15.7282 10.1277C16.0433 8.99129 16.1032 7.79928 15.9036 6.637C15.3247 3.21475 12.4671 0.481872 9.01817 0.0633236C7.80566 -0.0899813 6.57412 0.0359599 5.4178 0.43151C4.26148 0.82706 3.21102 1.48173 2.34681 2.34544C1.4826 3.20914 0.827545 4.25898 0.431763 5.41463C0.0359809 6.57027 -0.0900341 7.80108 0.0633607 9.01288C0.482155 12.4598 3.21664 15.3157 6.6409 15.8943C7.80386 16.0938 8.99656 16.0339 10.1337 15.719C11.2708 15.404 12.3241 14.8417 13.2184 14.0724L13.551 14.4171V15.3896L18.7859 20.6215C19.291 21.1262 20.1162 21.1262 20.6212 20.6215C21.1263 20.1167 21.1263 19.292 20.6212 18.7872L15.3986 13.5431ZM8.00814 13.5431C4.94108 13.5431 2.46527 11.0687 2.46527 8.00344C2.46527 4.93819 4.94108 2.46382 8.00814 2.46382C11.0752 2.46382 13.551 4.93819 13.551 8.00344C13.551 11.0687 11.0752 13.5431 8.00814 13.5431Z"
                fill="#F39C12"
              /></svg>
          <a href="{{ base }}">FR</a>
          <a href="">|</a>
          <a href="{{ base }}">EN</a>
        </div>
      </nav>
      
      
    </header>
    
      
    