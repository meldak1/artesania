addEvent3(window,'load',inicializarEventos3,false);

function inicializarEventos3()
{
  var ref=document.getElementById('formularioeliminar');
  addEvent3(ref,'submit',enviarDatos3,false); 

}


function enviarDatos3(e)
{
  if (window.event)
    window.event.returnValue=false;
  else
    if (e)
      e.preventDefault();
  enviarFormulario3();
}


var conexion3;
function enviarFormulario3() 
{
  conexion3=crearXMLHttpRequest3();
  conexion3.onreadystatechange = procesarEventos3;
  conexion3.open('POST','eliminar.php', true);
  conexion3.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion3.send(retornarDatos3());  
}


function retornarDatos3()
{
  var cad='';
   var producto=document.getElementById('delete').value;
  cad='producto='+encodeURIComponent(producto);
 
 return cad;
}


function procesarEventos3()
{
 
  var ref=document.getElementById('formularioeliminar');
   var ref2=document.getElementById('cantidaddelete');
  if(conexion3.readyState == 4){
   ref2.innerHTML = '<div class="alert alert-success alert-dismissable">'+conexion3.responseText+'<button type="button" id="cerrar3" class="close">&times</button></div>';
  ref.reset();
   var cerrar=document.getElementById('cerrar3');
     addEvent3(cerrar,'click',cerraral3,false);
  }
}

function cerraral3(){
  var ref2=document.getElementById('cantidaddelete');
   ref2.innerHTML =' ';
}
//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent3(elemento,nomevento,funcion,captura)
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

function crearXMLHttpRequest3() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}