<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Maskan Data</div>
                    <div class="card-body">
                        <form action="tugasoopkelas.php" method="post">
                            <div class="form-group">
                                <label for="">Kepala Sekolah</label> 
                                <input type="text" name="kepsek" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Wakil Kepala</label> 
                                <input type="text" name="wakasek" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kurikulum</label> 
                                <input type="text" name="kurikulum" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Wali Kelas</label> 
                                <input type="text" name="wali" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ketua Murid</label> 
                                <input type="text" name="km" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Wakil Ketua</label> 
                                <input type="text" name="wk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type"submit" name="masukan" class="btn btn-success">Masukan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content --> 

    <!-- Footer -->
    <footer>
        <br><center>&copy; SMK ASSALAAM BANDUNG</center>
    </footer>

    <!-- Enf Footer -->

    <!-- JS -->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
</body>
</html>