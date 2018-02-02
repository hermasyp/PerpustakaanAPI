# Simple Rest API using Lumen Framework.

## Documentation

This api is using for build Android app using Retrofit,Kotlin,and RX Java

**Lumen Version is v5.5.2**

## How to Start the Project

First you should change the database Configuration at env on root project with your mysql database configuration.

then you can Migrate the database with this code

```sh
php artisan migrate
```
get into project folder and type this into your Terminal

```sh
php -S localhost:8000 -t public
```

### Get All Books
**With Method GET**
```sh
http://localhost:8000/api/perpus
```

### Get Book by ID

**With Method GET**
```sh
http://localhost:8000/api/perpus/{id}
```

### Insert New Book

**With Method POST**

```sh
http://localhost:8000/api/perpus
```

**And Example Post JSON Like This**

```sh
{
    "judul_buku": "Android Programming",
    "pengarang_buku": "Muhammad Hermas Yuda P",
    "deskripsi_buku": "Ini adalah buku tentang Android Programming",
    "stok_buku": "90"
}
```

### Delete Book
**With Method DELETE**
```sh
http://localhost:8000/api/perpus/{id}
```

### Update Book

**With Method PUT**

```sh
http://localhost:8000/api/perpus/{id}
```

**And Example Post JSON Like This**

```sh
{
    "judul_buku": "Android Programming in a Nutshell",
    "pengarang_buku": "Muhammad Hermas Yuda P",
    "deskripsi_buku": "Ini adalah buku tentang Android Programming",
    "stok_buku": "90"
}
```
