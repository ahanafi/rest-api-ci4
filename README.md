## Build RESTful API with CodeIgniter 4

<div style="width: 100%;text-align: center;">
    <img src='https://scontent-nrt1-1.cdninstagram.com/v/t51.2885-15/e35/127399826_437749454053166_7503781791875061262_n.jpg?_nc_ht=scontent-nrt1-1.cdninstagram.com&_nc_cat=102&_nc_ohc=CSKQuqDYDSAAX-uF9Pi&tp=1&oh=f04a94c9741e706cb9215428e17d9ba3&oe=5FFA40D9' width="420px" align="center">
</div>
<br>

1. Slide Presentasi <a href='https://docs.google.com/presentation/d/1YZBexN6ZAEAQ1b-ta1zot5pM7I3VJXDP6vK-kH-lvac/edit?usp=sharing'>[DOWNLOAD]</a>
2. Project <a href='https://github.com/ahanafi/rest-api-ci4/archive/main.zip'>[DOWNLOAD]</a>
3. Video Ngobar : [Season 1](https://www.youtube.com/watch?v=o-YLFnojRP0) | [Season 2](https://www.youtube.com/watch?v=2QvlrYP4-rA)

### Cara Install

1. Silahkan download project ini dengan menggunakan link di atas.
2. Extract file zip-nya.
3. Ubah nama folder dari **rest-api-ci4-main** menjadi : **restful-api**
4. Pindahkan folter tersebut ke directory :
   - ke **C:/xampp/htdocs/** xampp Anda (Jika menggunakan XAMPP) atau ke,
   - ke **/var/www/html/** (untuk pengguna Linux)
5. Buat sebuah database dengan nama **db_restful_api**
6. Import file SQL yang ada di folder *database* ke database yang baru dibuat.
7. Ubah file **config.env** yang ada di luar folder project menjadi **.env**
8. Kemudian buka terminal atau Command Prompt dari folder project tadi.
9. Setelah itu buka **http://localhost/restful-api/public/** di web browser.

### Tool yang harus di persiapkan :
1. Text Editor, kamu bisa gunakan beberapa teks editor berikut :
   - [Sublime Text](https://www.sublimetext.com/3)
   - [Visual Studio Code](https://code.visualstudio.com/)
   - [Notepad++](https://notepad-plus-plus.org/downloads/)
   
   Atau bisa juga gunakan IDE seperti [PhpStorm](https://www.jetbrains.com/phpstorm/).
2. Web Browser, bisa pakai [Google Chrome](https://www.google.com/intl/id/chrome/), [Mozilla Firefox](https://www.mozilla.org/id/firefox/browsers/), etc.
3. REST Client, gunakan [Insomnia Core](https://updates.insomnia.rest/downloads/windows/latest) atau [Postman](https://www.postman.com/downloads/).
4. Database : MySQL
5. PHP minimal versi 7.2 ([Klik disini](https://tekno-g.blogspot.com/2018/07/cara-cek-versi-xampp-dan-php-di-windows.html) untuk mengetahui versi php yg terinstall di komputer).
6. CodeIgniter versi 4

Bingung? Tanya aja ke [sini](http://wa.me/6283824055826)


### API Endpoint

| Method    | Enpoint           | Description               |
| -------   | -------           | --------------------------|
|   GET     | /users            | Show all users            |
|   GET     | /users/**{id}**   | Show single user by **id**|
|   POST    | /users            | Create mew user           |
|   PUT     | /users/**{id}**   | Update user with an **id**|
|   DELETE  | /users/**{id}**   | Delete user by **id**     |
