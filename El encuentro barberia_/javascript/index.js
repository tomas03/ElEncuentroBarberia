var imagen = document.querySelector('.anim');

    imagen.addEventListener('mouseover', function() {
      this.style.transform = 'scale(1.2)';
    });

    imagen.addEventListener('mouseout', function() {
      this.style.transform = 'scale(1)';
    });


    function cambiarColor() {
      var boton = document.querySelector('.boton');
      boton.style.backgroundColor = 'red';
    }

    function restablecerColor() {
      var boton = document.querySelector('.boton');
      boton.style.backgroundColor = '';
    }

    var boton = document.querySelector('.boton');
    boton.addEventListener('mouseover', cambiarColor);
    boton.addEventListener('mouseout', restablecerColor);

    function miFuncion() {
      alert('¡Hiciste clic en el botón!');
    }