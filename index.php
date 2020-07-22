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
                    <h3>Módulo Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos de Dados</h3>
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
                    <h3>Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Basico</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=def_equacao">Desafio Equação</a></li>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Everton Silva - <?= date('Y'); ?>
    </footer>
</body>
</html>