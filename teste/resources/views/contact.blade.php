<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Aplicação</title>


        <style>
        /* Estilos específicos para a página de contato */
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

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            color: #888;
            margin-bottom: 10px;
        }
    </style>

    </head>
    <body class="antialiased">
    <div class="container">
        <h1>Contato</h1>
        <p>Entre em contato conosco para obter mais informações sobre nossos cursos, inscrições e eventos.</p>
        <div class="contact-info">
            <p><strong>Telefone:</strong> (11) 1234-5678</p>
            <p><strong>Email:</strong> contato@escolaxyz.com</p>
            <p><strong>Endereço:</strong> Av aguia de aya, 123 - Cidade AE carvalho</p>
            <ul>
            <li><a href="/">Página Inicial</a></li>   
            </ul>
    </div>
    </div>
    </body>
</html>



