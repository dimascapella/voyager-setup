## Laravel + Voyager CMS + Tailwind

### Setup

1. Clone Project
    ```go
    git clone https://github.com/dimascapella/voyager-setup.git
    ```

2. Install Dependencies
    ##### composer (laravel)
    ```go
    composer install
    ```

    ##### npm (tailwind)
    ```go
    npm install
    ```

3. install PHP-GD (*jika sudah install lanjutkan ke step selanjutnya*)
    ##### linux user
    ```go
    sudo apt-get install php-gd
    // Restart Apache
    sudo service apache2 restart
    ```

    ##### Windows user
    buka file ``php.ini`` (*untuk default directory ``xampp/php/php.ini``) dan cari extension ``;extension=gd`` selanjutnya hapus ``;`` dan restart terakhir restart xampp

4. Install Voyager
    ##### Get Voyager Package
    ```go
    composer require tcg/voyager
    ```

    ##### Install Voyager Beserta Dummy Data
    ```go
    php artisan voyager:install --with-dummy
    ```

    *note: data default akun admin*
    ```go
    email: admin@admin.com
    password: password
    ```

5. Install Tailwind
    ##### Link Tailwind
    untuk langkah-langkah install tailwind ada di link berikut:
    [Laravel Tailwind](https://tailwindcss.com/docs/guides/laravel)

6. Voyager Admin Panel
    #### Link Voyager Panel
    untuk link buka [Link ini](http://127.0.0.1:8000/admin/login)

    #### Tampilan awal Admin Panel
    untuk default table yang ada di voyager adalah roles, users, pages, posts, categories
    ![Admin Panel](https://github.com/dimascapella/voyager-setup/tree/master/public/image-md/admin-panel.png "Admin Panel")

    #### Membuat tabel baru
    untuk membuat tabel baru, pilih menu ``Tools > Database > Create New Table``, untuk nama tabel pastikan semua lowercase dan harus mirip seperti yang dibuat di laravel serta tipe kolom sama persis seperti yang ada di database (untuk bagian ini, bisa memilih dibuatkan model atau bisa buat sendiri, jika dibuatkan oleh voyager nantinya lokasi file ada di ``App\NamaModel``)
    ![Contoh Tampilan](https://github.com/dimascapella/voyager-setup/tree/master/public/image-md/new-table.png "Contoh Tampilan")

    #### Membuat BREAD(CRUD)
    untuk membuat BREAD(CRUD), pilih menu ``Tools > BREAD > (pilih tabel) Add BREAD to this table``, pada bagian ini terdapat banyak form, untuk bagian ``Model Name`` jika dibuatkan oleh voyager maka biarkan seperti itu, jika tidak maka harus menggantinya sendiri, untuk beberapa form selanjutnya boleh dikosongkan. Selanjutnya scroll kebawah untuk mengatur form input setiap kolom (*untuk bagian ``created_at`` dan ``deleted_at`` hilangkan semua checklist dan pastikan sudah membuat model terlebih dahulu ketika membuat model secara manual) dan selanjutnya klik submit
    ![Contoh Tampilan](https://github.com/dimascapella/voyager-setup/tree/master/public/image-md/bread.png "Contoh Tampilan")

    #### Menambahkan Relasi
    membuat relasi tetap dihalaman ``Tools > BREAD > Edit``, scroll paling bawah dan klik tombol ``Create Relationship``, pada bagian ini nanti akan tampil semua tabel yang akan dijadikan relasi dan jika sudah memilih tabel yang ingin dijadikan relasi, maka harus menuliskan path lokasi model tersebut (*jika table yang dibuatkan dari voyager, maka tidak perlu diisikan, khusus untuk tabel user harus di tambahkan*) dan pada menu dibawah kita bisa memilih data apa yang akan ditampilkan dari tabel ``User``
    ![Contoh Tampilan](https://github.com/dimascapella/voyager-setup/tree/master/public/image-md/relasi.png "Contoh Tampilan")

    #### Tampilan Menu Setelah Membuat Model/Tabel
    jika membuat tabel baru, maka secara otomatis akan tampil pada menu dengan nama dari tabelnya
    ![Contoh Tampilan](https://github.com/dimascapella/voyager-setup/tree/master/public/image-md/menu.png "Contoh Tampilan")

    #### Re-order Menu
    Kita bisa mengurutkan menu yang ada pada voyager admin panel dengan cara membuka ``Tools > Menu Builder > Edit (admin)``, untuk mengurutkan tinggal drag and drop saja
    ![Contoh Tampilan](https://github.com/dimascapella/voyager-setup/tree/master/public/image-md/reorder.png "Contoh Tampilan")

    #### Tampilan Form
    Form yang dibuat sebelumnya akan terlihat seperti digambar (*untuk data relasi akan secara otomatis muncul semua pada form dengan tipe input dropdown*)
    [Contoh Tampilan]: https://github.com/dimascapella/voyager-setup/tree/master/public/image-md/form.png "Contoh Tampilan"
