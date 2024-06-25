# Desarrollo de un proyecto inicial de un ecommerce con Laravel

#### Objetivo:

El objetivo de este examen es evaluar las habilidades del candidato en la creación de un proyecto inicial de ecommerce utilizando Laravel, incluyendo el uso de controladores, modelos, vistas. El candidato recibirá una migración de base de datos y un seed de productos para el uso en el proyecto.

### Objetivo
Crea un proyecto de ecommerce que permita a los usuarios ver y gestionar los productos del sitio.

#### Instrucciones:

1. **Clona este Repositorio**

2. **Configuración Inicial:**
   - Configura el archivo `.env` para la conexión a la base de datos (sqlite).
   - Ejecuta las migraciones y los seeds utilizando los comandos `php artisan migrate --seed`.

3. **Componentes Específicos:**

##### A. Controladores
- Crea los controladores necesarios para el sitio.

##### B. Modelos
- Crea los modelos `Product` y `Images` (Esta tabla es tiene una relación polimórfica).

##### C. Vistas
- **Vista de productos:** Muestra un grid de todos los productos a 4 columnas. Cada producto debe de tener la imagen, nombre y precio.
- **Vista de carrito:** Muestra los productos agregados al carrito en una tabla, en la última fila debemos mostrar el total del carrito.

4. **Evaluación:**
  - El código debe funcionar correctamente conforme al objetivo.
  - El código debe ser legible.
  - El código debe estar bien estructurado y seguir las buenas prácticas de Laravel.

#### Entrega:
- Sube el código a un repositorio de GitHub y comparte el enlace.
- Proporciona un archivo README con instrucciones claras sobre cómo ejecutar el proyecto.

#### Recursos Proporcionados:

1. **Migraciones**
2. **Seeders de prueba**

### Puntos extras:
- **Documentación:** Incluye comentarios en el código para explicar tu lógica y decisiones.
- **Pruebas unitarias:** Incluye pruebas unitarias de tu código.
- **Usa Livewire:** Puedes usar un modal o un offcanvas para mostrar su contenido, debe poder incrementar, decrementar y eliminar productos.
- **Responsivo**


### Disclaimer

Este repositorio y su contenido están destinados exclusivamente para la evaluación en el proceso de entrevista de trabajo. **Está estrictamente prohibido compartir este repositorio, o cualquier parte del mismo, con personas ajenas al proceso de selección**, por cualquier medio (incluyendo, pero no limitado a, repositorios públicos en plataformas como GitHub, enlaces directos, copias físicas, correo electrónico, etc.).

Cualquier intento de compartir o distribuir el contenido de este repositorio con personas no involucradas en el proceso de selección resultará en la descalificación inmediata del proceso de entrevista y puede conllevar otras acciones según las políticas de la empresa.

Por favor, respeta estas normas y contribuye a mantener la integridad del proceso de selección.
