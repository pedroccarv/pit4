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