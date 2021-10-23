<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TPQ Digital</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sb-admin/css/sb-admin-2.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- include navbar -->
        @include('partial.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- include topbar -->
            @include('partial.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <a href="/dashboard/santri/form" class="btn btn-primary mb-3 btn-sm">Tambah Data Santri</a>
                    <div class="row">
                        <div class="col-lg-12">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Nama Santri</th>
                                    <th>Gender</th>
                                    <th>Tgl Lahir</th>
                                    <th>Kota Lahir</th>
                                    <th>Nama Wali</th>
                                    <th>Alamat Wali</th>
                                    <th>HP</th>
                                    <th>Email</th>
                                    <th>Tgl Masuk</th>
                                    <th>Aktif</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $santri){ ?>
                                    <tr>
                                <td>{{$santri['nama_santri']}}</td>
                                <td>{{$santri['gender']}}</td>
                                <td>{{$santri['tgl_lahir']}}</td>
                                <td>{{$santri['kota_lahir']}}</td>
                                <td>{{$santri['nama_ortu']}}</td>
                                <td>{{$santri['alamat_ortu']}}</td>
                                <td>{{$santri['hp']}}</td>
                                <td>{{$santri['email']}}</td>
                                <td>{{$santri['tgl_masuk']}}</td>
                                <td>{{$santri['aktif']}}</td>
                                <td class="text-nowrap">
                                    <a href="/dashboard/santri/hapus/{{$santri['id_santri']}}" class="btn btn-danger btn-sm">Hapus</a>
                                    <a href="/dashboard/santri/form/{{$santri['id_santri']}}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/dashboard/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('partial.script')
</body>

</html>
