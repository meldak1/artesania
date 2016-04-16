addEvent2(window,'load',inicializarEventos2,false);
 
function inicializarEventos2()
{
  var ref=document.getElementById('opcion');
   var ref2=document.getElementById('formulario');
   addEvent2(ref,'change',Opc,false); 
   addEvent2(ref2,'reset',Resetear,false);
       
 
 
    
}
function Resetear(){
 var opcioncantidad=document.getElementById('form');
 opcioncantidad.innerHTML =' ';
}
 
function Opc(){
 var ref2=document.getElementById('formulario');
 var opcion=document.getElementById('opcion').value;
  var div=document.getElementById('form');
  if(opcion=="nombre"){
div.innerHTML = '<input type=text id=dato placeholder="Nuevo Nombre" class="form-control" >';
addEvent2(ref2,'submit',enviarDatos2,false);}
if(opcion=="contrasena"){
div.innerHTML = '<input type=text id=dato placeholder="Nueva Contrasena" class="form-control">';
addEvent2(ref2,'submit',enviarDatos2,false);}
if(opcion=="telefono"){
div.innerHTML = '<input type=text id=dato placeholder="Nuevo Telefono" class="form-control">';
 addEvent2(ref2,'submit',enviarDatos2,false);
}
                       
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
  conexion2.open('POST','php/modificar.php', true);
  conexion2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion2.send(retornarDatos2());  
}
 
 
function retornarDatos2()
{
  var cad='';
   var dato=document.getElementById('dato').value;
   var opcion=document.getElementById('opcion').value;
     
 cad='dato='+encodeURIComponent(dato)+'&tipo='+encodeURIComponent(opcion);;
  return cad;
}
 
 
function procesarEventos2()
{
  
  var ref=document.getElementById('formulario');
   
  if(conexion2.readyState == 4){
 location.reload();
 ref.innerHTML = '<div class="alert alert-success alert-dismissable">'+conexion2.responseText+'<button type="button" id="cerrar2" class="close">&times</button></div>';
 
   
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