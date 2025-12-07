# Lab10Web
# Nama : Vivit Nurul Hidayah
# NIM : 312410110
# Kelas : TI.24.A.1
# Mata Kuliah : Pemrograman Web
# Dosen : Agung Nugroho S.Kom, M.Kom

## 🧾 Informasi Praktikum

**Mata Kuliah:** Pemrograman Web
**Materi:** Object Oriented Programming (OOP) PHP
**Tujuan:**

* Memahami konsep dasar Class dan Object pada PHP
* Menerapkan OOP dalam program sederhana
* Membuat class library dan mengimplementasikan form input
* Menggunakan struktur modular dalam folder project

---

## 📁 Struktur Folder

```
lab10_php_oop/
│── index.php             # Menu utama (opsional untuk navigasi)
│── mobil.php             # Contoh implementasi OOP Class Mobil
│── form.php              # Class library untuk form OOP
│── form_input.php        # Implementasi form menggunakan Form Class
│── database.php          # Class untuk koneksi database
│── config.php            # Konfigurasi database
│── style.css             # File styling agar tampilan rapih
│── test.php              # File uji coba apakah PHP berjalan normal
└── README.md             # Dokumentasi project
```

---

## 🚀 Instalasi & Cara Menjalankan Program

### 1. Jalankan Apache (XAMPP)

Buka XAMPP → Start **Apache**
### 2. Simpan folder project ke:

```
C:\xampp\htdocs\lab10_php_oop\
```

### 3. Akses melalui browser:

| Program        | URL                                      |
| -------------- | ---------------------------------------- |
| Test PHP       | `localhost/lab10_php_oop/test.php`       |
| OOP Mobil      | `localhost/lab10_php_oop/mobil.php`      |
| Form OOP       | `localhost/lab10_php_oop/form_input.php` |
| Dashboard menu | `localhost/lab10_php_oop/`               |

> **Catatan:**
> `form.php` dan `database.php` tidak menghasilkan output karena merupakan class library.
> Output hanya muncul pada *form_input.php*, *mobil.php*, *index.php*, dan *test.php*.

---

## 🧪 Hasil Output

### 1. **Program Mobil OOP**

Menampilkan perubahan warna objek mobil serta implementasi class.

Output:

```
Mobil pertama
Warna mobilnya: Abu-abu
Mobil pertama ganti warna
Warna mobilnya: Merah

Mobil kedua
Warna mobilnya: Hijau
```

---

### 2. **Program Form OOP**

Form yang dihasilkan dari class library `form.php`:

📌 Field:

* NIM
* Nama
* Alamat

📌 Tampil ketika menjalankan `form_input.php`.
<img width="999" height="216" alt="image" src="https://github.com/user-attachments/assets/200f1996-2b1c-4fb6-a30d-cf75ce962579" />


---

### 3. **Database**

File `database.php` sudah mendukung:

* Query
* Insert
* Update
* Delete

---

## Dokumentasi Screenshots

<img width="999" height="216" alt="image" src="https://github.com/user-attachments/assets/43c8fb35-cbbe-4240-8993-7799cc12fd8a" />

* Folder project di htdocs
* Tampilan output `mobil.php`
* Tampilan form `form_input.php`
* Tampilan test server `test.php`
---

## 📌 Kesimpulan

Pada praktikum ini telah berhasil diterapkan konsep **Object Oriented Programming pada PHP** melalui implementasi class dan object, pembuatan **class library modular**, penggunaan **Form OOP**, serta dasar koneksi database. Program berjalan pada lingkungan server lokal menggunakan XAMPP.
