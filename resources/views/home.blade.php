<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--Header-->
        <div class="inline-block w-full  my-4">
            <div class="flex">
                <!--Etec Logo -->
                <div class="w-32 h-32 ml-4">
                    <img src="../Images/logo.jpg" >
                </div>
                <!--CPS Logo -->
                <div class="w-32 h-32">
                    <img src="../Images/cps.png" >
                </div>

                <!--Mídias Sociais-->
                <div class="ml-auto mr-10 mt-10 flex items-center gap-4">
                    <a href="https://www.instagram.com/eteczonalesteoficial/" class="cursor-pointer">
                        <i class="fa fa-instagram" style="font-size:36px; color:#d7d00e;"></i>
                    </a>
                    <a href="https://www.youtube.com/@etecdazonaleste2949" class="cursor-pointer">
                        <i class="fa fa-youtube-play" style="font-size:36px; color:#b80a0b;"></i>
                    </a>
                    <a href="https://www.facebook.com/Eteczonalesteoficial/" class="cursor-pointer">
                        <i class="fa fa-facebook-f" style="font-size:36px; color:#0c4257;"></i>
                    </a>
                </div>
            </div>

        <!--Menu-->
        <div class="bg-red-700 h-12 flex items-center justify-center">
                <ul>
                    <a href="/" class="inline-block mx-4 text-white font-bold">Home</a>
                    <a href="/curso"class="inline-block mx-4 text-white font-bold">Cursos</a>
                    <a href="/departamento" class="inline-block mx-4 text-white font-bold">Departamentos</a>
                    <a href="/departamento" class="inline-block mx-4 text-white font-bold">Departamentos</a>
                    <a href="/evento" class="inline-block mx-4 text-white font-bold">Eventos</a>
                </ul>
            </div>
        </div>

       <!-- TÍTULO -->
        <div class="px-8 mt-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Bem-vindo à ETEC Zona Leste!
            </h1>
            <p class="text-gray-600 mt-2">
                Educação pública de qualidade para seu futuro.
            </p>
        </div>

        <!--Container-->
        <div class="flex ml-8 mr-8 gap-8 mt-8">
            <!--Banner-->
            <div class="w-650 h-32">
                <img src="../Images/etec.jpg">
            </div>

            <!--Conteudo-->
            <div class="inline-block">
                <div class="text-justify  text-gray-700 text-lg">
                    <p>A ETEC Zona Leste é uma escola pública de qualidade que oferece ensino 
                    médio e cursos técnicos, preparando os alunos para o mercado de trabalho 
                    e a vida acadêmica. Com boa infraestrutura, professores qualificados e 
                    ensino prático, promove o desenvolvimento profissional, crítico e cidadão 
                    dos estudantes.</p>
                </div>

                <div class="text-justify mt-4 text-gray-700 text-lg">
                    <p>Com uma estrutura moderna, laboratórios equipados
                    e professores qualificados, a escola incentiva o 
                    aprendizado técnico, o pensamento crítico e o 
                    desenvolvimento de habilidades essenciais para a
                    vida profissional. Além disso, promove projetos,
                    eventos e atividades que aproximam os alunos da 
                    realidade do mundo do trabalho.</p>
                </div>
            </div>
        </div>

        <!--Footer-->
        <div class="bg-red-700 mt-50 px-8 py-10">
            <p class="text-white text-center">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </body>
</html>