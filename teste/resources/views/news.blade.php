<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Aplicação</title>


        <style>
        /* Estilos específicos para a página de notícias */
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

        .news {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }

        h2 {
            color: #666;
            margin-bottom: 10px;
        }

        p {
            color: #888;
            line-height: 1.6;
        }
    </style>


    </head>
    <body class="antialiased">
    <div class="container">
        <h1>Notícias</h1>
        <div class="news">
            <h2>Novo Curso de Programação</h2>
            <p>Estamos felizes em anunciar que estamos lançando um novo curso de programação para estudantes do ensino médio e superior.</p>
            <p>Fique atento para mais detalhes e inscrições em breve!</p>
        </div>
        <div class="news">
            <h2>Evento Cultural</h2>
            <p>No próximo mês, teremos um evento cultural aberto ao público, com apresentações de música, dança e teatro.</p>
            <p>Marque sua presença e junte-se a nós para uma noite de diversão e entretenimento!</p>

            <ul>
            <li><a href="/">Página Inicial</a></li>   
            </ul>

            
        </div>
    </div>

          
    </body>
</html>
