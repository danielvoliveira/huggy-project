@extends('layouts.app')

@section('title', 'Conheça a Huggy: a plataforma completa de Atendimento Digital')

@section('meta_tags')
<link rel="canonical" href="{{ url()->current() }}">
<meta name="author" content="Huggy">
<meta name="description" content="A Huggy é uma plataforma completa de Atendimento Digital Omnichannel para sua empresa capturar leads, engajar clientes, encantar e vender. Acesse e teste, é grátis!">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Conheça a Huggy: a plataforma completa de Atendimento Digital">
<meta property="og:description" content="A Huggy é uma plataforma completa de Atendimento Digital Omnichannel para sua empresa capturar leads, engajar clientes, encantar e vender. Acesse e teste, é grátis!">
<meta property="og:image" content="{{ Vite::asset('resources/images/logo-header.webp') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image:alt" content="Huggy">
<meta property="og:site_name" content="Huggy">
<meta property="og:locale" content="pt-BR">
<meta property="article:author" content="Huggy">
<meta name="twitter:card" content="site">
<meta name="twitter:site" content="@HuggyBrasil">
<meta name="twitter:creator" content="@HuggyBrasil">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Conheça a Huggy: a plataforma completa de Atendimento Digital">
<meta name="twitter:description" content="A Huggy é uma plataforma completa de Atendimento Digital Omnichannel para sua empresa capturar leads, engajar clientes, encantar e vender. Acesse e teste, é grátis!">
<meta name="twitter:image" content="{{ Vite::asset('resources/images/logo-header.webp') }}">
<meta name="twitter:image:alt" content="Huggy">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Corporation",
        "name": "Huggy",
        "alternateName": "Huggy: a plataforma completa de Atendimento Digital",
        "description": "A Huggy é uma plataforma completa de Atendimento Digital Omnichannel para sua empresa capturar leads, engajar clientes, encantar e vender. Acesse e teste, é grátis!",
        "url": "{{ url()->current() }}",
        "logo": "{{ Vite::asset('resources/images/logo-header.webp') }}",
        "telephone": "551149337882",
        "address":{
            "@type": "postalAddress",
            "streetAddress": "R. Joaquim Costa, 321",
            "addressLocality": "Florianópolis",
            "addressRegion":"SC"
        },
        "sameAs": [
            "https://www.youtube.com/channel/UC77Cs8yj3bjbXYZnacmUP3Q?view_as=subscriber",
            "https://www.linkedin.com/company/huggy.io/",
            "https://www.facebook.com/huggy.io",
            "https://www.instagram.com/huggy.io/"
        ]
    }
</script>
@endsection

@section('header')
<header class="desktop">
    <div class="row g-0">
        <div class="col-lg-12">
            <div class="top-menu">
                <div class="content">
                    <ul>
                        <li>
                            <a href="#">
                                <p>Status</p>
                                <div class="circle"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Empresa</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Fale Conosco</p>
                            </a>
                        </li>
                        <li>
                            <select id="languages">
                                <option value="pt-br">Português</option>
                                <option value="en">Inglês</option>
                                <option value="es">Espanhol</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="main-menu">
                <div class="content">
                    <div class="logo">
                        <img src="{{ Vite::asset('resources/images/logo-header.webp') }}" alt="Logo da Huggy" loading="lazy" width="auto" height="auto">
                    </div>
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="#" title="#">
                                    <p>Soluções</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="#">
                                    <p>Recursos</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="#">
                                    <p>Parceiros</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="#">
                                    <p>Preços</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="#">
                                    <p>Blog</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="call-for-you">
                        <a href="">
                            <img src="{{ Vite::asset('resources/images/phone-icon.webp') }}" alt="Ícone de telefone">
                            <p>Ligamos para você</p>
                        </a>
                    </div>
                    <div class="login-menu">
                        <button>
                            <p>Login</p>
                        </button>
                        <button class="sign_in">
                            <p>Get started free</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="mobile">
    <div class="row g-0">
        <div class="col-lg-12">
            <div class="main-menu">
                <div class="content">
                    <div class="left-side">
                        <div class="logo">
                            <img src="{{ Vite::asset('resources/images/logo-header.webp') }}" alt="Logo da Huggy" loading="lazy" width="auto" height="auto">
                        </div>
                        <div class="icon-menu">
                            <img id="icon-menu" src="{{ Vite::asset('resources/images/icon-menu.webp') }}" alt="Logo da Huggy" loading="lazy" width="auto" height="auto">
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="call-for-you">
                            <a href="">
                                <img src="{{ Vite::asset('resources/images/phone-icon.webp') }}" alt="Ícone de telefone" loading="lazy" width="auto" height="auto">
                                <p>Ligamos para você</p>
                            </a>
                        </div>
                        <div class="login-menu">
                            <button>
                                <p>Login</p>
                            </button>
                            <button class="sign_in">
                                <p>Get started free</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div id="back-menu" class="back-menu none">
                <div class="content">
                    <div class="inside-block-menu">
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="#" title="#">
                                        <p>Soluções</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="#">
                                        <p>Recursos</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="#">
                                        <p>Parceiros</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="#">
                                        <p>Preços</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="#">
                                        <p>Blog</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="second-menu">
                            <ul>
                                <li>
                                    <a href="#">
                                        <p>Status</p>
                                        <div class="circle"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>Empresa</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p>Fale Conosco</p>
                                    </a>
                                </li>
                                <li>
                                    <select id="languages">
                                        <option value="pt-br">Português</option>
                                        <option value="en">Inglês</option>
                                        <option value="es">Espanhol</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="third-menu">
                        <ul>
                            <li>
                                <div id="secondary-login-menu">
                                    <button>
                                        <p>Login</p>
                                    </button>
                                    <button class="sign_in">
                                        <p>Get started free</p>
                                    </button>
                                </div>
                            </li>
                            <li>
                                <div id="secondary-call-for-you">
                                    <a href="">
                                        <img src="{{ Vite::asset('resources/images/phone-icon.webp') }}" alt="Ícone de telefone" loading="lazy" width="auto" height="auto">
                                        <p>Ligamos para você</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('video_content')
<div class="row g-0">
    <div class="col-lg-12">
        <section class="video">
            <div class="content">
                <h1>Conectamos pessoas através de conversas para tornar o mundo mais humano</h1>
                <div class="video-content">
                    <img class="robot" src="{{ Vite::asset('resources/images/higgo-quemsomos.webp') }}" alt="Robô apoiado no vídeo" loading="lazy" width="auto" height="auto">
                    <div class="video">
                        <video autoplay="" muted="" loop="">
                            <source src="{{ Vite::asset('resources/videos/huggy_institucional_video.webm') }}" type="video/mp4" loading="lazy" width="auto" height="auto">
                        </video>
                    </div>
                    <img class="women" src="{{ Vite::asset('resources/images/selfie-quemsomos.webp') }}" alt="Mulher tirando selfie" loading="lazy" width="auto" height="auto">
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('about_us_content')
<div class="row g-0">
    <div class="col-lg-12">
        <section class="about-us">
            <div class="content">
                <div class="text">
                    <h2>Sobre nós</h2>
                    <p>Somos uma empresa que utiliza a tecnologia para fazer do atendimento digital uma experiência incrível e escalável. Para a gente, atender é dar atenção, no tempo e da forma que as pessoas merecem. Por isso, encontramos uma forma de encantar sem perder eficiência.</p>
                </div>
                <div class="image">
                    <img class="animation" src="{{ Vite::asset('resources/images/huggy_animation.gif') }}" alt="Animação de 'olá' da Huggy" loading="lazy" width="auto" height="auto">
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('time_line_content')
<div class="row g-0">
    <div class="col-lg-12">
        <section class="time-line">
            <div class="content">
                <div class="gradient-content">
                    <div class="left-side">
                        <img class="animation" src="{{ Vite::asset('resources/images/logo-footer.webp') }}" alt="Animação de 'olá' da Huggy" loading="lazy" width="auto" height="auto">
                    </div>
                    <div class="right-side">
                        <h3>Somos <br><span class="red">respostas automáticas </span><br>e conversas inesquecíveis</h3>
                        <h4>Somos <br>calor humano no <br>Atendimento Digital.</h4>
                        <div class="last-part">
                            <div class="circle"></div>
                            <h4>E somos também história.</h4>
                        </div>
                    </div>
                </div>
                <div class="timeline-station-content">
                    <div class="timeline-station">

                    </div>
                    <div class="spacial-station">
                        <img src="{{ Vite::asset('resources/images/foquete2-historia.webp') }}" alt="Estação espacial com foquete" loading="lazy" width="auto" height="auto">
                    </div>
                </div>
            </div>
            <div class="station">
                <div class="left-rectangle"></div>
                <div class="right-rectangle"></div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('numbers_content')
<div class="row g-0">
    <div class="col-lg-12">
        <section class="spacial-numbers">
            <div class="content">
                <div class="spacial-content">
                    <div class="foguete">
                        <img src="{{ Vite::asset('resources/images/foguete2-scaleup.webp') }}" alt="Estação espacial com foquete" loading="lazy" width="auto" height="auto">
                    </div>
                    <div class="numbers-block">
                        <h5>Hoje somos uma das empresas que mais crescem no Brasil.</h5>
                        <div class="numbers">
                            <div class="number">
                                <img class="like" src="{{ Vite::asset('resources/images/icon-like.webp') }}" alt="Grafismo de um coração" loading="lazy" width="auto" height="auto">
                                <p class="bold">+ 3000</p>
                                <p>negócios impactadores</p>
                            </div>
                            <div class="number">
                                <img class="chat" src="{{ Vite::asset('resources/images/icon-chat.webp') }}" alt="Grafismo de caixinhas de diálogo" loading="lazy" width="auto" height="auto">
                                <p class="bold">+2 bilhões</p>
                                <p>mensagens processadas</p>
                            </div>
                            <div class="number">
                                <img class="equipe" src="{{ Vite::asset('resources/images/icon-equipe.webp') }}" alt="Grafismo de pessoas" loading="lazy" width="auto" height="auto">
                                <p class="bold">+ 100 Huggers</p>
                                <p>apaixonados pelo que fazem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="earth">
                    <img src="{{ Vite::asset('resources/images/earth.webp') }}" alt="Estação espacial com foquete" loading="lazy" width="auto" height="auto">
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('jobs_content')
<div class="row g-0">
    <div class="col-lg-12">
        <section class="jobs">
            <div class="content">
                <div class="first-block">
                    <div class="text-block">
                        <h6>Isso é resultado de um time de Huggers especialistas que torna tudo possível.</h6>
                        <p>Contribuímos para continuar fortalecendo o conceito de Atendimento Digital, aperfeiçoando técnicas e oferecendo ferramentas de educação ao mercado para difusão do conhecimento.</p>
                    </div>
                    <div class="image-block">
                        <img src="{{ Vite::asset('resources/images/team-1.webp') }}" alt="Foto da equipe aplaudindo" loading="lazy" width="auto" height="auto">
                    </div>
                </div>
                <div class="second-block">
                    <div class="image-block">
                        <img src="{{ Vite::asset('resources/images/team-2.webp') }}" alt="Foto dos colaboradores felizes" loading="lazy" width="auto" height="auto">
                    </div>
                    <div class="text-block">
                        <h6>Um time que não espera por novos conceitos, resoluções ou oportunidades. A gente faz.</h6>
                        <p>Integramos pessoas com diferentes expertises em nosso time para que possamos criar as melhores tecnologias e oferecer experiências inesquecíveis.</p>
                    </div>
                </div>
                <div class="call-block">
                    <h6>Venha fazer parte do nosso time!</h6>
                    <button onclick="fbq('track', 'Lead');">Ver as vagas disponíveis</button>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('talk_with_us_content')
<div class="row g-0">
    <div class="col-lg-12">
        <section class="talk-with-us">
            <div class="content">
                <div class="first-block">
                    <div class="image-block">
                        <img src="{{ Vite::asset('resources/images/robot-social-media.webp') }}" alt="Foto dos colaboradores felizes" loading="lazy" width="auto" height="auto">
                    </div>
                    <div class="text-block">
                        <h6>Somos incansáveis na busca pelo aperfeiçoamento de nossas soluções</h6>
                        <p>Além de domínio técnico e atualização constante, temos criatividade para nos reinventar a cada novo desfio, e presença, para te ajudar a ir cada vez mais longe.</p>
                        <button onclick="Huggy.showTrigger(26881);">Falar com um especialista</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('newsletter_content')
<div class="row g-0">
    <div class="col-lg-12">
        <section class="newsletter">
            <div class="content">
                <img src="{{ Vite::asset('resources/images/rectangle-newsletter.webp') }}" alt="Imagem de fundo com formas da Huggy" loading="lazy" width="auto" height="auto">
                <div class="newsletter-content">
                    <div class="text-block">
                        <h6>Assine nossos conteúdos</h6>
                        <p>Fique por dentro das novidades e receba dicas de especialistas em atendimento digital.</p>
                    </div>

                    <div class="form-block">
                        <form action="" method="post">
                            @csrf
                            <input id="input-name" class="input-name" type="text" name="name" value="{{ old('name') }}">
                            <label id="label-name" class="label-name">Nome</label>
                            <input id="input-email" class="input-email" type="email" name="email" value="{{ old('email') }}">
                            <label id="label-email" class="label-email">E-mail</label>
                            <input id="campain-id" class="campain-id" type="hidden" name="campain-id" value="7016Q000001LuN5QAK">
                        </form>
                        <button id="form-button">Inscreva-se</button>
                        <p id="return_message"></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('footer')
<div class="row g-0">
    <div class="col-lg-12">
        <footer>
            <div class="content">
                <img src="{{ Vite::asset('resources/images/logo-footer.webp') }}" alt="Logo da Huggy" loading="lazy" width="auto" height="auto">
            </div>
        </footer>
    </div>
</div>
@endsection