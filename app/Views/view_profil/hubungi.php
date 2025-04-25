<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kontak Saya</title>
    <link rel="stylesheet" href="aset/hubungi.css" />
</head>

<body>
    <form id="formKontak">
        <label for="nama">Nama</label>
        <input type="text" id="nama" required />
        <br /><br />

        <label for="asal">Asal</label>
        <input type="text" id="asal" required />
        <br /><br />

        <label for="alasan">Alasan</label>
        <select id="alasan">
            <option value="ingin menanyakan layanan jasa">
                ingin menanyakan layanan jasa
            </option>
        </select>
        <br /><br />

        <button type="submit" id="btnKirimWA">Kirim WA</button>
    </form>

    <script>
        document.getElementById("formKontak").addEventListener("submit", function(event) {
            event.preventDefault();

            const nama = document.getElementById("nama").value;
            const asal = document.getElementById("asal").value;
            const alasan = document.getElementById("alasan").value;

            const pesan = `Nama: ${nama}%0AAsal: ${asal}%0AAlasan: ${alasan}`;
            const nomorTelepon = "6281234567890"; // Ganti dengan nomor WA kamu
            const urlWhatsApp = `https://wa.me/${nomorTelepon}?text=${pesan}`;

            window.location.href = urlWhatsApp;
        });
    </script>
</body>

</html>