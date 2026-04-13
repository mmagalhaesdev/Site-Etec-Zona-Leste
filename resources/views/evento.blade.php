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
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 text-center md:text-left">Principais Eventos: </h1>
        </div>

        <div class="flex flex-col md:flex-row mx-4 md:mx-8 gap-6 md:gap-8 mt-8 items-center md:items-start">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="../Images/pf.png" class="w-full md:w-3/4 h-auto object-cover">
            </div>

            <div class="w-full">
                <div class="text-justify text-gray-700 text-base md:text-lg">
                    <p>A Semana Paulo Freire, realizada nas ETECs, é um evento educacional que promove a reflexão, o conhecimento e a troca de experiências entre alunos, professores e a comunidade escolar. Inspirada no educador Paulo Freire, a semana busca valorizar a educação crítica, o diálogo e a construção do saber de forma participativa.</p>
                </div>

                <div class="text-justify text-gray-700 text-base md:text-lg mt-6 md:mt-10">
                    <p>Durante esse período, são desenvolvidas diversas atividades, como palestras, oficinas, apresentações de projetos, debates e exposições. Essas ações incentivam o protagonismo dos estudantes, permitindo que compartilhem seus conhecimentos e desenvolvam novas habilidades.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row mx-4 md:mx-8 gap-6 md:gap-8 mt-12 md:mt-20 items-center md:items-start">
            <div class="w-full">
                <div class="text-justify text-gray-700 text-base md:text-lg">
                    <p>A FETEPS (Feira Tecnológica do Centro Paula Souza) é um evento anual que reúne estudantes das ETECs e FATECs para apresentar projetos inovadores desenvolvidos durante seus cursos. Organizada pelo Centro Paula Souza, a feira tem como objetivo incentivar a criatividade, a pesquisa e o desenvolvimento tecnológico.</p>
                </div>

                <div class="text-justify text-gray-700 text-base md:text-lg mt-6 md:mt-10">
                    <p>Durante a FETEPS, os alunos expõem trabalhos nas áreas de tecnologia, gestão, meio ambiente, saúde e outras, mostrando soluções para problemas reais da sociedade. Os projetos são avaliados por especialistas, e muitos deles recebem reconhecimento e premiações.</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 flex justify-center">
                <img src="../Images/feteps.png" class="w-full md:w-3/4 h-auto object-cover">
            </div>
        </div>

        <div class="bg-red-700 mt-16 md:mt-40 px-4 md:px-8 py-6 md:py-10">
            <p class="text-white text-center text-sm md:text-base">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </body>
</html>