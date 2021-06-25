<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php require_once "view/style.php" ?>
</head>

<body>

    <div class="left-sidebar-pro">
        <?php require_once "view/navbar.php" ?>
    </div>

    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php require_once "view/header.php" ?>

            <?php require_once "view/mobile-menu.php" ?>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Stok Barang</h5>
                                <h2><span class="counter">5000</span> <span class="tuition-fees">Barang</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Stok Persediaan</h5>
                                <h2><span class="counter">3000</span> <span class="tuition-fees">Barang</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Barang Retur</h5>
                                <h2><span class="counter">2000</span> <span class="tuition-fees">Barang</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Anggota</h5>
                                <h2><span class="counter">2000</span> <span class="tuition-fees">Anggota</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>University Earnings</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp graph-rp-dl">
                                            <p>All Earnings are in million $</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="sparkline13-list">
                                        <div class="sparkline13-graph">
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <div id="toolbar">
                                                    <select class="form-control dt-tb">
                                                        <option value="">Export Basic</option>
                                                        <option value="all">Export All</option>
                                                        <option value="selected">Export Selected</option>
                                                    </select>
                                                </div>
                                                <table id="table" data-toggle="table" data-pagination="true"
                                                    data-search="true" data-show-columns="true"
                                                    data-show-pagination-switch="true" data-show-refresh="true"
                                                    data-key-events="true" data-show-toggle="true" data-resizable="true"
                                                    data-cookie="true" data-cookie-id-table="saveId"
                                                    data-show-export="true" data-click-to-select="true"
                                                    data-toolbar="#toolbar">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state" data-checkbox="true"></th>
                                                            <th data-field="id">Kode</th>
                                                            <th data-field="namabarang" data-editable="false">Nama Barang</th>
                                                            <th data-field="jenis" data-editable="false">Jenis Barang</th>
                                                            <th data-field="harga" data-editable="false">Harga</th>
                                                            <th data-field="stok">Stok</th>
                                                            <th data-field="namaanggota" data-editable="false">Nama Anggota</th>
                                                            <th data-field="action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>BRG001</td>
                                                            <td>Minyak Makan</td>
                                                            <td>Sembako</td>
                                                            <td>Rp. 15.000</td>
                                                            <td>100</td>
                                                            <td>Sumiyah</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>BRG001</td>
                                                            <td>Minyak Makan</td>
                                                            <td>Sembako</td>
                                                            <td>Rp. 15.000</td>
                                                            <td>100</td>
                                                            <td>Sumiyah</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy;
                                <script>
                                document.write(new Date().getFullYear())
                                </script>. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery-price-slider.js"></script>
    <script src="../js/jquery.meanmenu.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/counterup/jquery.counterup.min.js"></script>
    <script src="../js/counterup/waypoints.min.js"></script>
    <script src="../js/counterup/counterup-active.js"></script>
    <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="../js/metisMenu/metisMenu.min.js"></script>
    <script src="../js/metisMenu/metisMenu-active.js"></script>
    <script src="../js/morrisjs/raphael-min.js"></script>
    <script src="../js/morrisjs/morris.js"></script>
    <script src="../js/morrisjs/morris-active.js"></script>
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="../js/sparkline/sparkline-active.js"></script>
    <script src="../js/calendar/moment.min.js"></script>
    <script src="../js/calendar/fullcalendar.min.js"></script>
    <script src="../js/calendar/fullcalendar-active.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/data-table/bootstrap-table.js"></script>
    <script src="../js/data-table/tableExport.js"></script>
    <script src="../js/data-table/data-table-active.js"></script>
    <script src="../js/data-table/bootstrap-table-editable.js"></script>
    <script src="../js/data-table/bootstrap-editable.js"></script>
    <script src="../js/data-table/bootstrap-table-resizable.js"></script>
    <script src="../js/data-table/colResizable-1.5.source.js"></script>
    <script src="../js/data-table/bootstrap-table-export.js"></script>
    <script src="../js/editable/jquery.mockjax.js"></script>
    <script src="../js/editable/mock-active.js"></script>
    <script src="../js/editable/select2.js"></script>
    <script src="../js/editable/moment.min.js"></script>
    <script src="../js/editable/bootstrap-datetimepicker.js"></script>
    <script src="../js/editable/bootstrap-editable.js"></script>
    <script src="../js/editable/xediable-active.js"></script>

</body>

</html>