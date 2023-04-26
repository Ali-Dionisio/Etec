//  src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js" 
//  src="src/jquery-3.6.0.min.js"


var x = document.getElementById("data").value;

let DataAtual = new Date().toISOString().slice(0, 10).split('-').join('-');

$('#data').click(function () {
    console.log("è o que aáá ")
})

// if(x < DataAtual){
//     alert("è o que é ")
// };

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
function consuhisto() {
    window.location.href = "../intranet/consultarHistorico.php";
}
function cancelarUsuario() {
    window.location.href = "../intranet/usuarios.php";
}
function cancelarSalao() {
    window.location.href = "../intranet/salao.php";
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
function voltarVaga() {
    window.location.href = "viewMinhaVaga.php";
}



    // impede o envio do form - e.preventDefault();
