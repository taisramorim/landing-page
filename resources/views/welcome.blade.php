<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Rede Social</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-J2qKf2F5FquSBPlSGo75XXfEwS4eF7GqWlg6IH5pL1qlKgUtYVmDqCWhMBlQQIBsMQ6af7qFbTwpIm7GqelgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">Rede Social</div>
        <nav>
            <ul>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#recursos">Recursos</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#links">Links</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Conecte-se com Amigos</h1>
            <p>Descubra, compartilhe e crie memórias.</p>
            <a href="#recursos" class="btn">Saiba Mais</a>
        </section>

        <section id="sobre" class="about">
            <h2>Sobre Nós</h2>
            <p>Somos uma plataforma de rede social que conecta pessoas de todo o mundo. Nossa missão é criar um espaço seguro e divertido para compartilhar experiências e fazer novas amizades.</p>
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDB8fHRlY2h8ZW58MHx8MHx8fDA%3D" alt="Imagem sobre a rede social">
        </section>

        <section id="recursos" class="features">
            <h2>Recursos</h2>
            <div class="feature">
                <h3>Conexões</h3>
                <p>Conecte-se com amigos e familiares em um só lugar.</p>
            </div>
            <div class="feature">
                <h3>Compartilhamento</h3>
                <p>Compartilhe fotos, vídeos e atualizações facilmente.</p>
            </div>
            <div class="feature">
                <h3>Eventos</h3>
                <p>Crie e participe de eventos com seus amigos.</p>
            </div>
        </section>

        <section id="galeria" class="gallery">
            <h2>Galeria</h2>
            <div class="gallery-grid">
                <img src="https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Galeria 1">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHRlY2h8ZW58MHx8MHx8fDA%3D" alt="Galeria 2">
                <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHRlY2h8ZW58MHx8MHx8fDA%3D" alt="Galeria 3">
                <img src="https://plus.unsplash.com/premium_photo-1683121696175-d05600fefb85?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHRlY2h8ZW58MHx8MHx8fDA%3D" alt="Galeria 4">
            </div>
        </section>

        <section id="links" class="links">
            <h2>Links Úteis</h2>
            <ul>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>© 2024 Rede Social. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
