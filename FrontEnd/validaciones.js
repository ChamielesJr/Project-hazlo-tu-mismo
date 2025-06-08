// Esperamos que el DOM cargue para asignar eventos
document.addEventListener('DOMContentLoaded', () => {
  // Formulario de inicio de sesión
  const loginForm = document.getElementById('form-login');
  if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const correo = document.getElementById('correo').value.trim();
      const contrasena = document.getElementById('contrasena').value.trim();

      if (!validarCorreo(correo)) {
        alert('Por favor ingresa un correo electrónico válido.');
        return;
      }

      if (contrasena === '') {
        alert('La contraseña no puede estar vacía.');
        return;
      }

      // Aquí puedes enviar el formulario si todo está correcto
      // loginForm.submit(); // ← Descomenta para activar
      alert('Inicio de sesión exitoso (simulado)');
    });
  }

  // Formulario de registro
  const registroForm = document.getElementById('form-registro');
  if (registroForm) {
    registroForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const nombre = document.getElementById('nombre').value.trim();
      const apellido = document.getElementById('apellido').value.trim();
      const cedula = document.getElementById('cedula').value.trim();
      const telefono = document.getElementById('telefono').value.trim();
      const correo = document.getElementById('correo').value.trim();
      const contrasena = document.getElementById('contrasena').value.trim();

      if (!soloLetras(nombre)) {
        alert('El nombre solo debe contener letras.');
        return;
      }

      if (!soloLetras(apellido)) {
        alert('El apellido solo debe contener letras.');
        return;
      }

      if (!soloNumeros(cedula) || cedula.length !== 10) {
        alert('La cédula debe contener solo números y tener 10 dígitos.');
        return;
      }

      if (!soloNumeros(telefono) || telefono.length !== 10) {
        alert('El teléfono debe contener solo números y tener 10 dígitos.');
        return;
      }

      if (!validarCorreo(correo)) {
        alert('Por favor ingresa un correo electrónico válido.');
        return;
      }

      if (contrasena === '') {
        alert('La contraseña no puede estar vacía.');
        return;
      }

      // Aquí puedes enviar el formulario si todo está correcto
      // registroForm.submit(); // ← Descomenta para activar
      alert('Registro exitoso (simulado)');
    });
  }
});

// Función para validar correo electrónico
function validarCorreo(correo) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(correo);
}

// Función para validar que solo se ingresen letras
function soloLetras(texto) {
  const regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
  return regex.test(texto);
}

// Función para validar que solo se ingresen números
function soloNumeros(numero) {
  const regex = /^[0-9]+$/;
  return regex.test(numero);
}
