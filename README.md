# 🏋️ Ganesha-Fit — Gym & Fitness Management System

[![PHP](https://img.shields.io/badge/PHP-7.4%2B%20%2F%208.x-purple?style=flat&logo=php)](https://php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-blue?style=flat&logo=mysql)](https://mysql.com/)
[![FPDF](https://img.shields.io/badge/PDF%20Invoice-FPDF-red)]()

A complete web-based management system for gyms and fitness centers. Features member registrations, package subscriptions, attendance tracking, and automated PDF membership receipt and invoice generation.

---

## ✨ Features

- **👥 Member Management:** Full registration and profile management for fitness center members.
- **💳 Membership Plans:** Flexible packages (daily, monthly, annual passes).
- **🧾 Automated PDF Receipts:** Generates official transaction receipts and invoices dynamically via FPDF.
- **📊 Admin Dashboard:** Financial summary, active member metrics, and transaction logs.

---

## 🛠️ Tech Stack

- **Backend:** PHP
- **Database:** MySQL / MariaDB (`ganeshafit.sql`)
- **PDF Generation:** FPDF Engine
- **Frontend:** HTML5, CSS3, JavaScript

---

## 🚀 Installation

1. Clone to your web server root (`htdocs` or `/var/www/html`):
   ```bash
   git clone https://github.com/Akarptra/Ganesha-Fit.git
   ```
2. Import database schema:
   Import `ganeshafit.sql` into your MySQL server via phpMyAdmin or CLI.
3. Configure Database:
   Update `koneksi.php` with your database credentials.
4. Access via browser at `http://localhost/Ganesha-Fit`.

---

## 👤 Author

- **Raka Putra Pratidina** — [GitHub (@Akarptra)](https://github.com/Akarptra)
