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
        <div class="w-full my-4">
            <div class="flex flex-col md:flex-row items-center">

                <div class="w-24 h-24 md:w-32 md:h-32 ml-4">
                    <img src="../Images/logo.jpg" class="w-full h-full object-contain">
                </div>

                <div class="w-24 h-24 md:w-32 md:h-32">
                    <img src="../Images/cps.png" class="w-full h-full object-contain">
                </div>

                <div class="md:ml-auto mr-4 md:mr-10 mt-4 md:mt-10 flex items-center gap-4">
                    <a href="https://www.instagram.com/eteczonalesteoficial/" class="cursor-pointer">
                        <i class="fa fa-instagram text-2xl md:text-3xl" style="color:#d7d00e;"></i>
                    </a>
                    <a href="https://www.youtube.com/@etecdazonaleste2949" class="cursor-pointer">
                        <i class="fa fa-youtube-play text-2xl md:text-3xl" style="color:#b80a0b;"></i>
                    </a>
                    <a href="https://www.facebook.com/Eteczonalesteoficial/" class="cursor-pointer">
                        <i class="fa fa-facebook-f text-2xl md:text-3xl" style="color:#0c4257;"></i>
                    </a>
                </div>

            </div>
        </div>

        <div class="bg-red-700 flex flex-col md:flex-row items-center justify-center py-2 md:h-12">
            <ul class="flex flex-col md:flex-row text-center w-full justify-center">
                <a href="/" class="mx-2 md:mx-4 my-1 md:my-0 text-white font-bold">Home</a>
                <a href="/curso"class="mx-2 md:mx-4 my-1 md:my-0 text-white font-bold">Cursos</a>
                <a href="/vestibulinho" class="mx-2 md:mx-4 my-1 md:my-0 text-white font-bold">Vestibulinho</a>
                <a href="/departamento" class="mx-2 md:mx-4 my-1 md:my-0 text-white font-bold">Departamentos</a>
                <a href="/evento" class="mx-2 md:mx-4 my-1 md:my-0 text-white font-bold">Eventos</a>
            </ul>
        </div>
        
        <div class="px-4 md:px-8 mt-6">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 text-center md:text-left">Principais Cursos: </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-8 mt-8">
            <div class="w-full">
                <img src="../Images/ds.png" class="w-full h-48 md:h-64 object-cover">
                <p class="text-lg font-bold text-blue-800 mt-2">Desenvolvimento de Sistemas</p>
                <p class="text-justify text-sm">É o profissional que analisa e projeta sistemas. Constrói, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de desenvolvimento e linguagens de programação específica.</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer w-full md:w-auto" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/analise-e-desenvolvimento-de-sistema/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-full">
                <img src="../Images/adm.png" class="w-full h-48 md:h-64 object-cover">
                <p class="text-lg font-bold text-blue-800 mt-2">Administração</p>
                <p class="text-justify text-sm">É o profissional que planeja, organiza, dirige e controla os recursos de uma organização. Analisa e implementa estratégias de negócios. Gerencia processos administrativos e operacionais.</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer w-full md:w-auto" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/administracao/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-full">
                <img src="../Images/rh.png" class="w-full h-48 md:h-64 object-cover">
                <p class="text-lg font-bold text-blue-800 mt-2">Recursos Humanos</p>
                <p class="text-justify text-sm">É o profissional que planeja, organiza, dirige e controla os recursos de uma organização. Analisa e implementa estratégias de negócios. Gerencia processos administrativos e operacionais.</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer w-full md:w-auto" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/recursos-humanos/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-full">
                <img src="../Images/sj.png" class="w-full h-48 md:h-64 object-cover">
                <p class="text-lg font-bold text-blue-800 mt-2">Serviços Jurídicos</p>
                <p class="text-justify text-sm">O curso oferece uma abordagem abrangente das leis e normas que regem as diferentes esferas da sociedade e das relações comerciais. Os alunos mergulharam em áreas essenciais do Direito, como o direito constitucional.</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer w-full md:w-auto" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/servicos-juridicos/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-full">
                <img src="../Images/cont.png" class="w-full h-48 md:h-64 object-cover">
                <p class="text-lg font-bold text-blue-800 mt-2">Contabilidade</p>
                <p class="text-justify text-sm">O curso de contabilidade demanda profundos conhecimentos em matemática e língua portuguesa, constituindo-se como uma base sólida para compreender e dominar os princípios fundamentais dessa ciência.</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer w-full md:w-auto" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/contabilidade/'">
                    Mais Informações
                </button>
            </div>

            <div class="w-full">
                <img src="../Images/log.png" class="w-full h-48 md:h-64 object-cover">
                <p class="text-lg font-bold text-blue-800 mt-2">Logística</p>
                <p class="text-justify text-sm">No contexto do aprendizado sobre logística, os estudantes serão expostos a uma variedade de conhecimentos interdisciplinares, incluindo matemática, geografia e física, fundamentais para entender os processos de armazenamento e distribuição.</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer w-full md:w-auto" onclick="window.location.href='https://eteczonaleste.cps.sp.gov.br/cursos-etec/novotec-logistica-2/'">
                    Mais Informações
                </button>
            </div>
        </div>

        <div class="bg-red-700 mt-16 md:mt-40 px-4 md:px-8 py-6 md:py-10">
            <p class="text-white text-center text-sm md:text-base">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>

    </body>
</html>