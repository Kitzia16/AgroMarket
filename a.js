document.getElementById("registroForm").addEventListener("submit", function(e) {
    e.preventDefault();
   
  // Capturar los valores ingresados en el formulario
  var nombre = document.getElementById("nombre").value;
  var email = document.getElementById("email").value;
  var contrasena = document.getElementById("contrasena").value;
 // var cantidad = document.getElementById("cantidad").value;
  
  // Validar los datos del formulario
  
  // Crear un objeto con los datos de la venta
  var usu = {
    nombre: nombre,
    email: email,
    contrasena: contrasena,
    //cantidad: cantidad
  };
  // Enviar los datos del formulario a través de una solicitud AJAX
  fetch("guardar_venta.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(usu)
  })
  .then(response => response.json())
  .then(data => {
    // Actualizar la tabla de ventas con los nuevos registros
    actualizarTablaVentas(data);
    
    // Limpiar el formulario
    document.getElementById("registroForm").reset();
  })
  .catch(error => {
    console.error("Error al guardar la venta:", error);
  });
});


