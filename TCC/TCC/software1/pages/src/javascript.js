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
    window.location.href = "login.php";
}
function meuCadastro(){
    window.location.href = "meuCadastro.php";
}
function cadastrar() {
    window.location.href = "cadastroUser.php";
}

$('.celular').mask('(00)00000-0000');
$('.rg').mask('11.111.111-1');
$('.cpf').mask('000.000.000-00');