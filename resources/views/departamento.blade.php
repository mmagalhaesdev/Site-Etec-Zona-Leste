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
            <h1 class="text-3xl font-bold text-gray-800">Principais Departamentos: </h1>
        </div>

        <!--Container-->
        <div class="flex ml-8 mr-8 gap-8 mt-8">
            <!--Banner-->
            <div class="w-550 h-1">
                <img src="../Images/principal.png">
            </div>

            <!--Conteudo-->
            <div class="inline-block">
                <div class="text-justify  text-gray-700 text-lg">
                    <p>A área de entrada da ETEC é o primeiro espaço de contato dos alunos, professores e visitantes com a instituição. Esse ambiente é organizado para proporcionar acolhimento, segurança e orientação a todos que chegam.</p>
                </div>

                <div class="text-justify  text-gray-700 text-lg mt-10">
                    <p> Geralmente, conta com portaria, controle de acesso e áreas de circulação que direcionam para os demais setores da escola. Além disso, a entrada da ETEC também representa a identidade da instituição, transmitindo uma imagem de organização, disciplina e compromisso com a educação. É um local de grande movimentação, principalmente nos horários de início e término das aulas, sendo essencial para o bom funcionamento e fluxo dentro da escola.</p>
                </div>
            </div>
        </div>

        <!--Container-->
        <div class="flex ml-8 mr-8 gap-8 mt-45">
            <!--Conteudo-->
            <div class="inline-block">
                <div class="text-justify  text-gray-700 text-lg">
                    <p>O anfiteatro da ETEC é um espaço destinado à realização de eventos, apresentações e atividades educacionais. Nele ocorrem palestras, seminários, peças teatrais, apresentações de trabalhos e outras ações que contribuem para a formação dos alunos além da sala de aula.</p>
                </div>

                <div class="text-justify  text-gray-700 text-lg mt-10">
                    <p>Esse ambiente é estruturado para oferecer conforto e boa visibilidade ao público, contando com palco, assentos organizados e recursos audiovisuais. O anfiteatro também incentiva a participação dos estudantes em atividades culturais e acadêmicas, promovendo o desenvolvimento da comunicação, criatividade e trabalho em equipe.</p>
                </div>
            </div>

            <!--Banner-->
            <div class="w-400 ">
                <img src="../Images/anf.png">
            </div>
        </div>

        <!--Container-->
        <div class="flex ml-8 mr-8 gap-8 mt-20">

            <!--Banner-->
            <div class="w-650 ">
                <img src="../Images/maker.png">
            </div>
            
            <!--Conteudo-->
            <div class="inline-block">
                <div class="text-justify  text-gray-700 text-lg">
                    <p>O espaço Maker é um ambiente voltado à criatividade, inovação e aprendizado prático, onde os alunos podem desenvolver projetos utilizando tecnologia e ferramentas diversas. Nesse espaço, a proposta é aprender fazendo, estimulando o pensamento crítico, a autonomia e a resolução de problemas.</p>
                </div>

                <div class="text-justify  text-gray-700 text-lg mt-10">
                    <p>A proposta da Sala Maker é incentivar a criatividade, o pensamento crítico e o aprendizado “mão na massa”. Os estudantes podem desenvolver projetos nas áreas de tecnologia, robótica, programação e design, trabalhando de forma colaborativa e explorando soluções para problemas reais. Esse espaço contribui para uma aprendizagem mais dinâmica e significativa, preparando os alunos para os desafios do mercado de trabalho e estimulando a inovação.</p>
                </div>
            </div>
        </div>

        <!--Footer-->
        <div class="bg-red-700 mt-50 px-8 py-10">
            <p class="text-white text-center">@2026 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </body>
</html>