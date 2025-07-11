<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contato.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Odonto System - Contato</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid justify-content-between align-items-center">

                <a class="navbar-brand" href="index.html">
                    <img src="imgs/logo.png" alt="Logo Odonto System">
                </a>

                <div class="d-flex align-items-center">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link" href="servicos.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quem-somos.html">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.html">Contato</a>
                        </li>
                    </ul>

                    <a href="agendar.html" class="btn-agendar botao-agende">AGENDE AGORA</a>

                </div>
            </div>
        </nav>
    </div>  

    <div class="container fale-conosco">
        <h1 style="color: #0071b3">Fale conosco</h1>
    </div>

    <div class="container form-container">
        <form>
            <label for="empresa">Empresa <span class="obrigatorio">(obrigatório)</span></label>
            <input type="text" id="empresa" name="empresa" required>

            <label for="email">E-mail <span class="obrigatorio">(obrigatório)</span></label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Como podemos lhe auxiliar?</label>
            <textarea id="mensagem" name="mensagem" rows="4"></textarea>

            <button type="submit">ENVIAR</button>
        </form>
    </div>

    <footer>
        <img src="imgs/logo.png" alt="logo odonto sistem">

        <div class="contato">
            <h3>Contato</h3>
            <p>contato&#64;odontosistem.com <br> (99) 99999-9999</p>
        </div>
    </footer>
</body>
</html>
