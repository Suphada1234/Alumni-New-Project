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
                    <li class="index"><a href="<?php echo base_url(); ?>index.php/welcome/index">หน้าแรก</a></li>
                    <li class="edit"><a href="<?php echo base_url(); ?>index.php/welcome/viewedit">ประวัติส่วนตัว</a></li>
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
.edit {
    background-color: #e7ab3c;
    color: #fff;
}
</style>

<!-- -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>แก้ไขประวัติส่วนตัว</h3>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>index.php/manage/edit" method="post" enctype="multipart/form-data" id="form1">
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">แก้ไขข้อมูลส่วนตัว</span></h3>
                <hr>

            
                <div class="form-row">
                    <div class="form-group col-md-3">

                    </div>
                    <div class="form-group col-md-9">
                        <input type="file" id="inputImage" class="form-control" onchange="readURL(this);"
                            accept="image/*" name="img"   >
                        <br>
                        <label>เลขบัตรประชาชน <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('card_id'); ?>" readonly >
                        <input type="text" value="<?php echo $this->session->userdata('card_id'); ?>" name="p_card" hidden>
                    </div>
                    <div class="form-group col-md-12">
                        <label>ชื่อ - นามสกุล</label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('name'); ?>" name="fname">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เพศ</label>
                    <select id="title" class="form-control" name="title">
                        <option selected><?php echo $this->session->userdata('gender'); ?></option>
                        <option>ชาย</option>
                        <option>หญิง</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>วันเดือนปีเกิด </label>
                        <input type="date" class="form-control" value="<?php echo $this->session->userdata('birthday'); ?>" name="birthday">
                    </div>
                    <div class="form-group col-md-12">
                        <label>ที่อยู่</label>
                        <textarea class="form-control" rows="3" name="p_address"><?php echo $this->session->userdata('address'); ?></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('tel'); ?>" name="p_tel">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('facebook'); ?>" name="facebook">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" name="email">
                    </div>
                </div>
                
                <!--  -->
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลการศึกษา</span></h3>
                <hr>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>รหัสนักศึกษา <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('student_id'); ?>" readonly>
                        <input type="text" value="<?php echo $this->session->userdata('student_id'); ?>" name="studentCode" id="studentCode" hidden >
                    </div>
                    <div class="form-group col-md-6">
                        <label>หมู่เรียน</label>
                        <input type="text" class="form-control"  value="<?php echo $this->session->userdata('group'); ?>" name="group">
                    </div>
                    <div class="form-group col-md-6">
                        <label>สาขา</label>
                        <input type="text" class="form-control"  value="<?php echo $this->session->userdata('branch'); ?>" name="branch">
                    </div>
                    <div class="form-group col-md-6">
                        <label>คณะ</label>
                        <input type="text" class="form-control"  value="<?php echo $this->session->userdata('faculty'); ?>" name="faculty">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ภาคการศึกษา</label>
            <select id="attend" class="form-control" name="semester" >
              <option selected><?php echo $this->session->userdata('semester'); ?></option>
              <option value="ภาคเรียนปกติ">ภาคเรียนปกติ</option>
              <option value="ภาคเรียนพิเศษ">ภาคเรียนพิเศษ</option>

            </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ระดับการศึกษา</label>
            <select id="attend" class="form-control" name="education_level" >
              <option selected><?php echo $this->session->userdata('education_level'); ?></option>
              <option value="ปริญญาตรี">ปริญญาตรี</option>
              <option value="ปริญญาโท">ปริญญาโท</option>
              <option value="ปริญญาเอก">ปริญญาเอก</option>


            </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีการศึกษาที่เข้า</label>
            <select id="attend" class="form-control" name="year_int" >
              <option selected><?php echo $this->session->userdata('year_int'); ?></option>
              <option value="2553">2553</option>
              <option value="2554">2554</option>
              <option value="2555">2555</option>
              <option value="2556">2556</option>
              <option value="2557">2567</option>
              <option value="2558">2558</option>
              <option value="2559">2559</option>

            </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีการศึกษาที่จบ</label>
            <select id="attend" class="form-control" name="year_out" >
              <option selected><?php echo $this->session->userdata('year_out'); ?></option>
              <option value="2553">2553</option>
              <option value="2554">2554</option>
              <option value="2555">2555</option>
              <option value="2556">2556</option>
              <option value="2557">2567</option>
              <option value="2558">2558</option>
              <option value="2559">2559</option>

            </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ผลงานที่โดดเด่น</label>
                        <textarea class="form-control" rows="3" name="outstanding_work"><?php echo $this->session->userdata('faculty'); ?></textarea>
                    </div>
                </div>
                
                <!--  -->
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลการทำงาน</span></h3>
                <hr>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>ตำแหน่งงาน</label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('position'); ?>"  name="position">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ชื่อบริษัท</label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('company'); ?>" name="company">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เบอร์โทรศัพท์บริษัท</label>
                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('tel'); ?>"  name="c_tel">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>ที่อยู่</label>
                        <textarea class="form-control" rows="3" name="c_address"><?php echo $this->session->userdata('address'); ?></textarea>
                    </div>
                </div>
                
                <!--  -->
                <br>

                <div>
                    <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">บันทึกข้อมูล</button>
                    <a href="index.php"><button type="button" class="btn btn-secondary">ยกเลิก</button> </a>
                </div>




            </form>

        </div>
    </div>
    <br>
    <br>
</div>


<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#image').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
};
</script>