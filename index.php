<!DOCTYPE html>
<?php
$program_obj = json_decode(file_get_contents("assets/json/program.json"));
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?= $program_obj->description ?>" />
    <meta name="keywords" content="<?= $program_obj->keywords ?>">
    <meta name="author" content="หลักสูตรวิทยาการข้อมูล - มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์" />
    <title>หลักสูตรวิทยาการข้อมูล - มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</title>
    <?php include('layouts/style.php'); ?>
</head>

<body id="page-top">
    <?php include('layouts/navigation.php'); ?>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start kanit">
                        <h1 class="display-3 lh-1 mb-3">รับสมัครนักศึกษา (ปริญญาตรีภาคจันทร์-ศุกร์ และภาคเสาร์-อาทิตย์)</h1>
                        <p class="lead fw-normal text-muted mb-5">หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ รับสมัครนักศึกษา TCAS (ปริญญาตรี จันทร์-ศุกร์ และภาคเสาร์-อาทิตย์) ตั้งแต่วันนี้เป็นต้นไป ดูรายละเอียดและกรอกใบสมัครได้ที่นี่</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a class="me-lg-3 mb-4 mb-lg-0" href="https://ent.vru.ac.th/Webregister/pages/index_insert_nm.php?fct_id=1" target="_blank">
                                <button class="btn btn-primary btn-lg"> <i class="bi-chat-text-fill me-2"></i> สม้ครเรียน</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="assets/img/logo.jpeg" class="rounded-circle">
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4 kanit" title="คำคมนี้ชี้ให้เห็นถึงความสำคัญของข้อมูลในการตัดสินใจที่มีความน่าเชื่อถือและสามารถพิสูจน์ได้">
                        "หากปราศจากข้อมูล คุณก็แค่เป็นอีกคนที่มีความคิดเห็น - Without data, you're just another person with an opinion. "
                    </div>
                    <div class="h2 fs-5 text-white mb-4 kanit">
                        W. Edwards Deming, ผู้เชี่ยวชาญด้านการบริหารและการควบคุมคุณภาพ
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- About Major section-->
    <section id="about">
        <div class="container px-5">
            <h2 class="text-center">เกี่ยวกับหลักสูตร</h2>


            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ชื่อหลักสูตร</th>
                            <td>
                                <?= $program_obj->fullnameth ?> |
                                <?= $program_obj->fullnameen ?>
                            </td>
                        </tr>
                        <tr>
                            <th>ชื่อปริญญาและสาขาวิชา</th>
                            <td>
                                <?= $program_obj->degree_fullnameth ?> |
                                <?= $program_obj->degree_fullnameen ?> <br>
                                <?= $program_obj->degree_intnameth ?> |
                                <?= $program_obj->degree_intnameen ?>
                            </td>
                        </tr>
                        <tr>
                            <th>จำนวนหน่วยกิต</th>
                            <td><?= $program_obj->credits ?></td>
                        </tr>
                        <tr>
                            <th>รูปแบบและประเภท</th>
                            <td><?= $program_obj->time ?> | <?= $program_obj->type ?> </td>
                        </tr>
                        <tr>
                            <th>ภาษาที่ใช้</th>
                            <td><?= $program_obj->language ?></td>
                        </tr>
                        <tr>
                            <th>สถานที่</th>
                            <td><?= $program_obj->location ?></td>
                        </tr>
                        <tr>
                            <th>ติดต่อเรา</th>
                            <td>
                                <?= $program_obj->email ?> <br>
                                <?= $program_obj->tel ?> <br>
                                <a href="/"><?= $program_obj->www ?><a> <br>
                            </td>
                        </tr>
                        <tr>
                            <th>อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา</th>
                            <td>
                                <?php foreach ($program_obj->job as $job) { ?>
                                    <?= $job->job ?> <br>
                                <?php } ?>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Basic features section-->
    <section class="bg-light">
        <div class="container px-5">
            <h2 class="mb-4">Technology Stack กับการคอร์สที่เปิดสอน</h2>
            <p class="lead fw-normal text-muted mb-4">ชุดของเครื่องมือ, เทคโนโลยี, และภาษาที่ใช้ในการจัดการกับข้อมูล, การวิเคราะห์, การสร้างโมเดลทางสถิติ, และการทำงานเกี่ยวกับการเรียนรู้ของเครื่อง (Machine Learning) เพื่อช่วยให้การตัดสินใจโดยอิงจากข้อมูลมีความแม่นยำและมีประสิทธิภาพยิ่งขึ้น </p>
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="px-5 px-sm-0"><img class="img-thumbnail" src="assets/img/dt-stack-2024-2025.png" alt="technology stack for data science" /></div>
                </div>
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <?php foreach ($program_obj->learn as $learn) { ?>
                                    <tr>
                                        <td>
                                            <label><?= $learn->year_std ?></label>
                                            <p class="text-muted"><?= $learn->learn_std ?></p>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Structure features section-->
    <section class="" id="structure">
        <div class="container px-5">
            <h2 class="mb-4 text-center">โครงสร้างหลักสูตร</h2>
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-8">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>หมวดวิชา</th>
                                    <th>จำนวนหน่วยกิต (หน่วยกิต)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($program_obj->structure as $structure) { ?>
                                    <tr>
                                        <th><span style="padding:<?= substr_count($structure->structure, '.') * 20 ?>px;"></span><?= $structure->structure ?></th>
                                        <td><?= $structure->total ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Plan -->
    <section class="bg-light" id="plan">
        <div class="container px-5  text-center">
            <h2>แผนการเรียน</h2>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php
                    $semesters = ["year1_1", "year1_2", "year2_1", "year2_2", "year3_1", "year3_2", "year4_1", "year4_1"];
                    ?>
                    <?php foreach ($semesters as $semester) { ?>
                        <div class="carousel-item">
                            <div>
                                <h3>Semester x/y</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th>หมวดวิชา</th>
                                                <th>รหัสวิชา</th>
                                                <th>ชื่อวิชา</th>
                                                <th>หน่วยกิต</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($program_obj->plan->{$semester} as $course) { ?>
                                                <tr>
                                                    <td><?= $course->course ?></td>
                                                    <td><?= $course->course_code ?></td>
                                                    <td><?= $course->course_name ?></td>
                                                    <td><?= $course->course_credits ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">ก่อนหน้า</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">ต่อไป</span>
                </button>
            </div>



        </div>
    </section>

    <!-- Lecturers -->
    <section class="" id="lecturer">
        <div class="container px-5  text-center">
            <h2>อาจารย์ในหลักสูตร</h2>
            <?php
            $people_obj = json_decode(file_get_contents("assets/json/teacher.json"), true);
            $people = $people_obj["people"];
            ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gutter-2">
                <?php foreach ($people as $row) { ?>

                    <div class="col p-1" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100">
                            <img src="<?= $row["image"] ?>" class="img-fluid" alt="">
                            <div class="card-body">
                                <?php
                                $educations = explode(" | ", $row["education"]);
                                ?>
                                <h5 style="font-size: 1.2rem;"><?= $row["name"] ?></h5>
                                <label class="text-black-50"><?= $row["role"] ?></label>
                                <div>
                                    <?php
                                    $educations = [];
                                    ?>
                                    <?php foreach ($educations as $item) {  ?>
                                        <?php
                                        $e = explode(" - ", $item);
                                        if (count($e) < 2) continue;
                                        ?>
                                        <div><?= $e[0] ?></div>
                                        <div><?= $e[1] ?></div>
                                    <?php }    ?>
                                </div>
                                <div> <?= $row["email"] ?> </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member-->

                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Stop waiting.
                    <br />
                    Start building.
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
            </div>
        </div>
    </section>
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
            </div>
        </div>
    </section>

    <?php include('layouts/footer.php'); ?>

    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>