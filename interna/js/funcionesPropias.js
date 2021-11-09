function ingresar(){
  alert("Usuario o Contraseña incorrecta, vuelva a intentarlo");
  document.form1.usuario.focus();
  //document.form1.submit();
}
function abrir(aux){
  if (aux == 'apr'){window.location = "apr.php";}
  else if (aux == 'eme'){window.location = "emelari.php";}
  else if (aux == 'ser'){window.location = "sergine.php";}
  else if (aux == 'est'){window.location = "estacionamiento.php";}
  else if (aux == 'ayn'){/*window.location = "ayni.php";*/}
  else if (aux == 'cam'){/*window.location = "camaras.php";*/}
  else if (aux == 'sin'){/*window.location = "sindicato.php";*/}
  else if (aux == 'sop'){/*window.location = "soporte.php";*/}
  else{ alert("error");}
}
