# POS UMKM - Point of Sale untuk Usaha Mikro Kecil Menengah

[![Laravel](https://img.shields.io/badge/Laravel-12-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange.svg)](https://mysql.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0+-blue.svg)](https://tailwindcss.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-green.svg)](https://alpinejs.dev)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/muris11/Pos-UMKM-Laravel-12.svg)](https://github.com/muris11/Pos-UMKM-Laravel-12/issues)
[![GitHub stars](https://img.shields.io/github/stars/muris11/Pos-UMKM-Laravel-12.svg)](https://github.com/muris11/Pos-UMKM-Laravel-12/stargazers)

Sistem Point of Sale (POS) modern yang dirancang khusus untuk membantu Usaha Mikro Kecil Menengah (UMKM) mengelola bisnis mereka dengan lebih efisien. Dibangun dengan Laravel 12, Tailwind CSS, dan Alpine.js untuk pengalaman pengguna yang luar biasa.

## 📸 Screenshots

_Screenshots akan ditambahkan setelah deployment_

## ✨ Fitur Utama

### 🏪 **Manajemen Toko**

-   ✅ Multi-store support dengan pengaturan terpisah
-   ✅ Pengaturan toko individual (nama, alamat, kontak)
-   ✅ Manajemen inventori per toko
-   ✅ Transfer stok antar toko
-   ✅ Laporan penjualan per toko
-   ✅ Pengaturan jam operasional

### 👥 **Manajemen Pelanggan**

-   ✅ Database pelanggan lengkap dengan informasi detail
-   ✅ Sistem poin loyalitas otomatis
-   ✅ Riwayat pembelian lengkap
-   ✅ Segmentasi pelanggan (VIP, Regular, New)
-   ✅ Program diskon berdasarkan poin
-   ✅ Notifikasi ulang tahun pelanggan
-   ✅ Export data pelanggan

### 📦 **Manajemen Produk**

-   ✅ Katalog produk lengkap dengan foto
-   ✅ Sistem kategori produk hierarki
-   ✅ Manajemen stok real-time dengan alert
-   ✅ Barcode support (generate & scan)
-   ✅ Variasi produk (ukuran, warna, dll)
-   ✅ Harga grosir dan retail
-   ✅ Produk bundling/paket
-   ✅ Manajemen expired date

### 🛒 **Point of Sale (POS)**

-   ✅ Interface kasir yang intuitif dan cepat
-   ✅ Pencarian produk dengan autocomplete
-   ✅ Kalkulasi otomatis pajak & diskon
-   ✅ Multiple payment methods (Cash, Card, Transfer)
-   ✅ Split payment (gabungan metode bayar)
-   ✅ Hold transaction untuk antrian
-   ✅ Receipt printing thermal & PDF
-   ✅ Refund & return management

### 👨‍💼 **Manajemen Pengguna**

-   ✅ Role-based access control (RBAC)
-   ✅ Tiga level: Owner, Manager, Cashier
-   ✅ User activity logging & audit trail
-   ✅ Secure authentication dengan rate limiting
-   ✅ Password policy & reset
-   ✅ Session management
-   ✅ Two-factor authentication (opsional)

### 📊 **Analytics & Reporting**

-   ✅ Dashboard real-time dengan metrics utama
-   ✅ Laporan penjualan harian/mingguan/bulanan/tahunan
-   ✅ Analitik produk terlaris & tidak laku
-   ✅ Laporan keuangan (P&L, Cash Flow)
-   ✅ Customer analytics & behavior
-   ✅ Inventory turnover analysis
-   ✅ Export laporan ke PDF/Excel/CSV
-   ✅ Scheduled reports via email

### 🎨 **UI/UX Modern**

-   ✅ Dark/Light mode dengan auto-detection
-   ✅ Fully responsive design (Mobile, Tablet, Desktop)
-   ✅ Animasi smooth & micro-interactions
-   ✅ Theme customization dengan preset colors
-   ✅ Mobile-optimized untuk POS tablet
-   ✅ Accessibility compliance (WCAG 2.1)
-   ✅ Multi-language support (ID/EN)
-   ✅ PWA (Progressive Web App) ready

### 🔧 **Fitur Tambahan**

-   ✅ Backup & restore database otomatis
-   ✅ API RESTful untuk integrasi
-   ✅ Webhook support untuk external services
-   ✅ Queue system untuk performance
-   ✅ Cache optimization
-   ✅ Error logging & monitoring
-   ✅ Maintenance mode
-   ✅ Database optimization tools

## 🛠️ Tech Stack

### Backend

-   **Laravel 12** - PHP Framework terdepan untuk web applications
-   **MySQL 8.0+** - Database relational dengan performance tinggi
-   **PHP 8.2+** - Server-side scripting dengan JIT compiler
-   **Redis** - Cache & session storage (optional)

### Frontend

-   **Tailwind CSS 3.0+** - Utility-first CSS framework
-   **Alpine.js 3.x** - Reactive JavaScript framework
-   **Material Icons** - Icon library dari Google
-   **Chart.js** - Library charting untuk analytics

### Tools & Libraries

-   **Composer** - PHP dependency manager
-   **NPM/Yarn** - Node.js package manager
-   **Vite** - Next-generation build tool
-   **DomPDF** - PDF generation library
-   **Midtrans** - Payment gateway Indonesia
-   **Laravel Sanctum** - API authentication
-   **Laravel Horizon** - Queue monitoring (optional)
-   **Laravel Telescope** - Debugging & monitoring (dev)

## 📋 Prerequisites

Sebelum menjalankan aplikasi ini, pastikan Anda memiliki:

### Sistem Requirements

-   ✅ **PHP 8.2 atau lebih tinggi** (8.3 recommended)
-   ✅ **Composer 2.x** - PHP dependency manager
-   ✅ **Node.js 18+ & NPM 9+** - JavaScript runtime
-   ✅ **MySQL 8.0+ atau MariaDB 10.6+** - Database server
-   ✅ **Git 2.30+** - Version control
-   ✅ **Web Server** - Apache/Nginx dengan mod_rewrite

### Hardware Requirements

-   **Minimum**: 2GB RAM, 1GB Storage, 1 CPU Core
-   **Recommended**: 4GB RAM, 10GB Storage, 2 CPU Cores
-   **Production**: 8GB+ RAM, 50GB+ Storage, 4+ CPU Cores

### Browser Support

-   ✅ Chrome 90+
-   ✅ Firefox 88+
-   ✅ Safari 14+
-   ✅ Edge 90+
-   ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🚀 Instalasi & Setup

### 1. Clone Repository

```bash
git clone https://github.com/muris11/Pos-UMKM-Laravel-12.git
cd Pos-UMKM-Laravel-12
```

### 2. Install PHP Dependencies

```bash
composer install --no-dev --optimize-autoloader
```

### 3. Install Node.js Dependencies

```bash
npm install --production=false
```

### 4. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Generate JWT secret (jika menggunakan API)
php artisan jwt:secret
```

### 5. Database Setup

```bash
# Buat database di MySQL
mysql -u root -p
CREATE DATABASE pos_umkm CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

# Update konfigurasi di .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pos_umkm
DB_USERNAME=root
DB_PASSWORD=your_password

# Jalankan migrations
php artisan migrate

# Seed database dengan data dummy
php artisan db:seed
```

### 6. Storage Setup

```bash
# Buat symbolic link untuk file uploads
php artisan storage:link

# Set permissions
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

### 7. Build Assets

```bash
# Development
npm run dev

# Production (optimized)
npm run build

# Watch mode untuk development
npm run watch
```

### 8. Cache Optimization

```bash
# Cache konfigurasi untuk performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Clear cache jika ada perubahan
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### 9. Jalankan Aplikasi

```bash
# Development server
php artisan serve

# Production dengan queue worker
php artisan queue:work

# Schedule runner (cron job)
php artisan schedule:run
```

Aplikasi akan berjalan di `http://localhost:8000`

## 👤 User Accounts Demo

Setelah seeding database, Anda dapat login dengan akun berikut:

| Role    | Email        | Password | Permissions                     |
| ------- | ------------ | -------- | ------------------------------- |
| Owner   | owner@demo   | demo123  | Full access                     |
| Manager | manager@demo | demo123  | Manage store, products, reports |
| Cashier | cashier@demo | demo123  | POS, customers, basic reports   |

### Membuat User Baru

```bash
# Via artisan command
php artisan tinker
>>> User::create(['name'=>'John Doe', 'email'=>'john@example.com', 'password'=>Hash::make('password'), 'role'=>'cashier']);
```

## 📁 Struktur Project

```
pos-umkm/
├── app/
│   ├── Console/
│   │   ├── Commands/          # Custom artisan commands
│   │   └── Kernel.php
│   ├── Exceptions/
│   │   └── Handler.php
│   ├── Http/
│   │   ├── Controllers/       # All controllers
│   │   │   ├── Auth/
│   │   │   ├── DashboardController.php
│   │   │   ├── POSController.php
│   │   │   └── ...
│   │   ├── Middleware/        # Custom middleware
│   │   └── Requests/          # Form request validation
│   ├── Models/                # Eloquent models
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Category.php
│   │   ├── Customer.php
│   │   ├── Sale.php
│   │   ├── Store.php
│   │   └── ...
│   ├── Providers/             # Service providers
│   ├── Services/              # Business logic services
│   │   ├── MidtransService.php
│   │   ├── PromotionEngine.php
│   │   └── StockService.php
│   └── Notifications/         # Email/SMS notifications
├── database/
│   ├── migrations/            # Database migrations
│   ├── seeders/               # Database seeders
│   └── factories/             # Model factories
├── public/
│   ├── css/                   # Compiled CSS
│   ├── js/                    # Compiled JS
│   ├── images/                # Static images
│   ├── storage/               # Symlinked storage
│   ├── favicon.ico
│   └── robots.txt
├── resources/
│   ├── css/                   # Source CSS
│   ├── js/                    # Source JS (Alpine.js)
│   ├── lang/                  # Language files
│   └── views/                 # Blade templates
│       ├── layouts/
│       ├── auth/
│       ├── dashboard/
│       └── ...
├── routes/
│   ├── web.php                # Web routes
│   ├── api.php                # API routes
│   └── console.php            # Console routes
├── storage/
│   ├── app/                   # File uploads
│   ├── framework/             # Laravel cache/logs
│   └── logs/                  # Application logs
├── tests/
│   ├── Feature/               # Feature tests
│   ├── Unit/                  # Unit tests
│   └── TestCase.php
├── vendor/                    # Composer dependencies
├── .env.example               # Environment template
├── artisan                    # Laravel CLI
├── composer.json              # PHP dependencies
├── package.json               # Node dependencies
├── tailwind.config.js         # Tailwind config
├── vite.config.js             # Vite config
├── phpunit.xml                # Test config
└── README.md
```

## 🔧 Konfigurasi

### Environment Variables (.env)

```env
# Application
APP_NAME="POS UMKM"
APP_ENV=local
APP_KEY=base64:your_app_key_here
APP_DEBUG=true
APP_URL=http://localhost

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pos_umkm
DB_USERNAME=root
DB_PASSWORD=your_password

# Cache & Session
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120

# Queue (untuk background jobs)
QUEUE_CONNECTION=database

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

# Midtrans Payment Gateway
MIDTRANS_SERVER_KEY=your_server_key
MIDTRANS_CLIENT_KEY=your_client_key
MIDTRANS_IS_PRODUCTION=false
MIDTRANS_SANDBOX=true

# File Storage
FILESYSTEM_DISK=local

# Logging
LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

# Vite (untuk asset building)
VITE_APP_NAME="${APP_NAME}"
```

### Tailwind CSS Customization

File `tailwind.config.js` berisi konfigurasi custom:

```javascript
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#eff6ff",
                    500: "#3b82f6",
                    600: "#2563eb",
                    700: "#1d4ed8",
                },
            },
            animation: {
                "fade-in": "fadeIn 0.5s ease-out",
                "slide-in": "slideIn 0.3s ease-out",
                "bounce-slow": "bounce 2s infinite",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
```

### Vite Configuration

File `vite.config.js` untuk asset building:

```javascript
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ["alpinejs"],
                },
            },
        },
    },
});
```

## 📊 Database Schema

### Tabel Utama:

#### **users**

-   `id` - Primary key
-   `name` - Nama lengkap
-   `email` - Email unik
-   `password` - Password hash
-   `role` - Role (owner/manager/cashier)
-   `email_verified_at` - Timestamp verifikasi
-   `created_at`, `updated_at` - Timestamps

#### **stores**

-   `id` - Primary key
-   `name` - Nama toko
-   `address` - Alamat lengkap
-   `phone` - Nomor telepon
-   `email` - Email toko
-   `is_active` - Status aktif
-   `created_at`, `updated_at` - Timestamps

#### **products**

-   `id` - Primary key
-   `name` - Nama produk
-   `description` - Deskripsi
-   `sku` - Stock Keeping Unit
-   `barcode` - Kode barcode
-   `price` - Harga jual
-   `cost_price` - Harga beli
-   `stock_quantity` - Jumlah stok
-   `min_stock` - Minimum stok
-   `category_id` - Foreign key ke categories
-   `store_id` - Foreign key ke stores
-   `image` - Path gambar
-   `is_active` - Status aktif

#### **categories**

-   `id` - Primary key
-   `name` - Nama kategori
-   `description` - Deskripsi
-   `parent_id` - Parent category (nullable)
-   `image` - Icon kategori
-   `sort_order` - Urutan tampil

#### **customers**

-   `id` - Primary key
-   `name` - Nama pelanggan
-   `email` - Email
-   `phone` - Nomor telepon
-   `address` - Alamat
-   `points` - Poin loyalitas
-   `total_spent` - Total pembelian
-   `last_visit` - Kunjungan terakhir
-   `birth_date` - Tanggal lahir

#### **sales**

-   `id` - Primary key
-   `invoice_number` - Nomor invoice unik
-   `customer_id` - Foreign key ke customers
-   `store_id` - Foreign key ke stores
-   `user_id` - Foreign key ke users (kasir)
-   `total_amount` - Total penjualan
-   `discount_amount` - Total diskon
-   `tax_amount` - Total pajak
-   `payment_method` - Metode pembayaran
-   `status` - Status transaksi
-   `created_at`, `updated_at` - Timestamps

#### **sale_items**

-   `id` - Primary key
-   `sale_id` - Foreign key ke sales
-   `product_id` - Foreign key ke products
-   `quantity` - Jumlah item
-   `unit_price` - Harga per unit
-   `discount` - Diskon per item
-   `total` - Total per item

#### **suppliers**

-   `id` - Primary key
-   `name` - Nama supplier
-   `contact_person` - PIC
-   `email` - Email
-   `phone` - Telepon
-   `address` - Alamat
-   `payment_terms` - Syarat pembayaran

#### **purchase_orders**

-   `id` - Primary key
-   `supplier_id` - Foreign key ke suppliers
-   `store_id` - Foreign key ke stores
-   `user_id` - Foreign key ke users
-   `total_amount` - Total pembelian
-   `status` - Status PO
-   `expected_date` - Tanggal expected
-   `received_date` - Tanggal diterima

## 🔗 API Documentation

### Authentication Endpoints

```bash
# Login
POST /api/login
{
    "email": "user@example.com",
    "password": "password"
}

# Logout
POST /api/logout
Authorization: Bearer {token}

# Get current user
GET /api/user
Authorization: Bearer {token}
```

### Products API

```bash
# Get all products
GET /api/products

# Get product by ID
GET /api/products/{id}

# Create product
POST /api/products
{
    "name": "Product Name",
    "price": 10000,
    "stock_quantity": 50,
    "category_id": 1
}

# Update product
PUT /api/products/{id}

# Delete product
DELETE /api/products/{id}
```

### Sales API

```bash
# Create sale
POST /api/sales
{
    "customer_id": 1,
    "store_id": 1,
    "items": [
        {
            "product_id": 1,
            "quantity": 2,
            "unit_price": 15000
        }
    ],
    "payment_method": "cash"
}
```

## 🧪 Testing

### Menjalankan Tests

```bash
# Jalankan semua tests
php artisan test

# Jalankan dengan coverage
php artisan test --coverage

# Jalankan specific test
php artisan test --filter=ProductTest

# Jalankan tests secara paralel
php artisan test --parallel
```

### Test Structure

```
tests/
├── Feature/
│   ├── AuthTest.php
│   ├── ProductTest.php
│   ├── SaleTest.php
│   └── ...
├── Unit/
│   ├── Models/
│   ├── Services/
│   └── ...
└── TestCase.php
```

### Membuat Test Baru

```bash
# Generate feature test
php artisan make:test ProductTest

# Generate unit test
php artisan make:test ProductModelTest --unit
```

## 📦 Deployment

### Development Deployment

```bash
# Quick deploy untuk development
composer install
npm install && npm run dev
php artisan migrate --seed
php artisan serve
```

### Production Deployment

#### 1. Server Preparation

```bash
# Update system
sudo apt update && sudo apt upgrade

# Install PHP & extensions
sudo apt install php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-xml php8.2-mbstring php8.2-curl php8.2-zip php8.2-gd

# Install Node.js
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt-get install -y nodejs

# Install MySQL
sudo apt install mysql-server
sudo mysql_secure_installation
```

#### 2. Application Deployment

```bash
# Clone repository
git clone https://github.com/muris11/Pos-UMKM-Laravel-12.git /var/www/pos-umkm
cd /var/www/pos-umkm

# Install dependencies
composer install --no-dev --optimize-autoloader
npm install --production && npm run build

# Setup environment
cp .env.example .env
# Edit .env dengan konfigurasi production

# Generate keys
php artisan key:generate
php artisan jwt:secret

# Database setup
php artisan migrate --seed
php artisan storage:link

# Cache optimization
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

#### 3. Web Server Configuration

**Nginx Configuration:**

```nginx
server {
    listen 80;
    server_name your-domain.com;
    root /var/www/pos-umkm/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~* \.(js|css|png|jpg|jpeg|gif|ico|svg)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }
}
```

**Apache Configuration (.htaccess sudah tersedia):**

```apache
<VirtualHost *:80>
    ServerName your-domain.com
    DocumentRoot /var/www/pos-umkm/public

    <Directory /var/www/pos-umkm/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

#### 4. SSL Setup (Let's Encrypt)

```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx

# Generate certificate
sudo certbot --nginx -d your-domain.com
```

#### 5. Process Management

```bash
# Install Supervisor untuk queue workers
sudo apt install supervisor

# Buat konfigurasi supervisor
sudo nano /etc/supervisor/conf.d/pos-umkm-worker.conf
```

**Supervisor Configuration:**

```ini
[program:pos-umkm-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/pos-umkm/artisan queue:work --sleep=3 --tries=3 --max-jobs=1000
directory=/var/www/pos-umkm
autostart=true
autorestart=true
numprocs=2
user=www-data
redirect_stderr=true
stdout_logfile=/var/www/pos-umkm/storage/logs/worker.log
```

#### 6. Cron Jobs

```bash
# Edit crontab
sudo crontab -e

# Tambahkan baris berikut
* * * * * cd /var/www/pos-umkm && php artisan schedule:run >> /dev/null 2>&1
```

#### 7. Backup Setup

```bash
# Buat script backup
sudo nano /usr/local/bin/backup-pos-umkm.sh
```

**Backup Script:**

```bash
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_DIR="/var/backups/pos-umkm"
APP_DIR="/var/www/pos-umkm"

# Create backup directory
mkdir -p $BACKUP_DIR

# Database backup
mysqldump -u root -p'password' pos_umkm > $BACKUP_DIR/db_$DATE.sql

# Files backup
tar -czf $BACKUP_DIR/files_$DATE.tar.gz -C $APP_DIR storage/

# Keep only last 7 days
find $BACKUP_DIR -name "*.sql" -mtime +7 -delete
find $BACKUP_DIR -name "*.tar.gz" -mtime +7 -delete
```

#### 8. Monitoring & Logs

```bash
# Setup log rotation
sudo nano /etc/logrotate.d/pos-umkm
```

**Logrotate Configuration:**

```
/var/www/pos-umkm/storage/logs/*.log {
    daily
    missingok
    rotate 7
    compress
    notifempty
    create 644 www-data www-data
}
```

## 🔒 Security Considerations

### Authentication & Authorization

-   ✅ Password hashing dengan bcrypt
-   ✅ Rate limiting pada login attempts
-   ✅ Session security dengan secure cookies
-   ✅ CSRF protection pada semua forms
-   ✅ Role-based access control (RBAC)

### Data Protection

-   ✅ SQL injection prevention dengan Eloquent ORM
-   ✅ XSS protection dengan blade templating
-   ✅ Input validation dengan Form Requests
-   ✅ File upload validation & sanitization

### Production Security

-   ✅ APP_DEBUG=false di production
-   ✅ Secure headers dengan middleware
-   ✅ HTTPS enforcement
-   ✅ Database credentials encryption
-   ✅ Regular security updates

## ⚡ Performance Optimization

### Database Optimization

```bash
# Add indexes untuk query performance
php artisan tinker
>>> Schema::table('products', function (Blueprint $table) { $table->index('sku'); });
>>> Schema::table('sales', function (Blueprint $table) { $table->index(['created_at', 'store_id']); });
```

### Caching Strategy

```bash
# Cache konfigurasi
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Cache data yang sering diakses
Cache::remember('categories', 3600, function () {
    return Category::all();
});
```

### Queue Optimization

```bash
# Jalankan queue worker
php artisan queue:work --tries=3 --timeout=90

# Monitor queues
php artisan queue:failed
php artisan queue:retry all
```

### Asset Optimization

```bash
# Build optimized assets
npm run build

# Enable gzip compression
# (Configure di web server)
```

## 🐛 Troubleshooting

### Common Issues

#### 1. Blank Page / 500 Error

```bash
# Check logs
tail -f storage/logs/laravel.log

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

#### 2. Database Connection Error

```bash
# Check .env configuration
php artisan tinker
>>> DB::connection()->getPdo();

# Test database connection
php artisan migrate:status
```

#### 3. Permission Issues

```bash
# Fix storage permissions
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chown -R www-data:www-data storage/
chown -R www-data:www-data bootstrap/cache/
```

#### 4. Asset Not Loading

```bash
# Rebuild assets
npm run build

# Clear browser cache
# Check Vite dev server
npm run dev
```

#### 5. Queue Not Working

```bash
# Check queue status
php artisan queue:failed

# Restart queue worker
php artisan queue:restart

# Check supervisor status
sudo supervisorctl status
```

### Debug Mode

```bash
# Enable debug mode temporarily
php artisan tinker
>>> config(['app.debug' => true]);

# Check environment
php artisan about
```

## 📈 Development Workflow

### Git Workflow

```bash
# Development branch
git checkout -b feature/new-feature

# Make changes
git add .
git commit -m "Add new feature"

# Push to branch
git push origin feature/new-feature

# Create Pull Request
# Code review & merge
```

### Code Standards

```bash
# Run PHP CS Fixer
./vendor/bin/php-cs-fixer fix

# Run Laravel Pint
./vendor/bin/pint

# Run tests
php artisan test
```

### Pre-commit Hooks

```bash
# Install pre-commit hooks
composer run prepare

# Hooks akan menjalankan:
# - PHP CS Fixer
# - Tests
# - Laravel Pint
```

## 📋 Changelog

### Version 1.0.0 (Current)

-   ✅ Initial release dengan fitur lengkap POS
-   ✅ Multi-store management
-   ✅ Customer loyalty system
-   ✅ Real-time inventory
-   ✅ Modern UI dengan dark mode
-   ✅ API RESTful
-   ✅ Comprehensive reporting

### Upcoming Features

-   🔄 Mobile app (React Native)
-   🔄 Advanced analytics dashboard
-   🔄 Multi-currency support
-   🔄 Integration dengan e-commerce platforms
-   🔄 AI-powered inventory prediction

## 🗺️ Roadmap

### Phase 1 (Current) - Core POS System ✅

-   Basic POS functionality
-   User management
-   Product management
-   Sales tracking

### Phase 2 (Next) - Advanced Features 🔄

-   Mobile POS app
-   Advanced reporting
-   API integrations
-   Multi-language support

### Phase 3 (Future) - Enterprise Features 📅

-   Multi-company support
-   Advanced analytics
-   AI/ML features
-   IoT device integration

## 🤝 Contributing

Kami sangat menghargai kontribusi dari komunitas! Berikut adalah panduan untuk berkontribusi:

### 1. Fork & Clone

```bash
git clone https://github.com/your-username/Pos-UMKM-Laravel-12.git
cd Pos-UMKM-Laravel-12
git remote add upstream https://github.com/muris11/Pos-UMKM-Laravel-12.git
```

### 2. Development Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev
```

### 3. Create Feature Branch

```bash
git checkout -b feature/amazing-feature
```

### 4. Development Guidelines

-   ✅ Follow PSR-12 coding standards
-   ✅ Write tests untuk fitur baru
-   ✅ Update documentation
-   ✅ Commit messages yang jelas
-   ✅ Code review sebelum merge

### 5. Pull Request Process

1. Update branch dengan main
2. Pastikan semua tests pass
3. Update CHANGELOG.md jika perlu
4. Buat Pull Request dengan deskripsi lengkap
5. Wait for review & merge

## 📝 License

Distributed under the MIT License. See `LICENSE` for more information.

## 📞 Support & Community

### Getting Help

1. **📖 Documentation**: [docs.pos-umkm.com](https://docs.pos-umkm.com)
2. **🐛 Issues**: [GitHub Issues](https://github.com/muris11/Pos-UMKM-Laravel-12/issues)
3. **💬 Discussions**: [GitHub Discussions](https://github.com/muris11/Pos-UMKM-Laravel-12/discussions)
4. **📧 Email**: support@pos-umkm.com

### Community

-   **🌐 Website**: [pos-umkm.com](https://pos-umkm.com)
-   **📘 Facebook**: [fb.com/posumkm](https://fb.com/posumkm)
-   **📱 Instagram**: [@pos_umkm](https://instagram.com/pos_umkm)
-   **🐦 Twitter**: [@pos_umkm](https://twitter.com/pos_umkm)

## 🙏 Acknowledgments

Terima kasih kepada:

-   **Laravel Community** - Framework luar biasa
-   **Tailwind CSS Team** - CSS framework modern
-   **Alpine.js** - JavaScript framework ringan
-   **Material Design** - Design system konsisten
-   **Open Source Community** - Libraries & tools
-   **UMKM Indonesia** - Inspirasi & purpose

### Special Thanks

-   **Taylor Otwell** - Laravel creator
-   **Adam Wathan** - Tailwind CSS creator
-   **Caleb Porzio** - Alpine.js creator
-   **All Contributors** - Yang telah berkontribusi

---

## 🎉 Getting Started

```bash
# Quick start dalam 5 menit
git clone https://github.com/muris11/Pos-UMKM-Laravel-12.git
cd Pos-UMKM-Laravel-12
composer install && npm install && npm run build
cp .env.example .env && php artisan key:generate
# Setup database di .env
php artisan migrate --seed
php artisan serve
```

Kunjungi `http://localhost:8000` dan login dengan:

-   **Email**: `owner@demo`
-   **Password**: `demo123`

---

**Dibuat dengan ❤️ untuk membantu UMKM Indonesia berkembang lebih maju**

⭐ Jika project ini bermanfaat, jangan lupa untuk memberikan star!

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   P o s - U M K M - L a r a v e l - 1 2 

## ✨ Fitur Utama

### 🏪 **Manajemen Toko**

-   Multi-store support
-   Pengaturan toko individual
-   Manajemen inventori per toko
-   Laporan penjualan per toko

### 👥 **Manajemen Pelanggan**

-   Database pelanggan lengkap
-   Sistem poin loyalitas
-   Riwayat pembelian
-   Segmentasi pelanggan

### 📦 **Manajemen Produk**

-   Katalog produk lengkap
-   Kategori produk
-   Manajemen stok real-time
-   Barcode support
-   Variasi produk

### 🛒 **Point of Sale (POS)**

-   Interface kasir yang intuitif
-   Pencarian produk cepat
-   Kalkulasi otomatis
-   Multiple payment methods
-   Receipt printing

### 👨‍💼 **Manajemen Pengguna**

-   Role-based access control
-   Owner, Manager, Cashier roles
-   User activity logging
-   Secure authentication

### 📊 **Analytics & Reporting**

-   Dashboard real-time
-   Laporan penjualan harian/mingguan/bulanan
-   Analitik produk terlaris
-   Laporan keuangan
-   Export laporan ke PDF/Excel

### 🎨 **UI/UX Modern**

-   Dark/Light mode
-   Responsive design
-   Animasi smooth
-   Theme customization
-   Mobile-optimized

## 🛠️ Tech Stack

### Backend

-   **Laravel 12** - PHP Framework
-   **MySQL 8.0+** - Database
-   **PHP 8.2+** - Server-side scripting

### Frontend

-   **Tailwind CSS 3.0+** - Utility-first CSS framework
-   **Alpine.js 3.x** - Lightweight JavaScript framework
-   **Material Icons** - Icon library

### Tools & Libraries

-   **Composer** - PHP dependency manager
-   **NPM** - Node.js package manager
-   **Vite** - Build tool & dev server
-   **DomPDF** - PDF generation
-   **Midtrans** - Payment gateway integration

## 📋 Prerequisites

Sebelum menjalankan aplikasi ini, pastikan Anda memiliki:

-   **PHP 8.2 atau lebih tinggi**
-   **Composer** - PHP dependency manager
-   **Node.js & NPM** - JavaScript runtime & package manager
-   **MySQL 8.0+** - Database server
-   **Git** - Version control

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

| Role    | Email        | Password |
| ------- | ------------ | -------- |
| Owner   | owner@demo   | demo123  |
| Manager | manager@demo | demo123  |
| Cashier | cashier@demo | demo123  |

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

-   **users** - Data pengguna dengan role-based access
-   **stores** - Informasi toko/multi-store
-   **products** - Katalog produk
-   **categories** - Kategori produk
-   **customers** - Database pelanggan
-   **sales** - Transaksi penjualan
-   **sale_items** - Detail item dalam transaksi
-   **suppliers** - Data supplier/pemasok
-   **purchase_orders** - Pembelian dari supplier

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

-   [Laravel](https://laravel.com) - The PHP Framework for Web Artisans
-   [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
-   [Alpine.js](https://alpinejs.dev) - A rugged, minimal framework for composing JavaScript behavior
-   [Material Design Icons](https://fonts.google.com/icons) - Icon library
-   [Midtrans](https://midtrans.com) - Payment gateway solution

---

**Dibuat dengan ❤️ untuk membantu UMKM Indonesia berkembang lebih maju**

⭐ Jika project ini bermanfaat, jangan lupa untuk memberikan star!

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   P o s - U M K M - L a r a v e l - 1 2 
 
 
