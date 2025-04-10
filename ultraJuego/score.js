let tiempoMaximo = 30;
let tiempoRestante = tiempoMaximo;
const barraTiempo = document.getElementById("barra-tiempo");

function actualizarTiempo() {
  tiempoRestante -= 0.1;

  if (tiempoRestante < 0) {
    tiempoRestante = 0;
  }

  const porcentaje = (tiempoRestante / tiempoMaximo) * 100;
  barraTiempo.style.width = `${porcentaje}%`;

  if (tiempoRestante <= 0) {
    clearInterval(window.timerInterval);
    document.getElementById("gameOverScreen").style.display = "flex";
  
    // Pausar música
    if (typeof musicaJuego !== "undefined") {
      musicaJuego.pause();
    }
  
    // Música game over
    const audioGameOver = new Audio("sound/gameover.mp3");
    audioGameOver.play();
  }
   else {
    setTimeout(actualizarTiempo, 100);
  }
}





