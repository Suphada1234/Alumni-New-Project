<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสมาชิกศิษย์เก่า</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<header class="header-section">
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div style="text-align: center;">
                        <h2>ระบบสมาชิกศิษย์เก่า</h2>
                        <h3>Nakhon Pathom Rajabhat University</h3>
                        <img src="<?php echo base_url(); ?>img/npru.png">
                    </div>
                </div>
                <div class="col-lg-2 text-right col-md-2">
                    <!-- XXXX -->
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="index"><a href="<?php echo base_url(); ?>index.php">หน้าแรก</a></li>


                    <li><a href="<?php echo base_url(); ?>index.php/welcome/login">เข้าสู่ระบบ</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>index.php/welcome/reg_alumni">ลงทะเบียน</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    <div class="nav-item" style="background-color: #fff;">
    </div>
</header>
<style>
    .register {
        background-color: #e7ab3c;
        color: #fff;
    }
</style>

<body>
    <br>
    <br>
    <div class="container">
        <div class="contact-widget">
            <div class="cw-item">
                <div class="ci-text">
                    <h3>รายละเอียด</h3>
                </div>
            </div>
        </div>
        <?php
        foreach ($datapersonal as $row) {

            echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';

            echo '<thead>
                    <tr>
                        <th colspan="3" style="background-color:#e7ab3c;color:#fff;" >ข้อมูลส่วนตัว</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:130px;">ชื่อ - นามสกุล</td>
                        <td>';
            echo $row->name;
            echo ' </td>
            <td rowspan="5"  style="width:200px;" >';
            echo '<img style="width:175px;height:220px; border:1px solid #e7ab3c; border-radius: 4px; position:absolute;" id="image"
                        src="' . base_url() . '/upload/' . $row->img . '">';
            echo ' </td>
                    </tr>
                    <tr>
                        <td>เพศ</td>
                        <td>';
            echo $row->gender;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>วันเดือนปีเกิด</td>
                        <td>';
            echo $row->birthday;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td colspan="2">';
            echo $row->address;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์</td>
                        <td colspan="2">';
            echo $row->tel;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td colspan="2">';
            echo $row->facebook;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td colspan="2">';
            echo $row->email;
            echo ' </td>
                    </tr>
                </tbody>';

            echo '</table>';


            echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';

            echo '<thead>
                    <tr>
                        <th colspan="2"  style="background-color:#e7ab3c;color:#fff;"  >ข้อมูลการศึกษา</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:160px;">รหัสนักศึกษา</td>
                        <td>';
            echo $row->student_id;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>หมู่เรียน</td>
                        <td>';
            echo $row->group;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>สาขา</td>
                        <td>';
            echo $row->branch;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>คณะ</td>
                        <td>';
            echo $row->faculty;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ภาคการศึกษา</td>
                        <td>';
            echo $row->semester;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ระดับการศึกษา</td>
                        <td>';
            echo $row->education_level;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ปีการศึกษาที่เข้า</td>
                        <td>';
            echo $row->year_int;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ปีการศึกษาที่จบ</td>
                        <td>';
            echo $row->year_out;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>
                        ผลงานที่โดดเด่น</td>
                        <td>';
            echo $row->outstanding_work;
            echo ' </td>
                    </tr>
                </tbody>';

            echo '</table>';


            echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';

            echo '
                <thead>
                    <tr>
                        <th colspan="2"  style="background-color:#e7ab3c;color:#fff;"  >ข้อมูลการทำงาน</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:160px;">ชื่อบริษัท</td>
                        <td>';
            echo $row->company;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ตำแหน่งงาน</td>
                        <td>';
            echo $row->position;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td>';
            echo $row->address;
            echo ' </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์บริษัท</td>
                        <td>';
            echo $row->tel;
            echo ' </td>
                    </tr>
                </tbody>';


            echo '</table>';
        };



        ?>
    </div>
</body>
<?php include("footer.php") ?>