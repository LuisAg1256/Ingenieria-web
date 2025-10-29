# 🧭 UML (Unified Modeling Language)

## 📘 ¿Qué es UML?

**UML (Unified Modeling Language)** es un **lenguaje de modelado estándar** utilizado en ingeniería de software para **visualizar, especificar, construir y documentar** los artefactos de un sistema.  
No es un lenguaje de programación, sino una **herramienta visual** que ayuda a diseñar y comprender la estructura y comportamiento de los sistemas orientados a objetos.

Fue desarrollado originalmente por **Grady Booch**, **Ivar Jacobson** y **James Rumbaugh**, conocidos como **“Los tres amigos”**, y estandarizado por el **Object Management Group (OMG)** en 1997.

---

## 🕰️ Historia de UML

| Año | Evento |
|-----|---------|
| **1980s** | Surgen múltiples metodologías de modelado orientadas a objetos (Booch, OMT, OOSE). |
| **1994** | Booch, Rumbaugh y Jacobson unifican sus métodos para crear un lenguaje común. |
| **1997** | UML 1.0 es adoptado oficialmente por el OMG como estándar. |
| **2005** | Se lanza **UML 2.0**, ampliando el número de diagramas y mejorando la semántica. |
| **Actualidad** | UML sigue siendo una herramienta esencial para análisis, diseño y documentación de software. |

---

## 🧩 Objetivos de UML

- Proporcionar un **lenguaje visual estándar** para el modelado de sistemas.  
- Mejorar la **comunicación entre analistas, diseñadores y programadores**.  
- Facilitar la **documentación** del sistema.  
- Permitir la **abstracción** de los componentes y sus relaciones.  
- Servir de base para el **desarrollo orientado a objetos** y metodologías ágiles.

---

## 🧱 Tipos de Modelos en UML

UML organiza sus diagramas en **tres grandes grupos**:  
**Modelos estructurales, de comportamiento e interacciones.**

---

### 🏗️ 1. Modelos Estructurales

Describen **la parte estática** del sistema: sus clases, objetos y relaciones.

| Diagrama | Descripción |
|-----------|-------------|
| **Diagrama de Clases** | Muestra las clases, sus atributos, métodos y relaciones. |
| **Diagrama de Objetos** | Representa instancias concretas de clases en un momento determinado. |
| **Diagrama de Componentes** | Muestra cómo se dividen los módulos o componentes del sistema. |
| **Diagrama de Despliegue** | Representa la distribución física de los componentes en hardware. |
| **Diagrama de Paquetes** | Organiza el modelo en grupos o módulos lógicos. |

---

### ⚙️ 2. Modelos de Comportamiento

Describen **cómo se comporta el sistema** y cómo responde ante los eventos.

| Diagrama | Descripción |
|-----------|-------------|
| **Diagrama de Casos de Uso** | Muestra las interacciones entre los actores (usuarios o sistemas) y el sistema. |
| **Diagrama de Actividades** | Representa el flujo de trabajo o de actividades dentro del sistema. |
| **Diagrama de Estado** | Muestra los distintos estados de un objeto y las transiciones entre ellos. |

---

### 🔁 3. Modelos de Interacción

Detallan **cómo los objetos colaboran** entre sí para cumplir una función.

| Diagrama | Descripción |
|-----------|-------------|
| **Diagrama de Secuencia** | Muestra el intercambio de mensajes entre objetos en orden temporal. |
| **Diagrama de Colaboración (o Comunicación)** | Representa la interacción entre objetos y su relación estructural. |
| **Diagrama de Tiempos** | Detalla los cambios de estado y mensajes a lo largo del tiempo. |
| **Diagrama de Interacción General** | Resume el flujo de una interacción compleja, integrando varios diagramas. |

---

## 💡 Ejemplo simple: Diagrama de Clases (texto representativo)

```text
+-------------------+
|     Persona       |
+-------------------+
| - nombre: String  |
| - edad: Int       |
+-------------------+
| + saludar()       |
+-------------------+
         ^
         |
+-------------------+
|     Estudiante    |
+-------------------+
| - matricula: Int  |
+-------------------+
| + estudiar()      |
+-------------------+

# 🌐 HTML5

## 📘 ¿Qué es HTML5?

**HTML5 (HyperText Markup Language versión 5)** es la quinta y más reciente versión del lenguaje estándar para la creación y estructuración de páginas web y aplicaciones web.  
Fue desarrollado por el **W3C (World Wide Web Consortium)** y el **WHATWG (Web Hypertext Application Technology Working Group)** con el objetivo de mejorar la interoperabilidad, semántica y funcionalidad del contenido web.

---

## 🕰️ Historia

| Año | Evento Importante |
|-----|--------------------|
| **1990** | Tim Berners-Lee crea el primer HTML para compartir documentos científicos. |
| **1995** | Se publica **HTML 2.0**, la primera versión estandarizada. |
| **1997–1999** | Surgen **HTML 3.2** y **HTML 4.01**, introduciendo tablas, hojas de estilo y formularios. |
| **2004** | Nace el **WHATWG**, impulsado por Apple, Mozilla y Opera, para modernizar el HTML. |
| **2008** | Se presenta el **borrador inicial de HTML5**. |
| **2014** | **HTML5 se convierte en una recomendación oficial del W3C.** |
| **Actualidad** | HTML5 sigue evolucionando, integrando APIs modernas y soporte multimedia. |

---

## 🧩 Características Principales

- **Etiquetas semánticas nuevas:**  
  `<header>`, `<footer>`, `<article>`, `<section>`, `<nav>`, etc.  
  → Mejoran la estructura y accesibilidad del contenido.

- **Soporte multimedia nativo:**  
  Etiquetas `<audio>` y `<video>` sin necesidad de plugins externos como Flash.

- **Gráficos y animaciones:**  
  Uso de `<canvas>` y soporte para **SVG (Scalable Vector Graphics)**.

- **Almacenamiento local:**  
  APIs como **localStorage** y **sessionStorage** para guardar datos en el navegador.

- **Compatibilidad con dispositivos móviles:**  
  Diseño *responsive* y soporte para geolocalización, sensores, etc.

- **Integración con JavaScript y APIs modernas:**  
  APIs para arrastrar y soltar (Drag & Drop), notificaciones, WebSockets, Web Workers, etc.

---

## 💻 Ejemplo básico de documento HTML5

```html
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo HTML5</title>
</head>
<body>
  <header>
    <h1>Bienvenido a mi página HTML5</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </nav>

  <section>
    <article>
      <h2>Artículo Principal</h2>
      <p>Este es un ejemplo de estructura semántica en HTML5.</p>
    </article>
  </section>

  <footer>
    <p>© 2025 Mi Sitio Web</p>
  </footer>
</body>
</html>

