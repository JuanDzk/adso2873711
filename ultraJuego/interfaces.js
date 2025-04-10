document.addEventListener("DOMContentLoaded", function () {
  // interfaces
  const interfaz1 = document.getElementById("interfaz1");
  const interfaz2 = document.getElementById("interfaz2");
  const interfaz3 = document.getElementById("interfaz3");

  // botones
  const btnTutorial = document.querySelector(".botones .boton:first-child");
  const btnJugar = document.querySelector(".botones .boton:last-child");
  const btnVolver1 = document.querySelector(".boton-v");
  const btnVolver2 = document.querySelector(".boton-v2");

  // audios
  const musicaMenu = new Audio("sound/menu.mp3");
  const musicaJuego = new Audio("sound/game.mp3");

  musicaMenu.loop = true;
  musicaJuego.loop = true;

  // Reproducir
  musicaMenu.play();

  // cambiar interfaz
  function mostrarInterfaz(interfazMostrar) {
    interfaz1.style.display = "none";
    interfaz2.style.display = "none";
    interfaz3.style.display = "none";
    interfazMostrar.style.display = "block";
  }

  // Eventos botones
  btnTutorial.addEventListener("click", function () {
    mostrarInterfaz(interfaz2);
  });

  btnJugar.addEventListener("click", function () {
    mostrarInterfaz(interfaz3);
    musicaMenu.pause();
    musicaJuego.currentTime = 0;
    musicaJuego.play();

    // Iniciar tiempo
    if (window.timerInterval) clearInterval(window.timerInterval);
    window.timerInterval = setInterval(actualizarTiempo, 100);
  });


  btnVolver1.addEventListener("click", function () {
    mostrarInterfaz(interfaz1);
  });

  btnVolver2.addEventListener("click", function () {
    mostrarInterfaz(interfaz1);
    musicaJuego.pause();
    musicaMenu.play();
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
    document.querySelectorAll(".enemigo").forEach(e => e.remove());
    


    // Game Over
    pantallaGameOver.style.display = "none";

    // reiniciar variables
    window.tiempoRestante = 30;
    window.racha = 0;
    window.score = 0;

    // reiniciar UI
    barraTiempo.style.width = "100%";
    estiloImagen.src = "image/style/S.png";
    scoreElement.textContent = "0";


    // interfaz 1
    mostrarInterfaz(interfaz1);

    // Música
    musicaJuego.pause();
    musicaMenu.currentTime = 0;
    musicaMenu.play();
    audioGameOver.pause();
    audioGameOver.currentTime = 0;
  });

});
