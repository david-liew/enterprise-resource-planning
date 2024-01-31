<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Online CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Online JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Online Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!--Online jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .carousel-item>img {
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="tab-home">
        <div id="carouselIndicators" class="carousel carousel-dark carousel-fade bg-secondary" data-bs-ride="carousel" data-bs-touch="true" data-bs-interval="true">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" aria-label="Slide 1" aria-current="true" class="active"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="./src/img/SAP.png" class="d-block mx-auto" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./src/img/cg.png" class="d-block mx-auto" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./src/img/cgpv.png" class="d-block mx-auto" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row mt-2">
            <div class="col-sm-12 col-md-5">
                <div class="row m-1 p-1 border border-2 rounded">
                    <p class="d-flex d-inline-block pt-3">
                        <img src="node_modules/bootstrap-icons/icons/megaphone-fill.svg" alt="Announcement">&nbsp;&nbsp;
                        <strong>Announcement:</strong>&nbsp;&nbsp;Regional President's Points Display
                    </p>
                </div>
                <div class="row m-1 p-1 border border-2 rounded">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab-1" role="tablist">
                            <button class="nav-link drm" id="home-tab-todo" data-bs-toggle="tab" data-bs-target="#home-todo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                To-Do&nbsp;&nbsp;<img src="node_modules/bootstrap-icons/icons/5-square-fill.svg" alt="todo">
                            </button>
                            <button class="nav-link drm" id="home-tab-toread" data-bs-toggle="tab" data-bs-target="#home-toread" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                To-Read&nbsp;&nbsp;<img src="node_modules/bootstrap-icons/icons/2-square-fill.svg" alt="toread">
                            </button>
                            <button class="nav-link drm active" id="home-tab-mail" data-bs-toggle="tab" data-bs-target="#home-mail" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                Mail&nbsp;&nbsp;<img src="node_modules/bootstrap-icons/icons/0-square-fill.svg" alt="mail">
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent-1">
                        <div class="tab-pane fade show active" id="home-todo" role="tabpanel" aria-labelledby="home-tab-todo">Today, as always, you are outstanding. All the pending messages have been processed!</div>
                        <div class="tab-pane fade" id="home-toread" role="tabpanel" aria-labelledby="home-tab-toread">Today, as always, you are outstanding. All the unread messages have been processed!</div>
                        <div class="tab-pane fade" id="home-mail" role="tabpanel" aria-labelledby="home-tab-mail">Today, as always, you are outstanding. All the email messages have been processed!</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-7">
                <div class="row m-1 p-1 border border-2 rounded">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand fs-6" href="home.php">
                                <img src="node_modules/bootstrap-icons/icons/fire.svg" alt="Company Headlines">&nbsp;&nbsp;Company Headlines
                            </a>
                            <!-- Toolbar Items <ul class="navbar-nav nav nav-tabs me-auto">-->
                            <div class="nav nav-tabs justify-content-end" id="nav-tab-2" role="tablist">
                                <button class="nav-link active" id="home-tab-doc" data-bs-toggle="tab" data-bs-target="#home-doc" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Document</button>
                                <button class="nav-link" id="home-tab-news" data-bs-toggle="tab" data-bs-target="#home-news" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">News</button>
                            </div>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent-2">
                        <!-- document -->
                        <div class="tab-pane fade show active" id="home-doc" role="tabpanel" aria-labelledby="home-tab-doc">

                            <?php
                            //document
                            $multiArrayA = array(
                                array('Notice on the Release of "<2024 Malaysia Public Holidays>"', '2023-01-05', 'Malaysia-Singapore Region | Matters Notification'),
                                array('Notice on Conducting Annual Employee Performance Evaluation in the Malaysia-Singapore Region for the Year 2023', '2023-01-05', 'Malaysia-Singapore Region | Matters Notification'),
                                array('Notice on Appointment and Removal of Li Junwei and Others from Their Positions', '2023-01-05', 'Human Resources Section | Personnel Structure')
                            );

                            // Get the number of rows
                            $rows = count($multiArrayA);

                            // Iterate through the rows
                            for ($i = 0; $i < $rows; $i++) {
                                echo '<div class="doc-name pb-2">
                                        <div class="d-flex d-inline-block">
                                            <div class="text-truncate w-75">' . $multiArrayA[$i][0] . ' </div>
                                            <div class="ms-auto">' . $multiArrayA[$i][1] . '</div>
                                        </div>
                                        <div class="text-muted">' . $multiArrayA[$i][2] . '</div>
                                    </div>';
                            }
                            ?>
                        </div><!--document-->

                        <!--news-->
                        <div class="tab-pane fade" id="home-news" role="tabpanel" aria-labelledby="home-tab-news">
                            <?php
                            //document
                            $multiArrayB = array(
                                array('Notice on the Appointment of Li Jing', '2023-01-05', 'General Department | Personnel Structure'),
                                array('Notice on the Appointment of Positions for Huang Guoquan and Others', '2023-01-05', 'Human Resources Section | Personnel Structure'),
                                array('Notice on the Organizational Structure Adjustment of the Regional Operating Platform in Maxin District', '2023-01-05', 'Human Resources Section | Personnel Structure')
                            );

                            // Get the number of rows
                            $rows = count($multiArrayB);

                            // Iterate through the rows
                            for ($i = 0; $i < $rows; $i++) {
                                echo '<div class="doc-name pb-2">
                                <div class="d-flex d-inline-block">
                                    <div class="text-truncate w-75">' . $multiArrayB[$i][0] . ' </div>
                                    <div class="ms-auto">' . $multiArrayB[$i][1] . '</div>
                                </div>
                                <div class="text-muted">' . $multiArrayB[$i][2] . '</div>
                            </div>';
                            }
                            ?>
                        </div><!--news-->
                    </div><!--nav-tabContent-2-->
                </div><!--row-->
            </div><!--col-sm-12-->
        </div><!--row-->
</body>

</html>