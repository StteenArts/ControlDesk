<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://laravel.com/img/logomark.min.svg" width="120" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">
 Device Ticket Management API
</h1>

<p align="center">
API REST desarrollada con Laravel para la gestión de tickets, asignación de dispositivos e incidentes técnicos dentro de una organización.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8%2B-blue">
  <img src="https://img.shields.io/badge/Laravel-12-red">
  <img src="https://img.shields.io/badge/SQL%20Server-Database-success">
  <img src="https://img.shields.io/badge/Docker-Containerized-blue">
  <img src="https://img.shields.io/badge/Sentry-Monitoring-purple">
  <img src="https://img.shields.io/badge/Discord-Webhooks-5865F2">
</p>

---

# 📌 Tabla de Contenido

- [📖 Descripción](#-descripción)
- [🎯 Objetivo](#-objetivo)
- [🛠 Tecnologías](#-tecnologías)
- [🏗 Arquitectura](#-arquitectura)
- [📂 Estructura del Proyecto](#-estructura-del-proyecto)
- [⚙ Instalación](#-instalación)
- [🐳 Docker](#-docker)
- [🔐 Variables de Entorno](#-variables-de-entorno)
- [🚀 Endpoints](#-endpoints)
- [📦 Responses JSON](#-responses-json)
- [🛡 Rate Limiting](#-rate-limiting)
- [📡 Discord Webhooks](#-discord-webhooks)
- [📊 Sentry Monitoring](#-sentry-monitoring)
- [🧪 Testing](#-testing)
- [📮 Colección Postman](#-colección-postman)
- [📷 Evidencias](#-evidencias)
- [👨‍💻 Autor](#-autor)

---

# 📖 Descripción

Esta API REST fue desarrollada como solución para la administración de incidencias técnicas y control de dispositivos tecnológicos dentro de una organización.

El sistema permite:

- Gestión de tickets de soporte
- Asignación de dispositivos
- Control de incidencias
- Historial de actividades
- Monitoreo de errores
- Alertas automáticas mediante Discord
- Observabilidad usando Sentry

---

# 🎯 Objetivo

Implementar una API backend robusta utilizando Laravel y SQL Server aplicando buenas prácticas de desarrollo como:

- Arquitectura limpia
- Manejo estructurado de errores
- Responses JSON estandarizados
- Protección mediante Rate Limiting
- Monitoreo y observabilidad
- Integración con servicios externos
- Contenerización usando Docker

---

# 🛠 Tecnologías

| Tecnología | Uso |
|---|---|
| PHP 8+ | Lenguaje backend |
| Laravel | Framework principal |
| SQL Server | Base de datos |
| Docker | Contenerización |
| Laravel Sanctum | Autenticación |
| Sentry | Monitoreo de errores |
| Discord Webhooks | Alertas automáticas |
| Postman | Testing API |

---

# 🏗 Arquitectura

El proyecto sigue una arquitectura organizada basada en:

- Controllers
- Services
- Requests
- Models
- Middleware
- Migrations
- Seeders

## Principios aplicados

✅ Separación de responsabilidades  
✅ Reutilización de código  
✅ Manejo centralizado de errores  
✅ Código desacoplado  
✅ Escalabilidad y mantenibilidad

---

# 📂 Estructura del Proyecto

```bash
app/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│   └── Requests/
│
├── Models/
│
├── Services/
│
├── Exceptions/
│
├── Notifications/
│
database/
├── migrations/
├── seeders/
│
routes/
├── api.php
│
docker/
│
tests/
```
-------------------------------------------------------
# ⚙ Instalación

- 1️⃣ Clonar repositorio
```bash
git clone https://github.com/usuario/device-ticket-api.git
```

2️⃣ Ingresar al proyecto
```bash
cd device-ticket-api
```

3️⃣ Copiar variables de entorno
```bash
cp .env.example .env
```

4️⃣ Instalar dependencias

```bash
composer install
```

5️⃣ Generar key
```bash
php artisan key:generate
```

-------------------------------------------------------
# 🐳 Docker

- Levantar contenedores

```bash
docker-compose up -d --build
```

- Ejecutar migraciones
```bash
docker exec -it app php artisan migrate --seed
```

- Ver logs
```bash
docker logs -f app
```

-----------------------------------------------------------
# 🔐 Variables de Entorno

```bash
APP_NAME=DeviceTicketAPI
APP_ENV=local
APP_KEY=
APP_DEBUG=true

DB_CONNECTION=sqlsrv
DB_HOST=sqlserver
DB_PORT=1433
DB_DATABASE=device_management
DB_USERNAME=sa
DB_PASSWORD=Password123

DISCORD_WEBHOOK_URL=https://discord.com/api/webhooks/...

SENTRY_LARAVEL_DSN=https://xxxxx@sentry.io/xxxxx

SANCTUM_STATEFUL_DOMAINS=localhost
```
---------------------------------------------------------------
# Endpoints

**Método** 	**Endpoint** 	        **Descripción**

POST 	    /api/register 	        Registrar usuario
POST 	    /api/login 	            Login
GET 	    /api/tickets 	        Obtener tickets
GET 	    /api/tickets/{id} 	    Obtener ticket
POST 	    /api/tickets 	        Crear ticket
PUT 	    /api/tickets/{id} 	    Actualizar ticket
DELETE 	    /api/tickets/{id} 	    Eliminar ticket
POST 	    /api/devices/assign 	Asignar dispositivo
GET 	    /api/devices 	        Consultar dispositivos
