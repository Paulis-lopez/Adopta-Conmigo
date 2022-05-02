function filtrar(){

var especie = document.getElementById('especie').value;
var url= "5.php?especie=" + especie + "&accion=2";
window.location=url;
}