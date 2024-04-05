window.onload = function(){$("#showPassword").hide();}

$("#txtPassword").on('change',function() {  
		if($("#txtPassword").val())
		{
			$("#showPassword").show();
		}
		else
		{
			$("#showPassword").hide();
		}
});

$(".reveal").on('click',function() {
    var $pwd = $("#txtPassword");
    if ($pwd.attr('type') === 'password') 
		{
        $pwd.attr('type', 'text');
    } 
		else 
		{
        $pwd.attr('type', 'password');
    }
});
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
