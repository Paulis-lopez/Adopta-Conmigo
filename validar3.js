function validar(){


  var nombre = document.getElementById('nombre').value;
  var apellido = document.getElementById('apellido').value;
  var telefono = document.getElementById('telefono').value;
  var documento = document.getElementById('documento').value;
  var correo = document.getElementById('correo').value;
  var dinero = document.getElementById('dinero').value;


  if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
     alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
  return false;
}else{
if(apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)){
     alert('ERROR: El campo apellido no debe ir vacío o lleno de solamente espacios en blanco');
     return false;
}else{
if (telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)) {
alert('ERROR: El campo telefono no debe ir vacío o lleno de solamente espacios en blanco');
     return false;
}else{
  if (documento == null || documento.length == 0 || /^\s+$/.test(documento)) {
    alert('ERROR: El campo documento no debe ir vacío o lleno de solamente espacios en blanco');
     return false;
  }else{

    if (correo == null || correo.length == 0 || /^\s+$/.test(correo)) {
    alert('ERROR: El campo correo no debe ir vacío o lleno de solamente espacios en blanco');
     return false;
  }else{

    if (dinero == null || dinero.length == 0 || /^\s+$/.test(dinero) || dinero==0 ) {
    alert('ERROR: El campo cantidad no debe ir vacío o lleno de solamente espacios en blanco');
     return false;
  }else{


var url = "enviar3.php?nombre=" + nombre + "&apellido=" + apellido + "&telefono=" + telefono + "&documento=" + documento + "&correo=" + correo + "&dinero=" + dinero;

window.location=url;

return true;


}

}

  }
}
  


}


}

}
