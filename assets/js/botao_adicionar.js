function botao_adicionar() {
    var botao = document.getElementById("botao_adicionar");
    botao.addEventListener("mouseover", function() {
        botao.innerText = "Adicionar Empresasssss";
    });
    botao.addEventListener("mouseout", function() {
        botao.innerText = "Adicionar Empresas";
    });
}
botao_adicionar();
