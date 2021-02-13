


function validarSenha() {
    NovaSenha = document.getElementById('pass1').value;
    CNovaSenha = document.getElementById('pass2').value;
    if (NovaSenha != CNovaSenha) {
        alert("As senhas não coincídem");
        event.preventDefault();
    }else{
        alert("Alteração efetuado com sucesso");
    }
}
