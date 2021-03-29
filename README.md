# Project Magang

Kalau mau run via php cli ketik command di bawah ini menggunakan CMD/terminal, pastikan di dalam direktori magang

`php -S 127.0.0.1:8000`

lalu buka postman/aplikasi REST API atau sejenisnya.

`http://127.0.0.1:8000/api/upload.php`

atau

`http://127.0.0.1/magang/api/upload.php`

gunakan method `POST`, dengan tipe  `multipart/formdata`
dengan variable `document` dan tambahkan file.

 klik tab `HEADER`
tambahkan: 

 `Accept : application/json`
 `Content-Type: multipart/form-data`

