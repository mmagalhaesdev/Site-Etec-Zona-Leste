<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento</title>
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
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 text-center md:text-left">Principais Departamentos: </h1>
        </div>

        <div class="flex flex-col md:flex-row mx-4 md:mx-8 gap-6 md:gap-8 mt-8 items-center md:items-start">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="../Images/principal.png" class="w-full md:w-3/4 h-auto object-cover">
            </div>

            <div class="w-full">
                <div class="text-justify text-gray-700 text-base md:text-lg">
                    <p>A área de entrada da ETEC é o primeiro espaço de contato dos alunos, professores e visitantes com a instituição. Esse ambiente é organizado para proporcionar acolhimento, segurança e orientação a todos que chegam.</p>
                </div>

                <div class="text-justify text-gray-700 text-base md:text-lg mt-6 md:mt-10">
                    <p> Geralmente, conta com portaria, controle de acesso e áreas de circulação que direcionam para os demais setores da escola. Além disso, a entrada da ETEC também representa a identidade da instituição, transmitindo uma imagem de organização, disciplina e compromisso com a educação. É um local de grande movimentação, principalmente nos horários de início e término das aulas, sendo essencial para o bom funcionamento e fluxo dentro da escola.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row mx-4 md:mx-8 gap-6 md:gap-8 mt-12 md:mt-20 items-center md:items-start">
            <div class="w-full">
                <div class="text-justify text-gray-700 text-base md:text-lg">
                    <p>O anfiteatro da ETEC é um espaço destinado à realização de eventos, apresentações e atividades educacionais. Nele ocorrem palestras, seminários, peças teatrais, apresentações de trabalhos e outras ações que contribuem para a formação dos alunos além da sala de aula.</p>
                </div>

                <div class="text-justify text-gray-700 text-base md:text-lg mt-6 md:mt-10">
                    <p>Esse ambiente é estruturado para oferecer conforto e boa visibilidade ao público, contando com palco, assentos organizados e recursos audiovisuais. O anfiteatro também incentiva a participação dos estudantes em atividades culturais e acadêmicas, promovendo o desenvolvimento da comunicação, criatividade e trabalho em equipe.</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 flex justify-center">
                <img src="../Images/anf.png" class="w-full md:w-3/4 h-auto object-cover">
            </div>
        </div>

        <div class="flex flex-col md:flex-row mx-4 md:mx-8 gap-6 md:gap-8 mt-12 md:mt-20 items-center md:items-start">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="../Images/maker.png" class="w-full md:w-3/4 h-auto object-cover">
            </div>
            
            <div class="w-full">
                <div class="text-justify text-gray-700 text-base md:text-lg">
                    <p>O espaço Maker é um ambiente voltado à criatividade, inovação e aprendizado prático, onde os alunos podem desenvolver projetos utilizando tecnologia e ferramentas diversas. Nesse espaço, a proposta é aprender fazendo, estimulando o pensamento crítico, a autonomia e a resolução de problemas.</p>
                </div>

                <div class="text-justify text-gray-700 text-base md:text-lg mt-6 md:mt-10">
                    <p>A proposta da Sala Maker é incentivar a criatividade, o pensamento crítico e o aprendizado “mão na massa”. Os estudantes podem desenvolver projetos nas áreas de tecnologia, robótica, programação e design, trabalhando de forma colaborativa e explorando soluções para problemas reais. Esse espaço contribui para uma aprendizagem mais dinâmica e significativa, preparando os alunos para os desafios do mercado de trabalho e estimulando a inovação.</p>
                </div>
            </div>
        </div>

        <div class="bg-red-700 mt-16 md:mt-40 px-4 md:px-8 py-6 md:py-10">
            <p class="text-white text-center text-sm md:text-base">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </body>
</html>