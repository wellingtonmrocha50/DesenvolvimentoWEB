<!Doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema Comentarios-Fórum</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="login.php">Entrar</a></li>
        </ul>
    </nav>

    <div id="largura-pagina">
        <section id="content-1">
            <h1>Blog <span>A guerra dos Computadores</span> e como eles nós ajudaram a Desenvolver Raciócinio Lógico</h1>
            <img src="img/game.jpg" alt="game">
            <p class="p-texto">Durante o travamento da Segunda Guerra Mundial a Marinha dos Estados Unidos, em conjunto com a Universidade de Harvard, desenvolveu o computador Harvard Mark I, projetado pelo professor Howard Aiken, com base no calculador analítico de Babbage. O Mark I ocupava 120m³ aproximadamente, conseguindo multiplicar dois números de dez dígitos em três segundos. Este computador gigante permitiu ter o primeiro centro de computação no mundo, assim dando o início á era moderna dos computadores.

                            Simultaneamente, e em segredo, o Exército dos Estados Unidos desenvolvia um projeto semelhante. O engenheiro John Presper Eckert (1919-1995) e o físico John Mauchly (1907-1980) projetaram o ENIAC: Eletronic Numeric Integrator And Calculato [2]. Com 18 000 válvulas, o ENIAC conseguia fazer 500 multiplicações por segundo, porém só ficou pronto em 1946, vários meses após o final da guerra. Tendo sido projetado para calcular trajetórias balísticas, o ENIAC foi mantido em segredo pelo governo americano até o final da guerra.

                            Os custos para a manutenção e conservação do ENIAC eram proibitivos, pois dezenas a centenas de válvulas queimavam a cada hora e o calor gerado por elas necessitava ser controlado por um complexo sistema de refrigeração, além dos gastos elevadíssimos de energia elétrica.

                            No ENIAC, o programa era feito rearranjando a fiação em um painel. Nesse ponto John von Neumann propôs a ideia que transformou os calculadores eletrônicos em "cérebros eletrônicos": modelar a arquitetura do computador segundo o sistema nervoso central. Para isso, eles teriam que ter três características:

                            Codificar as instruções de uma forma possível de ser armazenada na memória do computador. Von Neumann sugeriu que fossem usados uns e zeros.
                            Armazenar as instruções na memória, bem como toda e qualquer informação necessária a execução da tarefa, e
                            Quando processar o programa, buscar as instruções diretamente na memória, ao invés de lerem um novo cartão perfurado a cada passo.
                            Este é o conceito de programa armazenado, cujas principais vantagens são: rapidez, versatilidade e auto modificação. Assim, o computador programável que conhecemos hoje, onde o programa e os dados estão armazenados na memória ficou conhecido como Arquitetura de von Neumann.

                            Para divulgar essa ideia, von Neumann publicou sozinho um artigo. Eckert e Mauchy não ficaram muito contentes com isso, pois teriam discutido muitas vezes com ele. O projeto ENIAC acabou se dissolvendo em uma chuva de processos, mas já estava criado o computador moderno.</p>
<!--AREA DE POSTAGEM-->
<h2>Deixe seu Comentário</h2>

        <form action="#" method="POST">
            <img src="img/user.jpg">
            <textarea name="texto-textarea" placeholder="Deixe sua Messagem" maxlength="400"></textarea>
            <input type="submit" value="PUBLICAR COMENTARIO">
        </form>
<!--AREA DE COMENTARIOS-->
<div class="area-comentario">
        <img src="img/user.jpg">
        <h3>Nome da Pessoa 1</h3>
        <h4>Horario e data da Publicação <a href="">Excluir</a></h4>
        <p>Comentario Ativo</p>
    </div>

    <div class="area-comentario">
        <img src="img/user.jpg">
        <h3>Nome da Pessoa 2</h3>
        <h4>Horario e data da Publicação <a href="">Excluir</a></h4>
        <p>Comentario Ativo</p>
    </div>

    <div class="area-comentario">
        <img src="img/user.jpg">
        <h3>Nome da Pessoa 3</h3>
        <h4>Horario e data da Publicação <a href="">Excluir</a></h4>
        <p>Comentario Ativo</p>
    </div>
        </section>
    <!--COLUNA A DIREITA DO BLOG-->
    <section id="conteudo-2">
        <div>
            <img src="img/c.jpg">
            <p class="titulo-strong"><strong>O que é a lógica de programação?</strong><br>
                                            Lógica de programação é a técnica de encadear pensamentos para atingir determinado objetivo. Estes pensamentos, podem ser descritos como uma seqüência de instruções, que devem ser seguidas para se cumprir uma determinada tarefa. Seqüência Lógica são passos executados até atingir um objetivo ou solução de um problema.</p>
        </div>
    </section>
    <section id="conteudo-3">
        <div>
            <img src="img/java.jpg">
            <h5>Linguagem de Programação</h5>
            <p class="">Java é uma linguagem de programação orientada a objetos desenvolvida na década de 90 por uma equipe de programadores chefiada por James Gosling, na empresa Sun Microsystems, que em 2008 foi adquirido pela empresa Oracle Corporation.[3] Diferente das linguagens de programação modernas, que são compiladas para código nativo, Java é compilada para um bytecode que é interpretado por uma máquina virtual (Java Virtual Machine, abreviada JVM). A linguagem de programação Java é a linguagem convencional da Plataforma Java, mas não é a sua única linguagem. A J2ME é utilizada em jogos de computador, celular, calculadoras, ou até mesmo o rádio do carro.</p>
        </div>
    </section>
    </div>
</body>
</html>