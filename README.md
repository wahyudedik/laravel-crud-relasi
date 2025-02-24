# Laravel Relationships Example

## 📖 Pendahuluan

Repository ini berisi contoh implementasi **Relasi Database** dalam Laravel, termasuk:

-   **One to One** (Satu ke Satu)
-   **One to Many** (Satu ke Banyak)
-   **Many to Many** (Banyak ke Banyak)

## 🛠 Instalasi

1. Clone repository ini:
    ```sh
    git clone https://github.com/yourusername/laravel-relationships.git
    cd laravel-relationships
    ```
2. Install dependency Laravel:
    ```sh
    composer install
    ```
3. Buat file `.env` dan konfigurasi database.
4. Jalankan migrasi database:
    ```sh
    php artisan migrate
    ```
5. Jalankan server:
    ```sh
    php artisan serve
    ```

## 🔗 Relasi Database

### 1️⃣ One to One

Relasi ini menghubungkan satu user dengan satu profile.

**Contoh Model:**

```php
class User extends Model {
    public function profile() {
        return $this->hasOne(Profile::class);
    }
}
```

```php
class Profile extends Model {
    public function user() {
        return $this->belongsTo(User::class);
    }
}
```

**Query:**

```php
$user = User::find(1);
$profile = $user->profile;
```

### 2️⃣ One to Many

Relasi ini menghubungkan satu user dengan banyak post.

**Contoh Model:**

```php
class User extends Model {
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
```

```php
class Post extends Model {
    public function user() {
        return $this->belongsTo(User::class);
    }
}
```

**Query:**

```php
$user = User::find(1);
$posts = $user->posts;
```

### 3️⃣ Many to Many

Relasi ini menghubungkan banyak user dengan banyak courses.

**Contoh Model:**

```php
class User extends Model {
    public function courses() {
        return $this->belongsToMany(Course::class);
    }
}
```

```php
class Course extends Model {
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
```

**Query:**

```php
$user = User::find(1);
$courses = $user->courses;
```

## 🚀 Menjalankan Seeder (Opsional)

Jika ingin menambahkan data dummy:

```sh
php artisan db:seed
```

## 📜 Lisensi

Project ini dilisensikan di bawah **MIT License**.

---

Selamat ngoding! 🚀
