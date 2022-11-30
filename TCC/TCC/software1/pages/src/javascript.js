//  src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js" 
//  src="src/jquery-3.6.0.min.js"

function enter(){
    //var x = document.getElementById("Login").value;
    window.location.href = "intranet.php";    
}
function login(){
    window.location.href = "../publico/login.php";
}
function cancelar(){
    window.location.href = "../publico/index.php";
}
function cancelarMorador() {
    window.location.href = "../intranet/moradores.php";
}
function cancelarIntra() {
    window.location.href = "../intranet/intranet.php";
}
function cancelarUsuario() {
    window.location.href = "../intranet/usuarios.php";
}
function meuCadastro(){
    window.location.href = "meuCadastro.php";
}
function cadastrar() {
    window.location.href = "cadMorador.php";
}
function cadUsuario(){
    window.location.href = "cadUsuario.php";
}
function alterUsuario() {
    window.location.href = "alterUsuario.php";
}

$('.celular').mask('(00)00000-0000');
$('.rg').mask('11.111.111-1');
$('.cpf').mask('000.000.000-00');