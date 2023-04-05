# ▶️ Program Penghitung Gaji Karyawan
Program ini dibuat untuk menghitung gaji total seorang karyawan berdasarkan gaji pokok, golongan, status pernikahan, dan jumlah anak.

# ▶️ Cara Penggunaan
Pastikan Python 3 sudah terinstal di komputer Anda.
Unduh atau salin kode program pada file employee.py.
Jalankan program dengan perintah python employee.py.
Program akan meminta input dari user untuk mengisi nilai nama, gaji, golongan, dan status pernikahan. Jika status pernikahan adalah "y", maka program akan meminta pengguna untuk memasukkan jumlah anak. Jika status pernikahan adalah "n", maka program akan secara otomatis mengatur jumlah anaknya sebagai 0.
Setelah pengguna mengisi semua nilai yang diminta, program akan menghitung gaji total karyawan dan mencetaknya ke layar.
# ▶️ Cara Kerja Program
Program akan membuat objek karyawan dengan kelas Employee dan mengisi nilai atributnya dengan input dari pengguna.
Metode get_salary akan dipanggil untuk menghitung gaji total karyawan.
Metode get_salary akan menghitung tunjangan golongan, tunjangan anak, dan tunjangan istri (jika ada).
Metode get_salary akan menghitung pajak berdasarkan gaji total sebelumnya.
Metode get_salary akan menghitung bonus berdasarkan golongan dan jumlah anak.
Metode get_salary akan menghitung gaji total setelah pajak dan bonus.
Gaji total karyawan akan dikembalikan sebagai nilai kembali dari metode get_salary.
Program akan mencetak gaji total karyawan ke layar.
