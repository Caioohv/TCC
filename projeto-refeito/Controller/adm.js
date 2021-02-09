


function validarSenha() {
    NovaSenha = document.getElementById('txtSenha').value;
    CNovaSenha = document.getElementById('txtSenhaConfirm').value;
    if (NovaSenha != CNovaSenha) {
        alert("As senhas não coincídem");
        event.preventDefault();
    }else{
        alert("Cadastro efetuado com sucesso");
    }
}