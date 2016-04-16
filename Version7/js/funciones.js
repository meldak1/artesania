addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var ref=document.getElementById('formulariocompra');
  addEvent(ref,'submit',enviarDatos,false);
  addEvent(ref,'reset',resetear,false);
   var ref2=document.getElementById('items');
   addEvent(ref2,'change',OpCantidad,false);
   
}

function resetear(){
var opcioncantidad=document.getElementById('opcioncantidad');
opcioncantidad.innerHTML = '';
}

function OpCantidad(){
var producto=document.getElementById('items').value;
 var opcioncantidad=document.getElementById('opcioncantidad');
if(producto=='Aceite'){
opcioncantidad.innerHTML = '<div class="btn-group"><button id="unidad" class="btn btn-default">Unidad</button><button id="caja" class="btn btn-default">Caja</button></div>';
var unidad=document.getElementById('unidad'); addEvent(unidad,'click',OpUnidad,false);
  var caja=document.getElementById('caja');addEvent(caja,'click',OpCaja,false);
}else{
opcioncantidad.innerHTML = '<div class="btn-group"><button id="kilo" class="btn btn-default">Kilogramos</button><button id="bulto" class="btn btn-default">Bulto</button></div>';
var kilo=document.getElementById('kilo'); addEvent(kilo,'click',OpKilo,false);
  var bulto=document.getElementById('bulto');addEvent(bulto,'click',OpBulto,false);
         }                      
}

function OpUnidad(){
var opcioncantidad=document.getElementById('opcioncantidad');
opcioncantidad.innerHTML ='<input id="cant" name="pieza" class="form-control" type="number" min="0" max="49" placeholder="Seleccione la cantidad por pieza"></input>';
}
function OpCaja(){
var opcioncantidad=document.getElementById('opcioncantidad');
opcioncantidad.innerHTML = '<input id="cant" name="caja" class="form-control" type="number" min="0" max="10" placeholder="Seleccione la cantidad de cajas"></input>';
}

function OpKilo(){
var opcioncantidad=document.getElementById('opcioncantidad');
opcioncantidad.innerHTML = '<input id="cant" name="kilogramo" class="form-control" type="number" min="0" max="24" placeholder="Seleccione la cantidad por Kilogramo(kg)"></input>';
}
function OpBulto(){
var opcioncantidad=document.getElementById('opcioncantidad');
opcioncantidad.innerHTML = '<input id="cant" name="bulto" class="form-control" type="number" min="0" max="10" placeholder="Seleccione la cantidad de bultos"></input>';
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
  conexion1.open('POST','compra.php', true);
  conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  conexion1.send(retornarDatos());  
}


function retornarDatos()
{
  var cad='';
   var producto=document.getElementById('items').value;
    var cantidad=document.getElementById('cant').value;
     var compra=document.getElementById('cant').name;
  cad='nombre='+encodeURIComponent(producto)+'&cantidad='+encodeURIComponent(cantidad)+'&tipocompra='+encodeURIComponent(compra);
  return cad;
}


function procesarEventos()
{
 var ref=document.getElementById('formulariocompra');
  if(conexion1.readyState == 4){
  alert(conexion1.responseText);
  ref.reset();
  }
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