function enter(){
    //var x = document.getElementById("Login").value;
    window.location.href = "intranet.php";    
}
function cadastro(){
    window.location.href = "cadastroUser.php";
}
function login(){
    window.location.href = "login.php";
}
function cancelar(){
    window.location.href = "login.php";
}
$('.celular').mask('(00)00000-0000');
$('.rg').mask('11.111.111-1');
$('.cpf').mask('000.000.000-00');