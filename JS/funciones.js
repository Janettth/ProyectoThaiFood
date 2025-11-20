const contener_info_platillo = document.querySelector(".contenedor_info_platillo");
const seccion_comentar = document.querySelector(".seccion_comentar");
const contenedor_platillos = document.querySelector(".contenedor_platillos");
const overlay = document.getElementById("overlay");



let platilloSeleccionado = null; // Guarda el ID del platillo actual

function cerrarInfo(){
  contener_info_platillo.style.display = "none";
  overlay.style.display = "none";
  document.body.classList.remove("bloqueado");
}


function MostrarInfo(idPlatillo) {

  
  contener_info_platillo.style.display = "grid";
  overlay.style.display = "block";
  document.body.classList.add("bloqueado");

  platilloSeleccionado = idPlatillo; // Guardamos el ID
   fetch("PHP/obtenerPlatillo.php?id=" + idPlatillo)
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert(data.error);
        return;
      }

      // Actualizar nombre y descripción
      document.getElementById("nombre_platillo").textContent = data.Nombre;
      document.getElementById("info_platillo").innerHTML = `
        <p><strong>Descripción  <br> </strong> ${data.Descripcion ?? ""}</p> <br>
        <p><strong>Ingredientes <br> </strong> ${data.Ingredientes}</p> <br>
      `;

      // Mostrar la imagen (usa una por defecto si no hay)
      const rutaImagen = data.Imagen && data.Imagen !== "" 
        ? data.Imagen 
        : "assets/platillo_default.jpg";
      document.getElementById("imagen_platillo").src = rutaImagen;

      // Cargar comentarios del platillo
      cargarComentarios(idPlatillo);
    })
    .catch(error => console.error("Error:", error));

}

function HacerComentario(estaLogueado) {
  const seccion = document.querySelector(".seccion_comentar");
  if (!estaLogueado) {
    alert("Debes iniciar sesión para comentar.");
    //window.location.href = "InicioSesion.html";
  } else {
    
    seccion.style.display = (seccion.style.display === "block") ? "none" : "block";
  }
}

function EnviarComentario() {
  const texto = document.getElementById("comentario_texto").value.trim();

  if (!texto) {
    alert("Por favor escribe un comentario.");
    return;
  }

  fetch("PHP/guardarComentario.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `texto=${encodeURIComponent(texto)}&platillo_id=${platilloSeleccionado}`
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert(data.success);
        document.getElementById("comentario_texto").value = "";
        cargarComentarios(platilloSeleccionado); // Recarga los comentarios
      } else {
        alert(data.error);
      }
    })
    .catch(error => console.error("Error:", error));
}


function cargarComentarios(idPlatillo) {
  fetch(`PHP/obtenerComentarios.php?id=${idPlatillo}`)
    .then(response => response.text())
    .then(html => {
      document.getElementById("comentarios").innerHTML = html;
    });
}


