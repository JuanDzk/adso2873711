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

    if (typeof musicaJuego !== "undefined") {
      musicaJuego.pause();
    }

    const audioGameOver = new Audio("sound/gameover.mp3");
    audioGameOver.play();
  }
}


function reiniciarJuego() {
  // R variables
  tiempoRestante = tiempoMaximo;
  racha = 0;
  score = 0;

  // reiniciar UI
  barraTiempo.style.width = "100%";
  document.querySelector(".numer").textContent = "0";
  document.getElementById("rango-estilo").src = "image/style/S.png";

  // ocultar Game Over
  document.getElementById("gameOverScreen").style.display = "none";

  // limp enemigos 
  document.querySelectorAll(".enemigo").forEach(e => e.remove());

  // Reanudar time
  actualizarTiempo();
}






