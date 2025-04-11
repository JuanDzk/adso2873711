document.addEventListener("DOMContentLoaded", function () {
  // interf
  const interfaz1 = document.getElementById("interfaz1");
  const interfaz2 = document.getElementById("interfaz2");
  const interfaz3 = document.getElementById("interfaz3");

  // boton
  const btnTutorial = document.querySelector(".botones .boton:first-child");
  const btnJugar = document.querySelector(".botones .boton:last-child");
  const btnVolver1 = document.querySelector(".boton-v");
  const btnVolver2 = document.querySelector(".boton-v2");

  // audios
  const musicaMenu = new Audio("sound/menu.mp3");
  const musicaJuego = new Audio("sound/game.mp3");

  musicaMenu.loop = true;
  musicaJuego.loop = true;

  // Repr
  musicaMenu.play();

  // cambiar int
  function mostrarInterfaz(interfazMostrar) {
    interfaz1.style.display = "none";
    interfaz2.style.display = "none";
    interfaz3.style.display = "none";
    interfazMostrar.style.display = "block";
  }

  // Event boton
  btnTutorial.addEventListener("click", function () {
    mostrarInterfaz(interfaz2);
  });



  btnVolver1.addEventListener("click", function () {
    mostrarInterfaz(interfaz1);
  });

  btnVolver2.addEventListener("click", function () {
    mostrarInterfaz(interfaz1);
    musicaJuego.pause();
    musicaMenu.play();
  });

  btnJugar.addEventListener("click", function () {
    mostrarInterfaz(interfaz3);
    musicaMenu.pause();
    musicaJuego.currentTime = 0;
    musicaJuego.play();
  
    // Reiniciar estado
    if (typeof reiniciarJuego === "function") {
      reiniciarJuego(); 
    }
  
    // Iniciar tiempo
    if (window.timerInterval) clearInterval(window.timerInterval);
    window.timerInterval = setInterval(actualizarTiempo, 100);
  });
  
  


  mostrarInterfaz(interfaz1);



  // Reinicio
  const btnReiniciar = document.getElementById("reiniciarJuego");
  const pantallaGameOver = document.getElementById("gameOverScreen");
  const barraTiempo = document.getElementById("barra-tiempo");
  const estiloImagen = document.getElementById("rango-estilo");
  const scoreElement = document.querySelector(".numer");
  const audioGameOver = new Audio("sound/gameover.mp3");



  btnReiniciar.addEventListener("click", function () {
    // Reinicia el juego visual y variables
    reiniciarJuego();
  
    // Cambiar a la interfaz inicial
    mostrarInterfaz(interfaz1);
  
    // Música
    musicaJuego.pause();
    musicaMenu.currentTime = 0;
    musicaMenu.play();
  });
  

});
