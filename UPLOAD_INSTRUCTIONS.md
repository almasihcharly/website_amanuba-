# Cara Mengupload Foto Kamar Deluxe

## Langkah-langkah:

1. **Siapkan Foto Kamar Deluxe**
   - Pastikan foto dalam format JPG atau PNG
   - Ukuran ideal: 1740x800 pixel (landscape)
   - Nama file: `deluxe-room.jpg`

2. **Upload Foto**
   - Copy foto kamar Deluxe ke folder:
   ```
   c:\xampp\htdocs\booking-amanuba\public\images\rooms\
   ```
   - Pastikan nama file adalah `deluxe-room.jpg`

3. **Refresh Website**
   - Buka website: http://127.0.0.1:8000
   - Tekan F5 untuk refresh halaman
   - Foto baru akan muncul di kamar Deluxe

## Lokasi File:
- **Home Page**: `resources/views/pages/home.blade.php` (baris 128-131)
- **Rooms Page**: `resources/views/pages/rooms.blade.php` (baris 120-123)
- **Gambar**: `public/images/rooms/deluxe-room.jpg`

## Backup:
Jika foto tidak muncul, website akan otomatis menampilkan gambar default dari Unsplash.

## Note:
Sistem sudah siap menampilkan foto kamar Deluxe Anda. Setelah Anda mengupload foto ke lokasi yang ditentukan, refresh website untuk melihat perubahan.
