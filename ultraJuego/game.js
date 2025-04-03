document.addEventListener("DOMContentLoaded", function () {
    const areaJuego = document.querySelector(".area-game");
    
    // Lista de imágenes de enemigos
    const enemigos = ["image/enemy1.png", "image/enemy2.png", "image/enemy3.png"];
    
    function crearEnemigo() {
      // Crear un nuevo enemigo (imagen)
      let enemigo = document.createElement("img");
      enemigo.src = enemigos[Math.floor(Math.random() * enemigos.length)];
      enemigo.classList.add("enemigo"); // Para darle estilo en CSS
    
      // Generar posición aleatoria dentro del área de juego
      let maxX = areaJuego.clientWidth - 20; // Limite para que no salga del área
      let maxY = areaJuego.clientHeight - 20;
    
      let posX = Math.floor(Math.random() * maxX);
      let posY = Math.floor(Math.random() * maxY);
    
      enemigo.style.left = `${posX}px`;
      enemigo.style.top = `${posY}px`;
    
      // Agregar al área de juego
      areaJuego.appendChild(enemigo);
    
      // Eliminar el enemigo después de 2 segundos
      setTimeout(() => {
        enemigo.remove();
      }, 2000);
    }
    
    // Generar un enemigo cada 1.5 segundos
    setInterval(crearEnemigo, 1500);
  });


  console.log(`Enemigo generado en X: ${posX}, Y: ${posY}`);



  