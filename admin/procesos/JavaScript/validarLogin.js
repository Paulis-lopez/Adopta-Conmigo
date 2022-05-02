function validarLogin(){


  var contraseña = document.getElementById('contraseña').value;
  var usuario = document.getElementById('usuario').value;

  if(usuario == null || usuario.length == 0 || /^\s+$/.test(usuario)){
     alert('ERROR: El campo usuario no debe ir vacío o lleno de solamente espacios en blanco');
  return false;
}else{
if(contraseña == null || contraseña.length == 0 || /^\s+$/.test(contraseña)){
     alert('ERROR: El campo contraseña no debe ir vacío o lleno de solamente espacios en blanco');
     return false;
}else{
  
if(usuario=="admin" && contraseña=="admin"){
  
    window.location="menu.php";

	 
return true;

}else{
  alert('El usuario y/o la contraseña son invalidos');
  return false;
}

}


}


}







