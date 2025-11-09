# POS UMKM - Point of Sale untuk Usaha Mikro Kecil Menengah

[![Laravel](https://img.shields.io/badge/Laravel-12-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange.svg)](https://mysql.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0+-blue.svg)](https://tailwindcss.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-green.svg)](https://alpinejs.dev)

Sistem Point of Sale (POS) modern yang dirancang khusus untuk membantu Usaha Mikro Kecil Menengah (UMKM) mengelola bisnis mereka dengan lebih efisien. Dibangun dengan Laravel 12, Tailwind CSS, dan Alpine.js untuk pengalaman pengguna yang luar biasa.

## ✨ Fitur Utama

### 🏪 **Manajemen Toko**
- Multi-store support
- Pengaturan toko individual
- Manajemen inventori per toko
- Laporan penjualan per toko

### 👥 **Manajemen Pelanggan**
- Database pelanggan lengkap
- Sistem poin loyalitas
- Riwayat pembelian
- Segmentasi pelanggan

### 📦 **Manajemen Produk**
- Katalog produk lengkap
- Kategori produk
- Manajemen stok real-time
- Barcode support
- Variasi produk

### 🛒 **Point of Sale (POS)**
- Interface kasir yang intuitif
- Pencarian produk cepat
- Kalkulasi otomatis
- Multiple payment methods
- Receipt printing

### 👨‍💼 **Manajemen Pengguna**
- Role-based access control
- Owner, Manager, Cashier roles
- User activity logging
- Secure authentication

### 📊 **Analytics & Reporting**
- Dashboard real-time
- Laporan penjualan harian/mingguan/bulanan
- Analitik produk terlaris
- Laporan keuangan
- Export laporan ke PDF/Excel

### 🎨 **UI/UX Modern**
- Dark/Light mode
- Responsive design
- Animasi smooth
- Theme customization
- Mobile-optimized

## 🛠️ Tech Stack

### Backend
- **Laravel 12** - PHP Framework
- **MySQL 8.0+** - Database
- **PHP 8.2+** - Server-side scripting

### Frontend
- **Tailwind CSS 3.0+** - Utility-first CSS framework
- **Alpine.js 3.x** - Lightweight JavaScript framework
- **Material Icons** - Icon library

### Tools & Libraries
- **Composer** - PHP dependency manager
- **NPM** - Node.js package manager
- **Vite** - Build tool & dev server
- **DomPDF** - PDF generation
- **Midtrans** - Payment gateway integration

## 📋 Prerequisites

Sebelum menjalankan aplikasi ini, pastikan Anda memiliki:

- **PHP 8.2 atau lebih tinggi**
- **Composer** - PHP dependency manager
- **Node.js & NPM** - JavaScript runtime & package manager
- **MySQL 8.0+** - Database server
- **Git** - Version control

## 🚀 Instalasi & Setup

### 1. Clone Repository
```bash
git clone https://github.com/muris11/Pos-UMKM-Laravel-12.git
cd Pos-UMKM-Laravel-12
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup
```bash
# Buat database di MySQL
# Kemudian update konfigurasi di .env

# Jalankan migrations
php artisan migrate

# Seed database dengan data dummy
php artisan db:seed
```

### 6. Build Assets
```bash
# Development
npm run dev

# Production
npm run build
```

### 7. Storage Link (untuk file uploads)
```bash
php artisan storage:link
```

### 8. Jalankan Aplikasi
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

## 👤 User Accounts Demo

Setelah seeding database, Anda dapat login dengan akun berikut:

| Role     | Email          | Password |
|----------|----------------|----------|
| Owner    | owner@demo     | demo123  |
| Manager  | manager@demo   | demo123  |
| Cashier  | cashier@demo   | demo123  |

## 📁 Struktur Project

```
pos-umkm/
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Category.php
│   │   ├── Customer.php
│   │   ├── Sale.php
│   │   ├── Store.php
│   │   └── ...
│   ├── Providers/
│   └── Services/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── storage/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   ├── web.php
│   ├── api.php
│   └── console.php
├── storage/
├── tests/
├── vendor/
├── .env.example
├── artisan
├── composer.json
├── package.json
├── tailwind.config.js
├── vite.config.js
└── README.md
```

## 🔧 Konfigurasi

### Environment Variables (.env)
```env
APP_NAME="POS UMKM"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pos_umkm
DB_USERNAME=root
DB_PASSWORD=

# Midtrans Payment Gateway
MIDTRANS_SERVER_KEY=
MIDTRANS_CLIENT_KEY=
MIDTRANS_IS_PRODUCTION=false

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
```

### Tailwind CSS Customization
File `tailwind.config.js` berisi konfigurasi custom animations dan theme yang digunakan dalam aplikasi.

## 📊 Database Schema

### Tabel Utama:
- **users** - Data pengguna dengan role-based access
- **stores** - Informasi toko/multi-store
- **products** - Katalog produk
- **categories** - Kategori produk
- **customers** - Database pelanggan
- **sales** - Transaksi penjualan
- **sale_items** - Detail item dalam transaksi
- **suppliers** - Data supplier/pemasok
- **purchase_orders** - Pembelian dari supplier

## 🧪 Testing

```bash
# Jalankan semua tests
php artisan test

# Jalankan tests dengan coverage
php artisan test --coverage
```

## 📦 Deployment

### Production Setup
1. Set `APP_ENV=production` di `.env`
2. Set `APP_DEBUG=false`
3. Konfigurasi web server (Apache/Nginx)
4. Setup SSL certificate
5. Configure queue workers jika diperlukan
6. Setup cron jobs untuk scheduled tasks

### Build untuk Production
```bash
# Build assets
npm run build

# Cache konfigurasi
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🤝 Contributing

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 License

Distributed under the MIT License. See `LICENSE` for more information.

## 📞 Support

Jika Anda mengalami masalah atau memiliki pertanyaan:

1. **Documentation**: Periksa dokumentasi lengkap di [Laravel Docs](https://laravel.com/docs)
2. **Issues**: Buat issue di [GitHub Issues](https://github.com/muris11/Pos-UMKM-Laravel-12/issues)
3. **Discussions**: Gunakan [GitHub Discussions](https://github.com/muris11/Pos-UMKM-Laravel-12/discussions)

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP Framework for Web Artisans
- [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
- [Alpine.js](https://alpinejs.dev) - A rugged, minimal framework for composing JavaScript behavior
- [Material Design Icons](https://fonts.google.com/icons) - Icon library
- [Midtrans](https://midtrans.com) - Payment gateway solution

---

**Dibuat dengan ❤️ untuk membantu UMKM Indonesia berkembang lebih maju**

⭐ Jika project ini bermanfaat, jangan lupa untuk memberikan star!

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   P o s - U M K M - L a r a v e l - 1 2  
 