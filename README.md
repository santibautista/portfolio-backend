# 🛠️ Portfolio API - Backend (Laravel 11)

Esta es la API RESTful que gestiona la lógica de servidor para mi portfolio personal. Su función principal es el procesamiento de mensajes, validación de datos y la integración con servicios de mensajería externa.

---

## 💻 Stack Tecnológico

* **Framework:** **Laravel 11**
* **Lenguaje:** **PHP 8.2+**
* **Arquitectura:** API REST
* **Servicios:** SMTP (Gmail) para notificaciones en tiempo real
* **Entorno de Desarrollo:** WSL2 (Ubuntu) con soporte para Laravel Sail / Docker

---

## ✨ Funcionalidades Técnicas

* **Endpoint de Contacto:** Procesa peticiones POST desde el frontend en React.
* **Validación de Datos:** Uso de `FormRequest` para asegurar que el nombre, email y mensaje cumplan con los formatos correctos.
* **Envío de Mails:** Integración nativa con los servicios de Google mediante contraseñas de aplicación seguras.
* **CORS Configurado:** Permite peticiones seguras desde el dominio del frontend.

---

## 📦 Instalación y Configuración Local
Sigue estos pasos para levantar el entorno de la API en tu máquina (WSL2):

### 1. Clonar el repositorio
Bash
git clone https://github.com/santibautista/portfolio-backend.git
cd portfolio-backend

### 2. Instalar dependencias
Bash
composer install

### 3. Configurar variables de entorno
Copia el archivo de ejemplo y genera la clave de la aplicación:
Bash
cp .env.example .env
php artisan key:generate

###  4. Configurar el SMTP (Mail)
Edita el archivo .env con tus credenciales de Google:

Fragmento de código
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=tu-email@gmail.com
MAIL_PASSWORD=tu-codigo-de-16-letras
MAIL_ENCRYPTION=ssl

###  5. Ejecutar el servidor
Bash
php artisan serve

👤 Autor Desarrollado con precisión por Santi - Full Stack Developer.