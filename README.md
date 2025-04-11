## Fitur Aplikasi Laravel Relationships Example

### 1. Manajemen User dan Profile (One to One)
- Setiap user memiliki satu profile
- CRUD untuk user dan profile
- Relasi one-to-one antara User dan Profile

### 2. Manajemen Post (One to Many) 
- User dapat membuat banyak post
- CRUD untuk post
- Relasi one-to-many antara User dan Post
- Melihat semua post dari seorang user

### 3. Manajemen Course (Many to Many)
- User dapat mengambil banyak course
- Course dapat diikuti oleh banyak user
- CRUD untuk course
- Relasi many-to-many antara User dan Course
- Mendaftarkan/membatalkan user ke course

### 4. Fitur Database
- Migrasi database otomatis
- Seeder untuk data dummy
- Relasi antar tabel yang terstruktur

### 5. Fitur Sistem
- Autentikasi user
- Interface yang responsif (menggunakan npm)
- API endpoints untuk akses data

### 6. Teknologi yang Digunakan
- Laravel Framework
- MySQL Database
- NPM untuk frontend
- Composer untuk manajemen dependency PHP