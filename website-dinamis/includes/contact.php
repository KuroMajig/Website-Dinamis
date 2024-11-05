<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Website Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    

    <!-- Contact Section -->
    <div class="container my-5">
        <h1>Kontak Kami</h1>
        <p>Jika Anda memiliki pertanyaan, saran, atau komentar, silakan isi formulir di bawah ini. Kami akan segera menghubungi Anda.</p>

        <form>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Tuliskan pesan Anda" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

        <hr>

        <h2>Informasi Kontak</h2>
        <p><strong>Email:</strong> info@beritat terkini.com</p>
        <p><strong>Telepon:</strong> +62 812 3456 7890</p>
        <p><strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta, Indonesia</p>
    </div>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
