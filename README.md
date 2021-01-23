## Dibuat untuk mengerjakan soal 2 tes API

Terdapat CRUD (Create, Read, Update and Delete) REST API untuk mengerjakan soal tes API.
- [(GET) /v1/product] List all barang
- [(GET) /v1/product/{product-id-existing-barang}] Get detail existing barang with product id of {product-id-existing-barang}
- [(POST) /v1/product] Generate new barang
  - Parameter:
    - name      -> 5 ~ 100 char, required
    - description  -> 5 ~ 255 char, required
    - price      -> double, not negative
    - created_at
    - updated_at
- [(PUT) /v1/product/{product-id-existing-barang}] Edit existing barang with product id of {product-id-existing-barang}
  - Parameter:
    - name      -> 5 ~ 100 char, required
    - description  -> 5 ~ 255 char, required
    - price      -> double, not negative
- [(DELETE) /v1/product/{product-id-existing-barang}] Delete existing barang with product id of {product-id-existing-barang}

Tidak lupa untuk Give exception ketika product id tidak ditemukan

# ci-rest-structure
CodeIgniter HMVC rest api structure with JWT integration

# Dependencies
```bash
PHP 5.x above
Composer [https://getcomposer.org/]
```

# Installation instructions

```bash
1. composer install
2. create database test_API
3. run migration by calling this url {BASE_PROJECT_URL}/migrate
```
# Jawaban

## [(GET) /v1/product] List all barang

Digunakan postman untuk menjalankan API List All Barang:

http://localhost/ci-rest-structure/v1/product

Berikut hasilnya:

![Get All Barang](https://raw.githubusercontent.com/farrasmuttaqin/ci-rest-structure/master/images/getAll.png)
<p align="center">Figure 1: Get All Barang</p>

## [(GET) /v1/product/{product-id-existing-barang}] Get detail existing barang with product id of {product-id-existing-barang}

Digunakan postman untuk menjalankan API Get detail existing barang with product id:

http://localhost/ci-rest-structure/v1/product/7

Berikut hasilnya:

![Get detail existing barang](https://raw.githubusercontent.com/farrasmuttaqin/ci-rest-structure/master/images/getDetail.png)
<p align="center">Figure 2: Get Detail Existing Barang</p>

## [(POST) /v1/product] Generate new barang

Digunakan postman untuk menjalankan API Generate new barang:

http://localhost/ci-rest-structure/v1/product

Berikut hasilnya:

![Generate new barang](https://raw.githubusercontent.com/farrasmuttaqin/ci-rest-structure/master/images/post.png)
<p align="center">Figure 3:  Generate new barang</p>

## [(PUT) /v1/product/{product-id-existing-barang}] Edit existing barang with product id of {product-id-existing-barang}

Digunakan postman untuk menjalankan Edit existing barang:

http://localhost/ci-rest-structure/v1/product/5

Berikut hasilnya:

![Edit existing barang](https://raw.githubusercontent.com/farrasmuttaqin/ci-rest-structure/master/images/put.png)
<p align="center">Figure 4:  Edit existing barang</p>

## [(DELETE) /v1/product/{product-id-existing-barang}] Delete existing barang with product id of {product-id-existing-barang}

Digunakan postman untuk menjalankan Delete existing barang:

http://localhost/ci-rest-structure/v1/product/5

Berikut hasilnya:

![Delete existing barang](https://raw.githubusercontent.com/farrasmuttaqin/ci-rest-structure/master/images/delete.png)
<p align="center">Figure 5:  Delete existing barang</p>

## Author
Hi there , i'm <a href="https://github.com/farrasmuttaqin/"> Muhammad Farras Muttaqin </a>

## License
This project is open source and available under the <a href="https://github.com/farrasmuttaqin/ci-rest-structure/blob/master/license.txt">MIT License</a>.

