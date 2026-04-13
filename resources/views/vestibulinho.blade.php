<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    @vite('resources/css/app.css')
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
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 text-center md:text-left">Como entrar na Etec?</h1>
        </div>

        <div class="flex flex-col md:flex-row mx-4 md:mx-8 gap-6 md:gap-8 mt-8 items-center md:items-start">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="../Images/etec.png" class="w-full md:w-3/4 h-auto object-cover">
            </div>

            <div class="w-full">
                <div class="text-justify text-gray-700 text-base md:text-lg">
                    <p>O processo de vestibulinho na ETEC, segue um padrão definido pelo Centro Paula Souza. Primeiramente, é divulgado um edital contendo todas as informações essenciais, como datas, locais de prova, cursos oferecidos, requisitos de inscrição e documentação necessária.</p>
                </div>

                <div class="text-justify text-gray-700 text-base md:text-lg mt-6 md:mt-10">
                    <p>Os candidatos devem então se inscrever dentro do prazo estipulado, geralmente de forma online através do site oficial do vestibulinho da ETEC, e pagar uma taxa de inscrição conforme especificado no edital.</p>
                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6 cursor-pointer w-full md:w-auto" onclick="window.location.href='https://vestibulinho.etec.sp.gov.br/home/'">
                    Mais Informações
                </button>
            </div>
        </div>

        <div class="bg-red-700 mt-16 md:mt-40 px-4 md:px-8 py-6 md:py-10">
            <p class="text-white text-center text-sm md:text-base">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </body>
</html>