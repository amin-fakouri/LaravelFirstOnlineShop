# 🛒 Lara11 Store

<p align="center">
  <strong>A Laravel & Livewire E-Commerce Platform</strong>
</p>

<p align="center">
  A production-style e-commerce application built with Laravel 11 and Livewire 3 — featuring reactive product & category management, a component-based UI, and a clean, extensible architecture designed for real store operations.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel 11">
  <img src="https://img.shields.io/badge/Livewire-3-4E56A6?style=flat-square&logo=livewire&logoColor=white" alt="Livewire 3">
  <img src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP 8.2+">
  <img src="https://img.shields.io/badge/Tailwind_CSS-3-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Vite-Frontend-646CFF?style=flat-square&logo=vite&logoColor=white" alt="Vite">
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square" alt="MIT License">
</p>

<p align="center">
  <a href="#-features">Features</a> •
  <a href="#-tech-stack">Tech Stack</a> •
  <a href="#-installation">Installation</a> •
  <a href="#-project-structure">Structure</a> •
  <a href="#-roadmap">Roadmap</a>
</p>

---

## 📌 About

**Lara11 Store** is an e-commerce web application built with **Laravel 11** and **Livewire 3**, designed around a practical, real-world store workflow rather than a toy demo.

The project's focus is a clean separation between backend logic and reactive UI: Livewire components handle interactivity without breaking out of the Laravel ecosystem, keeping the codebase easy to reason about, test, and extend.

**Core areas covered:**

* 🛍️ Product management (CRUD, attributes, listing)
* 📂 Category management with hierarchical structure
* 🛒 Core e-commerce data model and store operations
* ⚡ Fully reactive interfaces via Livewire — no page reloads
* 🎨 Responsive, utility-first UI with Tailwind CSS
* 🔐 Authentication and application-level security
* 🧩 Component-based architecture for reusability and maintainability

---

## 🛠️ Tech Stack

| Layer            | Technology            | Purpose                                |
| ----------------- | ---------------------- | --------------------------------------- |
| Backend           | Laravel 11 / PHP 8.2+ | Core application framework              |
| Reactive UI       | Livewire 3            | Server-driven interactivity             |
| Components        | Laravel Volt           | Lightweight, single-file Livewire views |
| API Auth          | Laravel Sanctum        | Token-based API authentication          |
| Styling           | Tailwind CSS           | Utility-first UI design                 |
| Build Tooling     | Vite                   | Frontend asset bundling & HMR           |
| Database          | MySQL                  | Relational data storage                 |
| Dependency Mgmt   | Composer / NPM         | PHP and JS package management           |

---

## ✨ Features

### 🛍️ Store Management
Product and category management built on a normalized, store-oriented database schema — structured to scale from a single showcase catalog to a multi-category storefront.

### ⚡ Interactive UI
Livewire drives all dynamic interactions (filtering, forms, live updates) directly from Laravel components, avoiding a separate frontend framework or API layer for core CRUD flows.

### 🎨 Modern Frontend
Tailwind CSS + Vite provide a fast, responsive UI with instant hot-module reloading during development and optimized production builds.

---

## 📸 Preview

<p align="center">
  <img width="100%" alt="Lara11 Store Preview" src="https://github.com/user-attachments/assets/0571121b-ffe9-48cf-b18b-e9831f6bfbef" />
</p>

---

## 🚀 Installation

### 1. Clone the repository
```bash
git clone https://github.com/amin-fakouri/lara11-store.git
cd lara11-store
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Install frontend dependencies
```bash
npm install
```

### 4. Create your environment file
```bash
cp .env.example .env
```
On Windows PowerShell:
```powershell
Copy-Item .env.example .env
```

### 5. Generate the application key
```bash
php artisan key:generate
```

### 6. Configure the database
Update the following in your `.env` file:
```env
DB_DATABASE=lara11_store
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run migrations
```bash
php artisan migrate
```
> Add `--seed` if you'd like to populate demo data (once seeders are available).

### 8. Build frontend assets
```bash
npm run build
```

### 9. Start the development server
```bash
php artisan serve
```

The app will be available at:
```
http://127.0.0.1:8000
```

---

## 🧪 Development

Run Vite in watch mode for frontend development:
```bash
npm run dev
```

Run the Laravel test suite:
```bash
php artisan test
```

---

## 📁 Project Structure

```text
lara11-store/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── composer.json
├── package.json
└── vite.config.js
```

---

## 🗺️ Roadmap

- [ ] Shopping cart & checkout flow
- [ ] Order management & status tracking
- [ ] Payment gateway integration
- [ ] Admin dashboard with analytics
- [ ] Product search & filtering (Livewire-powered)

---

## 🎯 Project Goals

Lara11 Store was built as a hands-on Laravel e-commerce project and as part of ongoing work as a **Laravel & Livewire Developer applying AI/ML to real-world applications**.

It demonstrates practical experience with:

* Laravel application architecture and best practices
* Livewire-driven reactive development
* Database-driven, normalized data modeling
* Component-based, reusable UI construction
* Modern PHP (8.2+) development patterns
* Frontend asset pipelines with Vite

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome. Feel free to check the [issues page](https://github.com/amin-fakouri/lara11-store/issues) or open a pull request.

---

## 👨‍💻 Author

**Mohammad Amin Fakouri**
Laravel & Livewire Developer | Applying AI/ML to real-world applications

* GitHub: [@amin-fakouri](https://github.com/amin-fakouri)

---

## 📄 License

This project is open-sourced under the [MIT License](https://opensource.org/licenses/MIT).
