addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var ref=document.getElementById('formularioagregar');
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
  conexion1.open('POST','agregar.php', true);
  conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion1.send(retornarDatos());  
}


function retornarDatos()
{
  var cad='';
   var producto=document.getElementById('add').value;
    var cantidad=document.getElementById('add2').value;
     var precio=document.getElementById('add3').value;
  cad='nombre='+encodeURIComponent(producto)+'&cantidad='+encodeURIComponent(cantidad)+'&precio='+encodeURIComponent(precio);
  return cad;
}


function procesarEventos()
{
 
  var ref=document.getElementById('formularioagregar');
   var ref2=document.getElementById('cantidadadd');
  if(conexion1.readyState == 4){
   ref2.innerHTML = '<div class="alert alert-success alert-dismissable">'+conexion1.responseText+'<button type="button" id="cerrar" class="close">&times</button></div>';
  ref.reset();
   var cerrar=document.getElementById('cerrar');
     addEvent(cerrar,'click',cerraral,false);
  }
}

function cerraral(){
  var ref2=document.getElementById('cantidadadd');
   ref2.innerHTML =' ';
}
//***************************************
//Funciones comunes a todos los problemas
//***************************************
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