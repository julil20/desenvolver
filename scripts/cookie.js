// // JavaScript para lidar com o clique no botão de aceitação de cookies
// document.getElementById("aceitar-cookies").addEventListener("click", function() {
//     // Definir o cookie no navegador
//     document.cookie = "cookies_aceitos=sim; max-age=" + 3600 * 24 * 365 + "; path=/";

//     // Fazer uma requisição AJAX para registrar a aceitação no banco de dados
//     var usuarioId = 1;  // Exemplo de ID do usuário, geralmente seria obtido de uma sessão

//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "registrar_aceite.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.send("usuarioId=" + usuarioId);

//     // Ocultar o aviso após aceitar
//     document.querySelector(".aviso-cookies").style.display = "none";
// });