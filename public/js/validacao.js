function validar () {
    let nome = document.querySelector("input[name='nome']");
    let descricao = document.querySelector("input[name='descricao']");

    if (nome.value.trim() === "" || descricao.value.trim() === "") {
        alert("Preencha todos os campos!");
        return false;
    }

    return true;

}