<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <form action="/submit-form" Method="POST">
        <?= csrf_field() ?>
        <div style="display: flex; flex-direction: column; width: 500px; margin: auto; padding: 10px; color: blue; font-weight: bold;">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br>
    
            <label for="nim">NIM:</label>
            <input type="text" name="nim" id="nim" required><br>
    
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" required><br>
    
            <label for="matakuliah">Mata Kuliah:</label>
            <input type="text" name="matakuliah" id="matakuliah" required><br>
    
            <label for="dosen">Dosen Pengampu:</label>
            <input type="text" name="dosen" id="dosen" required><br>
    
            <label for="asisten">Asisten Praktikum:</label>
            <input type="text" name="asisten" id="asisten" required><br>
    
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
