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
                        <img src="<?php echo base_url(); ?>upload/npru.png">
                        <?php if(isset($_SESSION["name"])){
                                echo '<h5>ผู้ใช้งาน : '.$_SESSION["name"].'</h5>';
                            };
                        ?>
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
                    <li class="index"><a href="<?php echo base_url(); ?>index.php/welcome/homelogin">หน้าแรก</a></li>
                    <li class="edit"><a href="<?php echo base_url(); ?>index.php/welcome/edit">แก้ไขประวัติส่วนตัว</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/manage/logout" >ออกจากระบบ</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    <div class="nav-item" style="background-color: #fff;">
    </div>
</header>
<style>
    .index {
        background-color: #e7ab3c;
        color: #fff;
    }
</style>
<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ประชาสัมพันธ์</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <br>
</div>
<!--  -->

<!--==========================
    Carousel-slide
  ============================-->
  <div class="container"> 
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

<div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo base_url(); ?>upload/banner1920x600-01.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url(); ?>upload/banner1920x600-02.jpg" alt="Second slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url(); ?>upload/banner1920x600-03.jpg" alt="Third slide">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
<!-- -->

<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
            <?php //echo $_SESSION["name"] ; 
            ?>
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ข้อมูลศิษย์เก่า</h3>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ</th>
                        <th>หมู่เรียน</th>
                        <th>ปีการศึกษาแรกเข้า</th>
                        <th>จังหวัด</th>
                        <!-- xxxxx -->
                        <th>แสดง</th>
                    </tr>
                </thead>
                 <tbody>
                    <?php foreach ($query->result_array() as $rs) { ?>
                        <tr>
                            <td><?php echo $rs['student_id']; ?></td>
                            <td><?php echo $rs['name']; ?></td>
                            <td><?php echo $rs['group']; ?></td>
                            <td><?php echo $rs['year_int']; ?></td>
                            <td><?php echo $rs['province']; ?></td>
                            <!-- <td> อยากแสดงอะไรเพิ่มเองเลยนะ</td> -->

                            <td>
                                <form action="<?php echo base_url('index.php/manage/info_list_login'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $rs['student_id']; ?>">
                                    <button class="btn btn-warning" name="submit">ดูรายละเอียด</button>
                                </form>
                            </td>

                        </tr>


                    <?php }; ?>
                </tbody>
            </table>
            <br>
            <br>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
<!--  -->

    