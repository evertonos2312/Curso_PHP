<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\css\estilo.css">
    <title>Curso PHP</title>

</head>
<body>
    <header class="cabecalho">
        <h1>PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>1. Módulo Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos de Dados</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=def_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=def_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Basico</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=def_equacao">Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=def_variaveis">Desafio Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4. Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=def_pi">Desafio PI</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=def_oplogico">Desafio Op. Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=op_ternario">Operador Ternário</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                        <li><a href="exercicio.php?dir=controle&file=def_switch">Desafio Switch</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>5. Array</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">Básico - Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_index">Desafio Index</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
                        <li><a href="exercicio.php?dir=array&file=operacoes">Operações</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a></li>
                        <li><a href="exercicio.php?dir=array&file=multi">Multidimensionais</a></li>
                        <li><a href="exercicio.php?dir=array&file=array_const">Arrays Constantes</a></li>
                        <li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
                        <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
                        <li><a href="exercicio.php?dir=array&file=comparacao">Comparação Arrays</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>6. Repetições</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=repeticoes&file=for">Laço For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_for">Desafio For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=break_continue">Break - Continue</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Everton Silva - <?= date('Y'); ?>
    </footer>
</body>
</html>