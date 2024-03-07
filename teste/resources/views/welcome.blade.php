<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Aplicação</title>


        <style>
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            line-height: 1.6;
        }
    </style>

    </head>
    <body class="antialiased">
    <div class="container">
        <h1>Bem-vindo à Etec Zona Leste</h1>
        <p>Uma escola comprometida com a educação de qualidade e o desenvolvimento dos alunos.</p>
        <p>Explore nosso site para saber mais sobre nossos cursos, eventos e atividades.</p>
        
    <ul>
    <li><a href="/about">Quem Somos</a></li>
    <li><a href="/news">Notícias</a></li>
    <li><a href="/contact">Contato</a></li>
</ul>

    </div>
    </body>
</html>
