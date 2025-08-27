<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Laravel + Vue.js Site Projesi

Bu proje, Laravel backend ile Vue.js frontend’i birleştirerek dinamik, modern bir web sitesi oluşturmayı amaçlamaktadır.

##  Canlı Demo
[site.narin.besimvatan.com.tr](https://site.narin.besimvatan.com.tr/)

##  Teknolojiler
- **Backend**: Laravel 
- **Frontend**: Vue.js 
- **Build Araçları**: Vite veya Laravel Mix 
- **Diğer**: Axios, Vue Router, Pinia gibi yardımcı kütüphaneler 

##  Özellikler
- **SPA mimarisi** 
- **API entegrasyonu**
- **CRUD işlemleri**
- **Responsive ve kullanıcı dostu arayüzler**

## Ekran Görüntüleri
### AnaSayfa
<img width="1920" height="3815" alt="image" src="https://github.com/user-attachments/assets/b3172345-2552-49b2-8e86-edc4594ff246" />

### Hakkımızda
<img width="1920" height="3255" alt="image" src="https://github.com/user-attachments/assets/97156d71-5744-4231-b9fc-a97b1adf2232" />

### İletişim
<img width="1920" height="2122" alt="image" src="https://github.com/user-attachments/assets/9a3dce47-3f7a-4a83-9fb0-827c5e7bc553" />

### Admin Sayfaları
<img width="1897" height="893" alt="image" src="https://github.com/user-attachments/assets/0f3a9444-3e81-4003-bb59-01dee7058a84" />
<img width="1920" height="1085" alt="image" src="https://github.com/user-attachments/assets/63916909-b24e-4d81-9633-deb10e0336c2" />
<img width="1920" height="1377" alt="image" src="https://github.com/user-attachments/assets/55946ab2-557b-4182-805d-9a9377b686c7" />



##  Başlangıç
```bash
# Depoyu klonla
git clone https://github.com/narinuluisik/laravel_vue.js_siteprojem.git
cd laravel_vue.js_siteprojem

# Backend için
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

# Frontend için
npm install
npm run dev  # ya da build

# Uygulamayı başlat
php artisan serve

# Tarayıcıda görüntüle
# http://127.0.0.1:8000
