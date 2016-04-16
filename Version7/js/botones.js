addEvent(window,'load',inicializarEventos,false);
 
function inicializarEventos()
{
  var ref=document.getElementById('Entrar');
  addEvent(ref,'submit',enviarDatos,false);
     
}
 
 
 
function enviarDatos(e)
{
  if (window.event)
    window.event.returnValue=false;
  else
    if (e)
      e.preventDefault();
  enviarFormulario();
}
 
 
var conexion1;
function enviarFormulario() 
{
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('POST','php/login.php', true);
  conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion1.send(retornarDatos());  
}
 
 
 
function retornarDatos()
{
  var cad='';
   var correo=document.getElementById('correoUsuario').value;
    var clave=document.getElementById('claveUsuario').value;
   
  cad='correoUsuario='+encodeURIComponent(correo)+'&claveUsuario='+encodeURIComponent(clave);
  return cad;
}
 
 
function procesarEventos()
{
 var ref=document.getElementById('b1');
  var ref2=document.getElementById('b2');

  if(conexion1.readyState == 4){
  ref.innerHTML="<a href=?paginaphp=cerrasSesion><button type=button class=btn btn-default btn-sm id=CerrarSesion>Cerrar Sesion</button></a>";
  if(conexion1.responseText == 1){ 
 
   ref2.innerHTML="<a href=?paginaphp=cliente><button type=button class=btn btn-default btn-sm>Modificar</button></a>";
  }
  
  }
}
 
 
 
 
 
 
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else 
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}
 
 
function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}