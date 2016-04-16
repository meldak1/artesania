addEvent2(window,'load',inicializarEventos2,false);

function inicializarEventos2()
{
  var ref3=document.getElementById('formulariologin');
  addEvent2(ref3,'submit',enviarDatos2,false);
}

function enviarDatos2(e)
{
  if (window.event)
    window.event.returnValue=false;
  else
    if (e)
      e.preventDefault();
  enviarFormulario2();
}


var conexion2;
function enviarFormulario2() 
{

  conexion2=crearXMLHttpRequest2();
  conexion2.onreadystatechange = procesarEventos2;
  conexion2.open('POST','login.php', true);
  conexion2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion2.send(retornarDatos2());  
}


function retornarDatos2()
{
  var cad='';
   var usuario=document.getElementById('usuario').value;
    var contrasena=document.getElementById('contrasena').value;
  cad='usuario='+encodeURIComponent(usuario)+'&contrasena='+encodeURIComponent(contrasena);
  return cad;
}


function procesarEventos2()
{
 var ref3=document.getElementById('formulariologin');
  if(conexion2.readyState == 4){
  if(conexion2.responseText==1){
  alert("Secion Iniciada");
  document.location.href="secion.php"}
  else{
  alert("Secion No Iniciada");
   }ref3.reset();
  }
}
//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent2(elemento,nomevento,funcion,captura)
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

function crearXMLHttpRequest2() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}