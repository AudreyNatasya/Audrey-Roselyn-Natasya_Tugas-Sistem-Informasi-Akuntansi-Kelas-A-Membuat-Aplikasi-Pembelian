## Installation

* clone the repo and `cd` into it
* `composer install`
* Rename or copy `.env.example` file to `.env`
* `php artisan key:generate`
* generate the symbolic link `php artisan storage:link`

### Database

* Set your database credentials in your `.env` file
* migrate and seed the normal way with `php artisan migrate --seed`

### Mail

You need to configure your **Mail** credentials in your '.env' file, in order to enable the registration process and checkouts. if you are using the gmail service
make sure the [less secure app access](https://myaccount.google.com/lesssecureapps) is turned on.

* Set your mail credentials in your `.env` file
* make sure your machine has turned off outbound mail scanning(if you're using antivirus or some kind of firewall)

Launch the app
```bash
 php artisan serve
 ```

## Screenshots Aplikasi Pembelian (Gambaran tampilan aplikasi)

### Home page :point_down:
### Home page ini merupakan halaman utama yang ditampilkan ketika kita pertama kali masuk ke aplikasi ini. Halaman utama ini menampilkan sejumlah barang-barang yang tersedia yang nantinya pelanggan bisa memilihnya untuk mereka beli.
### Di halaman ini juga terdapat tombol "Shop Now", yang artinya jika pelanggan ingin membeli mereka bisa mengklik tombol itu. 
### Di halaman ini juga terdapat tombol "Search for Porduct", yang artinya jika pelanggan ingin mencari secara spesifik barang yang mereka ingin beli, maka mereka bisa mengklik tombol itu.
<kbd>![home page](https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/home.png)</kbd>
### Cart :point_down:
### Beberapa fungsi halaman cart:
### 1. Menyimpan Barang yang Dipilih: 
- Pengguna dapat menambahkan barang ke keranjang belanja dari berbagai halaman produk.
- Halaman cart menyimpan daftar barang yang telah dipilih oleh pengguna sepanjang sesi belanja.
### 2. Melihat dan Mengelola Barang: 
- Disini pengguna dapat mengubah kuantitas, menghapus barang, atau melakukan perubahan lainnya sebelum melakukan proses pembayaran.
### 3. Perhitungan Total Harga:
- Halaman cart biasanya menampilkan total harga dari seluruh barang yang ada di keranjang.
- Ini mencakup harga barang, pajak, biaya pengiriman, dan diskon yang berlaku.
### 4. Mendorong Checkout:
- Terdapat tombol checkout yang mengarahkan pengguna ke halaman pembayaran setelah mereka memeriksa dan memutuskan untuk melanjutkan transaksi.
### 5. Pemberitahuan Ketersediaan Barang:
- Pengguna mungkin menerima pemberitahuan jika ada perubahan ketersediaan barang yang telah ditambahkan ke keranjang
<kbd>![cart](https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/cart.png)</kbd>
### user order :point_down:
### Halaman "User Order" pada aplikasi e-commerce memiliki beberapa fungsi utama yang dirancang untuk memberikan pengguna pengalaman yang lancar dan efisien dalam melakukan proses pemesanan dan melacak status pesanan mereka. Berikut adalah beberapa fungsi umum dari halaman "User Order" pada aplikasi e-commerce:
### 1. Order ID
- Pengguna dapat melihat riwayat pesanan mereka, termasuk detail pesanan sebelumnya seperti barang yang dibeli, jumlah, dan order date. 
- Informasi ini berguna bagi pengguna untuk merinci pembelian mereka dan memastikan bahwa pesanan telah diproses dengan benar.
### 2. Billing details
- Pengguna dapat melihat riwayat pembayaran mereka termasuk metode pembayaran merekadan status pembayaran mereka.
### 3. Shipping setails/ address
- Pengguna dapat melihat ke alamat mana barang mereka akan diantarkan
### 4. Order details
- Menampilan pesanan yang pelanggan pesan termasuk berapa sub total yang harus dibayar dan siapa nama pemesannya. 
<kbd>![user profile](https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/user_order.png)</kbd>
### admin dashboard :point_down:
### Halaman admin dashboard dalam aplikasi ini  memiliki beberapa fungsi kunci yang penting untuk pengelolaan dan pengawasan operasional. Berikut adalah beberapa fungsi umum dari halaman admin dashboard pada aplikas ini:
### 1. Pemantauan Penjualan:
- Melihat secara real-time atau historis data penjualan, termasuk jumlah pesanan, nilai transaksi, dan produk terlaris.
- Analisis performa penjualan untuk periode tertentu.
- Analisis berapa total customers dan berapa jumlah harga order terakhir kali. 
### 2. Manajemen Produk:
- Menambah, mengedit, atau menghapus produk dari katalog.
- Memantau stok barang dan menerima pemberitahuan jika stok mendekati batas minimum.
- Mengelola kategori produk.
### 3. Pengelolaan Pesanan:
- Melihat pesanan yang sedang diproses, dikirim, atau selesai.
- Mengonfirmasi pembayaran dan mengelola pengiriman.
- Menangani permintaan pengembalian barang.

<kbd>![admin dashboard](https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/admin_dashboard.png)</kbd>

### responsive 👇:
### Halaman responsif pada aplikasi e-commerce memiliki beberapa fungsi utama yang sangat penting untuk pengalaman pengguna yang baik dan dapat meningkatkan kinerja bisnis.  Halaman responsif memastikan konsistensi pengalaman pengguna di berbagai perangkat, seperti desktop, tablet, dan ponsel pintar. Ini penting karena pelanggan dapat mengakses toko online dari berbagai perangkat, dan hal ini memberikan pengalaman yang nyaman dan mudah digunakan.

<kbd><img src="https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/orders_on_phone.jpg" alt="drawing" height="350"/></kbd>&nbsp;&nbsp;&nbsp;<kbd><img src="https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/adminORD_on_phone.jpg" alt="drawing" height="350"/></kbd>&nbsp;&nbsp;&nbsp;<kbd><img src="https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/cart_on_phone.jpg" alt="drawing" height="350"/></kbd>&nbsp;&nbsp;&nbsp;<kbd><img src="https://github.com/kunal254/laravel-8-ecommerce/blob/main/public/screens/shop_on_phone.jpg" alt="drawing" height="350"/></kbd>

### Berikut adalah flowchart terkait sistem informasi pembelian 👇

![Audrey R Natasya_Tugas SIA SI Pembelian](https://github.com/AudreyNatasya/Aplikasi-e-commerce/assets/152130643/6458cf31-8f9d-4cf8-aaea-dab9b13f95d5)

### Berikut adalah  database terkait sistem informasi pembelian 👇
![Audrey R Natasya_Tugas SIA Database SI Pembelian](https://github.com/AudreyNatasya/Aplikasi-e-commerce/assets/152130643/d0c8835b-bd7e-458a-a04b-70e4037f5ba6)

### Berikut adalah  structure terkait sistem informasi pembelian 👇
![Audrey R Natasya_Tugas SIA Structure SI Pembelian](https://github.com/AudreyNatasya/Aplikasi-e-commerce/assets/152130643/f6cd2a8e-8223-4539-85bd-246d9587deb7)

### Berikut merupakan hasil laporan beserta penjelasan mengenai sistem informasi dan aplikasi sistem pembelian yang telah saya buat. Silahkan di klik yaa!. Terima kasih 😄
[Audrey Roselyn Natasya 12030122140296_Laporan Tugas SIA Aplikasi Pembelian.pdf](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya_Tugas-Sistem-Informasi-Akuntansi-Kelas-A-Membuat-Aplikasi-Pembelian/files/13538125/Audrey.Roselyn.Natasya.12030122140296_Laporan.Tugas.SIA.Aplikasi.Pembelian.pdf)
