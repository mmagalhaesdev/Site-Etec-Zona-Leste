<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
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
            <h1 class="text-3xl font-bold text-gray-800">Principais Eventos: </h1>
        </div>

        <!--Container-->
        <div class="flex ml-8 mr-8 gap-8 mt-8">
            <!--Banner-->
            <div class="w-450 h-1">
                <img src="../Images/pf.png">
            </div>

            <!--Conteudo-->
            <div class="inline-block">
                <div class="text-justify  text-gray-700 text-lg">
                    <p>A Semana Paulo Freire, realizada nas ETECs, é um evento educacional que promove a reflexão, o conhecimento e a troca de experiências entre alunos, professores e a comunidade escolar. Inspirada no educador Paulo Freire, a semana busca valorizar a educação crítica, o diálogo e a construção do saber de forma participativa.</p>
                </div>

                <div class="text-justify  text-gray-700 text-lg mt-10">
                    <p>Durante esse período, são desenvolvidas diversas atividades, como palestras, oficinas, apresentações de projetos, debates e exposições. Essas ações incentivam o protagonismo dos estudantes, permitindo que compartilhem seus conhecimentos e desenvolvam novas habilidades.</p>
                </div>
            </div>
        </div>

        <!--Container-->
        <div class="flex ml-8 mr-8 gap-8 mt-40">
            <!--Conteudo-->
            <div class="inline-block">
                <div class="text-justify  text-gray-700 text-lg">
                    <p>A FETEPS (Feira Tecnológica do Centro Paula Souza) é um evento anual que reúne estudantes das ETECs e FATECs para apresentar projetos inovadores desenvolvidos durante seus cursos. Organizada pelo Centro Paula Souza, a feira tem como objetivo incentivar a criatividade, a pesquisa e o desenvolvimento tecnológico.</p>
                </div>

                <div class="text-justify  text-gray-700 text-lg mt-10">
                    <p>Durante a FETEPS, os alunos expõem trabalhos nas áreas de tecnologia, gestão, meio ambiente, saúde e outras, mostrando soluções para problemas reais da sociedade. Os projetos são avaliados por especialistas, e muitos deles recebem reconhecimento e premiações.</p>
                </div>
            </div>

            <!--Banner-->
            <div class="w-450 h-1">
                <img src="../Images/feteps.png">
            </div>
        </div>

        <!--Footer-->
        <div class="bg-red-700 mt-50 px-8 py-10">
            <p class="text-white text-center">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </body>
</html>