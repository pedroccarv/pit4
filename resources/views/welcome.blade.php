<!DOCTYPE html>
<head>
    <?php
        header('Content-type: text/html; charset=utf-8');
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    
<div class="container">
        <button id="lightModeBtn">Modo Claro</button>
        <button id="darkModeBtn">Modo Escuro</button>
        
        <main>
            <section class="area-cadastro">
                <div class="form-cadastro">
                    <form id="form-section" action="cadastrar.php" method="POST">
                        <h1 id="text-form">Crie seu cadastro!</h1>
                        <div class="half-input">
                            <div class="flex-input input-left">
                                <label for="Nome">Nome<span id="asterisk">*</span></label>
                                <input class="required" type="text" name="nome" minlength="2" id="nome" oninput="NameValidate()">
                                <span class="span-alert">O nome deve ter no mínimo 2 caracteres!</span>
                            </div>
                            <div class="flex-input input-right">
                                <label for="Sobrenome">Sobrenome</label>
                                <input class="required" type="text" name="sobrenome" oninput="LastNameValidate()">
                                <span class="span-alert">O sobrenome deve ter no mínimo 2 caracteres!</span>
                            </div>
                        </div>
                        <label class="lbl-form" for="Email">Email<span id="asterisk">*</span></label>
                        <input class="form-input required" type="email" name="email" placeholder="name@email.com" minlength="1" oninput="EmailValidate()">
                        <span class="span-alert span-width">Email inválido!</span>
                        <label class="lbl-form" for="Senha">Senha<span id="asterisk">*</span></label>
                        <input class="form-input required" type="text" name="senha" placeholder="" minlength="8" oninput="PasswordValidate()">
                        <span class="span-alert span-width">Insira todos os caracteres!</span>
                        <label class="lbl-form" for="Senha">Confirmar Senha<span id="asterisk">*</span></label>
                        <input class="form-input required" type="text" name="conf-senha" placeholder="" minlength="8" oninput="PasswordValidate()">
                        <span class="span-alert span-width">As senha não conferem!</span>
                        <label class="lbl-form" for="Senha">Data de Nascimento<span id="asterisk">*</span></label>
                        <input class="form-input required" type="date" name="data-nascimento">
                        <span class="span-alert span-width">Data Inválida!</span>
                        <div class="half-input">
                            <div class="flex-input input-left">
                                <label for="CPF">CPF<span id="asterisk">*</span></label>
                                <input id="CPF" class="required" type="text" name="CPF" placeholder="XXX.XXX.XXX-XX" minlength="14" maxlength="14" oninput="CpfValidate()">
                                <span class="span-alert">Campo inválido</span>
                            </div>
                            <div class="flex-input input-right">
                                <label for="Tel">Telefone<span id="asterisk">*</span></label>
                                <input id="telefone" class="required" type="tel" name="telefone" placeholder="(XX)XXXXX-XXXX" minlength="14" maxlength="14" oninput="PhoneValidate()">
                                <span class="span-alert">Campo inválido</span>
                            </div>
                        </div>
                        <label class="lbl-form" for="CEP">CEP<span id="asterisk">*</span></label>
                        <span class="span-alert span-width">Campo inválido</span>
                        <label class="lbl-form" for="Endereco">Endereço<span id="asterisk">*</span></label>
                        <input class="form-input required" type="text" name="endereco" value="endereco">
                        <span class="span-alert span-width">Campo inválido</span>
                        <div class="half-input">
                            <div class="flex-input input-left">
                                <label for="Bairro">Bairro<span id="asterisk">*</span></label>
                                
                                <span class="span-alert">Campo inválido</span>
                            </div>
                            <div class="flex-input input-right">
                                <label for="Cidade">Cidade<span id="asterisk">*</span></label>
                                
                                <span class="span-alert">Campo inválido</span>
                            </div>
                        </div>


                        <input class="form-input required" id="btn-logar" type="submit" name="Logar" value="Logar">
                    </form>
            </section>
        </main>
    </div>

    <script>
        const lightModeBtn = document.getElementById('lightModeBtn');
        const darkModeBtn = document.getElementById('darkModeBtn');

        // Função para mudar para o tema claro
        lightModeBtn.addEventListener('click', () => {
            document.body.classList.remove('dark-mode'); // Remove a classe do modo escuro se estiver presente
            // Adicione outras alterações de estilo específicas do tema claro, se necessário
        });

        // Função para mudar para o tema escuro
        darkModeBtn.addEventListener('click', () => {
            document.body.classList.add('dark-mode'); // Adiciona a classe do modo escuro
            // Adicione outras alterações de estilo específicas do tema escuro, se necessário
        });

        // Redirecionar para a página de agradecimento ao clicar no botão "Logar"
        document.getElementById('btn-logar').addEventListener('click', function() {
            window.location.href = 'loginsuc.blade.php'; // Substitua 'pagina_de_agradecimento.html' pelo caminho da sua página de agradecimento
        });
    </script>

</body>
<script src="mascara.js"></script>
<script src="CEPJava.js"></script>
</html>
