<div class="navbar-area">

    <div class="mobile-nav">
        <a href="index.php" class="logo">
            <img src="docs/scienovelx3.png" width="200px" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav id="navbar" class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="index.php">
                    <img id="logo" src="docs/scienovelx3.png" width="200px" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link <?php if ($page == 'home') {
                                                                    echo 'active';
                                                                } ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link  <?php if ($page == 'about') {
                                                                        echo 'active';
                                                                    } ?>">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link <?php if ($page == 'Products') {
                                                            echo 'active';
                                                        } ?>">Products & Platforms<i class='bx bx-caret-down'></i>
                            </a>
                            <ul style="width: 342px;left: -84px;" class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Education
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul style="width: 260px;" class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                New Ed-eCommerce System

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Learning Hub
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                             
                                <li class="nav-item">
                                    <a href="coming-soon.php" class="nav-link">
                                        Hosting

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="coming-soon.php" class="nav-link <?php if ($page == 'portfolio') {
                                                                    echo 'active';
                                                                } ?>">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-link <?php if ($page == 'services') {
                                                            echo 'active';
                                                        } ?>">
                                Services
                                <i class='bx bx-caret-down'></i>
                            </a>
                            <ul class="dropdown-menu" style="width: 301px;left: -91px;">
                                <li class="nav-item">
                                    <a href="service-details.php" class="nav-link <?php if ($page == 'services') {
                                                                            echo 'active';
                                                                        } ?> ">
                                        Web Development and Designing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                    echo 'active';
                                                                } ?>">
                                        UI & UX Design
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                    echo 'active';
                                                                } ?>">
                                        App Development (Android & IOS)
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                                echo 'active';
                                                                            } ?>">
                                        Cloud based Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                            echo 'active';
                                                                        } ?> ">
                                        Blockchain Solutions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                    echo 'active';
                                                                } ?>">
                                        Digital Marketing & SEO
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                    echo 'active';
                                                                } ?>">
                                        IT Consultancy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                                echo 'active';
                                                                            } ?>">
                                        Cybersecurity Solutions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?php if ($page == 'services') {
                                                                    echo 'active';
                                                                } ?>">
                                        AI ML
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php if ($page == 'more') {
                                                            echo 'active';
                                                        } ?>">
                                More
                                <i class='bx bx-caret-down'></i>
                            </a>
                            <ul class="dropdown-menu " style="width: 248px;left: -78px;">
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.php" class="nav-link">
                                        Partners
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Careers
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="job.php" class="nav-link ">
                                                Job Search
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="life.php" class="nav-link">
                                                Life at ScienovelX
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link ">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav-side d-display">
                        <div class="nav-side-item">
                            <div class="get-btn">
                                <a href="contact.php" class="default-btn btn-bg-two border-radius-50">Get A Quote<i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="side-nav-responsive">
        <div class="container-max">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="in-circle circle-one"></div>
                    <div class="in-circle circle-two"></div>
                    <div class="in-circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                            <div class="get-btn">
                                <a href="contact.php" class="default-btn btn-bg-two border-radius-50">Get A Quote
                                    <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>