<?php include("head.php") ?>
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
                                <form action="<?php echo base_url('index.php/manage/info_list'); ?>" method="post">
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



