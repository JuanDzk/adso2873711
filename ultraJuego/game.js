document.addEventListener("DOMContentLoaded", function () {
  const areaJuego = document.querySelector(".area-game");
  const scoreElement = document.querySelector(".numer");
  const estiloImagen = document.getElementById("rango-estilo");
  const arma = document.querySelector(".arma");

  window.score = 0;
  window.racha = 0;
  window.tiempoRestante = window.tiempoRestante || 30;

  const enemigos = [
    "image/enemis/Ben.png",
    "image/enemis/cerberus.png",
    "image/enemis/earthmover.png",
    "image/enemis/flayer.png",
    "image/enemis/gabriel.png",
    "image/enemis/guideon.png",
    "image/enemis/gutterman.png",
    "image/enemis/guttertank.png",
    "image/enemis/jaula.png",
    "image/enemis/Maniqui.png",
    "image/enemis/mauricio.png",
    "image/enemis/minos.png",
    "image/enemis/monataur.png",
    "image/enemis/morde.png",
    "image/enemis/shin.png",
    "image/enemis/sisyphus.png",
    "image/enemis/soldado.png",
    "image/enemis/swordsmachine.png",
    "image/enemis/v2.png"
  ];

  function crearEnemigo() {
    let enemigo = document.createElement("img");
    enemigo.src = enemigos[Math.floor(Math.random() * enemigos.length)];
    enemigo.classList.add("enemigo");

    let maxX = areaJuego.clientWidth - 20;
    let maxY = areaJuego.clientHeight - 20;
    let posX = Math.floor(Math.random() * maxX);
    let posY = Math.floor(Math.random() * maxY);

    enemigo.style.left = `${posX}px`;
    enemigo.style.top = `${posY}px`;
    areaJuego.appendChild(enemigo);

    enemigo.addEventListener("click", function () {
      enemigo.remove();
      window.score += 10;
      window.racha += 1;
      window.tiempoRestante += 0.5;

      if (window.racha >= 3) {
        window.tiempoRestante += 2;
        window.racha = 0;
      }

      scoreElement.textContent = window.score;
      actualizarEstilo();
    });

    setTimeout(() => {
      if (document.body.contains(enemigo)) {
        enemigo.remove();
        window.racha = 0; // Pierde la racha si no lo mata
      }
    }, 2000);
  }

  function actualizarEstilo() {
    if (window.score < 40) {
      estiloImagen.src = "image/style/destructive.png";
    } else if (window.score < 70) {
      estiloImagen.src = "image/style/chaotic.png";
    } else if (window.score < 100) {
      estiloImagen.src = "image/style/brutal.png";
    } else if (window.score < 150) {
      estiloImagen.src = "image/style/anarchic.png";
    } else if (window.score < 200) {
      estiloImagen.src = "image/style/supreme.png";
    } else if (window.score < 250) {
      estiloImagen.src = "image/style/sadistic.png";
    } else if (window.score < 300) {
      estiloImagen.src = "image/style/ssshitstorm.png";
    } else if (window.score < 350) {
      estiloImagen.src = "image/style/ultrakill.png";
    } else {
      estiloImagen.src = "image/1fil.png";
    }
  }

  document.addEventListener("mousemove", function (event) {
    let x = event.clientX;
    let y = event.clientY;
    let armaRect = arma.getBoundingClientRect();
    let armaX = armaRect.left + armaRect.width / 2;
    let armaY = armaRect.top + armaRect.height / 2;
    let angle = Math.atan2(y - armaY, x - armaX) * (180 / Math.PI);

    arma.style.transform = `rotate(${angle + 135}deg)`;
  });

  setInterval(crearEnemigo, 1500);
});
