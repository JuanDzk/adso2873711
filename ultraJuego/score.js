const estilosPorScore = [
  { max: 40, nombre: "Nada", color: "#cccccc" }, 
  { max: 70, nombre: "Destructive", color: "#1b47d8" }, 
  { max: 100, nombre: "Chaotic", color: "#22c55e" }, 
  { max: 150, nombre: "Brutal", color: "#facc15" }, 
  { max: 200, nombre: "Anarchic", color: "#f97316" }, 
  { max: 250, nombre: "Supreme", color: "#f43f5e" }, 
  { max: 300, nombre: "Sadistic", color: "#f43f5e" }, 
  { max: 350, nombre: "SSShitstorm", color: "#f43f5e" }, 
  { max: Infinity, nombre: "ULTRAKILL", color: "#facc15 " }, 
];


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

    const estiloFinal = estilosPorScore.find((e) => score < e.max) || {
      nombre: "Desconocido",
      color: "#fff",
    };

    const puntajeFinalElement = document.getElementById("puntajeFinal");
    puntajeFinalElement.textContent = `PUNTAJE FINAL: ${score} — ESTILO: ${estiloFinal.nombre}`;
    puntajeFinalElement.style.color = estiloFinal.color;

    if (typeof musicaJuego !== "undefined") {
      musicaJuego.pause();
    }

    if (typeof musicaDeath !== "undefined") {
      musicaDeath.currentTime = 0;
      musicaDeath.playbackRate = 1.3;
      musicaDeath.play();
    }
  }
}

function reiniciarJuego() {
  // R variables
  tiempoRestante = tiempoMaximo;
  racha = 0;
  score = 0;

  // R UI
  barraTiempo.style.width = "100%";
  document.querySelector(".numer").textContent = "0";
  document.getElementById("rango-estilo").src = "image/style/S.png";

  // ocult Game Over
  document.getElementById("gameOverScreen").style.display = "none";

  // limp enemis
  document.querySelectorAll(".enemigo").forEach((e) => e.remove());

  // Reanudar time
  actualizarTiempo();
}
