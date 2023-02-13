<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Pendaftaran Coding Club</title>
</head>
<body>
    <div class="container">
        <fieldset>
        <h1 style="text-align: center">Form Pendaftaran Anggota Coding Club</h1>
            <form action="">
                <fieldset>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap : </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <label for=""> : </label>
                        <input type="number" name="nim" id="nim" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="smt">Semester : </label>
                        <select name="smt" id="smt" class="form-control">
                            <option value="semester1">Semester 1</option>
                            <option value="semester2">Semester 2</option>
                            <option value="semester3">Semester 3</option>
                            <option value="semester4">Semester 4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kls">Kelas : </label>
                        <select name="kls" id="kls" class="form-control">
                            <option value="ti">TI</option>
                            <option value="ti1">TI 1</option>
                            <option value="ti2">TI 2</option>
                            <option value="ti3">TI 3</option>
                            <option value="ti4">TI 4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tmpt">Tempat Lahir : </label>
                        <input type="text" name="tmpt" id="tmpt" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tgl">Tanggal Lahir : </label>
                        <input type="date" name="tgl" id="tgl" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="asal">Asal Sekolah & Jurusan : </label>
                        <input type="text" name="asal" id="asal" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="mtv">Motivasi Masuk Coding Club : </label>
                        <textarea name="mtv" id="mtv" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset </button>
                    </div>
                </fieldset>
            </form>
        </fieldset>
    </div>
</body>
</html>
