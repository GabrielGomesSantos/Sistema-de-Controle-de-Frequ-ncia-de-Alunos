function togglePassword() {
    var passwordField = document.getElementById("password");
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}

function mostrarEmpresa(select) {
    var empresaDropdown = document.getElementById("empresa");
    var labelEmpresa = document.getElementById("labelEmpresa");

    if (select.value == "1") {
        // Se o tipo for Secretaria - Senai, oculta o campo de empresa
        empresaDropdown.style.display = "none";
        labelEmpresa.style.display = "none";
    } else {
        // Se o tipo for Empresa, exibe o campo de empresa
        empresaDropdown.style.display = "block";
        labelEmpresa.style.display = "block";
    }
}