  var informacionVisible1 = false;
  var texto1 = "<h2>High Fade con Crop</h2><p>No hace falta esperar al finde para quedar bien, sino miralo a Gonza. No anda en ascensor pero se va pa arriba con ese High Fade con crop</p>"
function mostrar1() {
  var informacionDiv = document.getElementById("info1");
  
  if (informacionVisible1) {
    informacionDiv.innerHTML = "";
    informacionVisible1 = false;
  } else {
    informacionDiv.innerHTML = texto1;
    informacionVisible1 = true;
  }
}

var informacionVisible2 = false;
var texto2 ="<h2>Pompadour clasico</h2><p>Los 80's siguen intactos en el templo, refrescamos un poquito la epoca y que mejor manera de hacerlo que con este pompadour clasico</p>";
function mostrar2() {
  var informacionDiv = document.getElementById("info2");
  
  if (informacionVisible2) {
    informacionDiv.innerHTML = "";
    informacionVisible2 = false;
  } else {
    informacionDiv.innerHTML = texto2;
    informacionVisible2 = true;
  }
}

var informacionVisible3 = false;
var texto3 ="<h2>Mid Fade</h2><p>El codito de la semana ya está entre nosotros y con el tambien vino nuestro bro listo para romperla con ese Mid Fade con toda la onda</p>";
function mostrar3() {
  var informacionDiv = document.getElementById("info3");
  
  if (informacionVisible3) {
    informacionDiv.innerHTML = "";
    informacionVisible3 = false;
  } else {
    informacionDiv.innerHTML = texto3;
    informacionVisible3 = true;
  }
}

var informacionVisible4 = false;
var texto4 ="<h2>French crop pesado con fade alto</h2><p>Combinando estilos, un french crop pesado en la parte superior acompañado con un fade alto comprimido en los laterales que combina excelente con el outfit full rose</p>";
function mostrar4() {
  var informacionDiv = document.getElementById("info4");
  
  if (informacionVisible4) {
    informacionDiv.innerHTML = "";
    informacionVisible4 = false;
  } else {
    informacionDiv.innerHTML = texto4;
    informacionVisible4 = true;
  }
}

var informacionVisible5 = false;
var texto5 ="<h2>Encuentro barberia</h2><p>Mantene el pelo lindo y la barba corta con El Encuentro barberia</p>";
function mostrar5() {
  var informacionDiv = document.getElementById("info5");
  
  if (informacionVisible5) {
    informacionDiv.innerHTML = "";
    informacionVisible5 = false;
  } else {
    informacionDiv.innerHTML = texto5;
    informacionVisible5 = true;
  }
}
  
var informacionVisible6 = false;
var texto6 ="<h2>Ultimo trabajo de la semana</h2><p>Espero que esten pasando un hermoso feriado, Gracias a todos por su apoyo y sus buenas vibras les dejamos nuestro ultimo trabajito cerrando la semana.</p>";
function mostrar6() {
  var informacionDiv = document.getElementById("info6");
  
  if (informacionVisible6) {
    informacionDiv.innerHTML = " ";
    informacionVisible6 = false;
  } else {
    informacionDiv.innerHTML = texto6;
    informacionVisible6 = true;
  }
}
function imagen(){
        alert("¡no me toque!");
}