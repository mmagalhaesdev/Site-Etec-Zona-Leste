<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Curso</title>
        @vite("resources/css/app.css")
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
        </div>

        <!--Menu-->
        <div class="bg-red-700 h-12 flex items-center justify-center">
        
            <ul>
                <a href="/" class="inline-block mx-4 text-white font-bold">Home</a>
                <a href="/curso"class="inline-block mx-4 text-white font-bold">Cursos</a>
                <a href="/vestibulinho" class="inline-block mx-4 text-white font-bold">Vestibulinho</a>
                <a href="/departamento" class="inline-block mx-4 text-white font-bold">Departamentos</a>
                <a href="/evento" class="inline-block mx-4 text-white font-bold">Eventos</a>
            </ul>
        
        </div>
        
        <!--Titulo-->
        <div class="px-8 mt-6">
            <h1 class="text-3xl font-bold text-gray-800">Principais Cursos: </h1>
        </div>

        <!--Container-->
        <div class="flex justify-center mt-8 gap-12">
            <div class="w-96">
                <img src="../Images/ds.png" class="w-96 h-64">

                <p class="text-lg font-bold text-blue-800">Desenvolvimento de Sistemas</p>

                <p class="text-justify text-sm">É o profissional que analisa e projeta sistemas. Constrói, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de desenvolvimento e linguagens de programação específica.</p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/analise-e-desenvolvimento-de-sistema/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-96">
                <img src="../Images/adm.png" class="w-96 h-64">

                <p class="text-lg font-bold text-blue-800">Administração</p>

                <p class="text-justify text-sm">É o profissional que planeja, organiza, dirige e controla os recursos de uma organização. Analisa e implementa estratégias de negócios. Gerencia processos administrativos e operacionais.</p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/administracao/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-96">
                <img src="../Images/rh.png" class="w-96 h-64">

                <p class="text-lg font-bold text-blue-800">Recursos Humanos</p>
                
                <p class="text-justify text-sm">É o profissional que planeja, organiza, dirige e controla os recursos de uma organização. Analisa e implementa estratégias de negócios. Gerencia processos administrativos e operacionais.</p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/recursos-humanos/'">
                    Mais Informações
                </button>
            </div>
        </div>

        <div class="flex justify-center mt-20 gap-12">
            <div class="w-96">
                <img src="../Images/sj.png" class="w-96 h-64">

                <p class="text-lg font-bold text-blue-800">Serviços Jurídicos</p>

                <p class="text-justify text-sm">O curso oferece uma abordagem abrangente das leis e normas que regem as diferentes esferas da sociedade e das relações comerciais. Os alunos mergulharam em áreas essenciais do Direito, como o direito constitucional.</p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/servicos-juridicos/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-96">
                <img src="../Images/cont.png" class="w-96 h-64">

                <p class="text-lg font-bold text-blue-800">Contabilidade</p>

                <p class="text-justify text-sm">O curso de contabilidade demanda profundos conhecimentos em matemática e língua portuguesa, constituindo-se como uma base sólida para compreender e dominar os princípios fundamentais dessa ciência.</p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/contabilidade/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-96">
                <img src="../Images/log.png" class="w-96 h-64">

                <p class="text-lg font-bold text-blue-800">Logística</p>
                
                <p class="text-justify text-sm">No contexto do aprendizado sobre logística, os estudantes serão expostos a uma variedade de conhecimentos interdisciplinares, incluindo matemática, geografia e física, fundamentais para entender os processos de armazenamento e distribuição.</p>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/novotec-logistica-2/'">
                    Mais Informações
                </button>
            </div>
        </div>

        <!--Footer-->
        <div class="bg-red-700 mt-50 px-8 py-10">
            <p class="text-white text-center">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>

    </body>
</html>