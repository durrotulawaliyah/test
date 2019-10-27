<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href=" assets/css/metro-bootstrap.css" rel="stylesheet">
        <!-- <link href="assets/css/metro-bootstrap-responsive.css" rel="stylesheet">-->
        <link href="assets/css/font-awesome.min.CSS" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen"  href="assets/js/jquery.dataTables.min.css" rel="stylesheet">
        <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
        <!-- Metro UI CSS JavaScript plugins -->
        <!--  <script src=" assets/js/load-metro.js"></script> -->

        <!-- Local JavaScript  -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#form1").validate();
               
            });
        </script>
        <!-- style -->
        <style type="text/css">
           label.error {
                    color: red;
                }
        </style>
        <!-- misc -->
        <title> Admin page </title>
    </head>
    <body class="metro">
        <!-- navi -->
        <div class="navigation-bar dark">
            <div class="navigation-bar-content container">
                <a href="/" class="element"><span class="icon-grid-view"></span><b>DATA RESELLER</b> <sup>SELAMAT DATANG DAN BERGABUNG HIJAB MUSLIMAH</sup></a>
                <span class="element-divider"></span>

                <a class="element1 pull-menu" href="#"></a>
                <ul class="element-menu">
                    <li>
                        <a href="index.php?mod=mahasiswa&pg=mahasiswa_view">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- content -->
        <div class="container">
            <h1>
             <!-- <a href="/"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                Forms<small class="on-right">definition</small> -->
            </h1>

            <div class="grid">
                <div class="row">
                    <div class="span3 no-tablet-portrait">
                        <nav>
                            <ul class="side-menu nicescroll-bar bg-green front color=menu " >
                            <li>
                                <a href="index.php?mod=mahasiswa&pg=mahasiswa_menu">Menu Utama</a>
                            </li>
                            <li>
                                <a href="index.php?mod=mahasiswa&pg=mahasiswa_form">Tambah Anggota </a>
                            </li>
                            <li>
                                <a href="index.php?mod=mahasiswa&pg=mahasiswa_view">Data Anggota </a>
                            <!-- </li>
                                <a href="index.php?mod=mahasiswa&pg=mahasiswa_view">Cetak </a>
                            </li> -->
                            </ul>
                        </nav>
                    </div>
                    <div class="span20">
                    <?php  
                        $pg = '';
            			/*
            			 * PHP Code untuk mendapatkan halaman view masing masing tabel
            			 */
            			if (!isset($_GET['pg'])) {
            			 	include('mahasiswa/mahasiswa_view.php');
            			} else {
            				$pg = $_GET['pg'];
            				$mod = $_GET['mod'];
            				include $mod . '/' . $pg . ".php";
            			}
            	    ?>   
                    </div>
                </div>
            </div>
        </div>
    <script>
    $(document).ready(function(){
        $('#table').DataTable();
        $('#table1').DataTable();
    });
</script>
    </body>
</html>