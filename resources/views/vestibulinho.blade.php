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
            <h1 class="text-3xl font-bold text-gray-800">Como entrar na Etec?</h1>
        </div>

        <!--Container-->
        <div class="flex ml-8 mr-8 gap-8 mt-8">
            <!--Banner-->
            <div class="w-450 h-1">
                <img src="../Images/etec.png">
            </div>

            <!--Conteudo-->
            <div class="inline-block">
                <div class="text-justify  text-gray-700 text-lg">
                    <p>O processo de vestibulinho na ETEC, segue um padrão definido pelo Centro Paula Souza. Primeiramente, é divulgado um edital contendo todas as informações essenciais, como datas, locais de prova, cursos oferecidos, requisitos de inscrição e documentação necessária.</p>
                </div>

                <div class="text-justify  text-gray-700 text-lg mt-10">
                    <p>Os candidatos devem então se inscrever dentro do prazo estipulado, geralmente de forma online através do site oficial do vestibulinho da ETEC, e pagar uma taxa de inscrição conforme especificado no edital.</p>
                </div>

                <br>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 cursor-pointer" onclick="window.location.href='https://vestibulinho.etec.sp.gov.br/home/'">
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