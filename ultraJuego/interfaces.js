document.addEventListener("DOMContentLoaded", function () {
    // Obtener los elementos de las interfaces
    const interfaz1 = document.getElementById("interfaz1");
    const interfaz2 = document.getElementById("interfaz2");
    const interfaz3 = document.getElementById("interfaz3");
  
    // Obtener los botones
    const btnTutorial = document.querySelector(".botones .boton:first-child");
    const btnJugar = document.querySelector(".botones .boton:last-child");
    const btnVolver1 = document.querySelector(".boton-v");
    const btnVolver2 = document.querySelector(".boton-v2");
  
    // Obtener los audios
    const musicaMenu = new Audio("sound/menu.mp3");
    const musicaJuego = new Audio("sound/game.mp3");
  
    musicaMenu.loop = true;
    musicaJuego.loop = true;
  
    // Reproducir la música del menú al inicio
    musicaMenu.play();
  
    // Función para cambiar la interfaz
    function mostrarInterfaz(interfazMostrar) {
      interfaz1.style.display = "none";
      interfaz2.style.display = "none";
      interfaz3.style.display = "none";
      interfazMostrar.style.display = "block";
    }
  
    // Eventos de los botones
    btnTutorial.addEventListener("click", function () {
      mostrarInterfaz(interfaz2);
    });
  
    btnJugar.addEventListener("click", function () {
      mostrarInterfaz(interfaz3);
      musicaMenu.pause();
      musicaJuego.play();
    });
  
    btnVolver1.addEventListener("click", function () {
      mostrarInterfaz(interfaz1);
    });
  
    btnVolver2.addEventListener("click", function () {
      mostrarInterfaz(interfaz1);
      musicaJuego.pause();
      musicaMenu.play();
    });
  
    // Al inicio, mostrar solo la interfaz de inicio
    mostrarInterfaz(interfaz1);
  });
  