<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/favicon.ico') }}">
        <title>@yield('title')</title>
        @yield('meta_tags')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        @vite('resources/sass/app.scss')
        @vite('resources/js/app.js')
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BBM3DR21PQ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BBM3DR21PQ');
        </script>
        <!-- End Google tag (gtag.js) -->
        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '558166382889452');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=558166382889452&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
    </head>
    <body>
        @yield('header')
        @yield('video_content')
        @yield('about_us_content')
        @yield('time_line_content')
        @yield('numbers_content')
        @yield('jobs_content')
        @yield('talk_with_us_content')
        @yield('newsletter_content')
        @yield('footer')

        <!-- Init code Huggy.chat  //-->
        <script>
            var $_Huggy = {
                defaultCountry: '+55',
                uuid: 'ad1792d5-bf30-49f6-8bb8-ebcee39fd477' ,
                company: '340436',
                name: 'Daniel Oliveira',
                phone: '43991614020',
                email: 'danielvitol@hotmail.com',
                channelGreeting: 'Eu gostaria de fazer uma pergunta',
                mainColor: "#8805C8"
            };
            (function(i,s,o,g,r,a,m){
                i[r]={context:{id:'5cfb3aa373a390f3ee2ef84f3495797a'}};a=o;o=s.createElement(o); o.async=1;o.src=g;m=s.getElementsByTagName(a)[0];m.parentNode.insertBefore(o,m); 
            })(window,document,'script','https://js.huggy.chat/widget.min.js','pwz');
        </script>
        <!-- End code Huggy.chat  //-->
    </body>
</html>