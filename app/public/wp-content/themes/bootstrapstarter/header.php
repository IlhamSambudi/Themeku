<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/b3a2eee685.js" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="#">Home</a>
                <a class="blog-nav-item" href="#">New features</a>
                <a class="blog-nav-item" href="#">Press</a>
                <a class="blog-nav-item" href="#">New hires</a>
                <a class="blog-nav-item" href="#">About</a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
            </nav>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-img" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span>MakeTheme</span></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">About</a>
                </div>
            </div>
            <form class="d-flex">
                <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>

    <section class="showcase">
        <div class="container">
            <h1>Bootstrap Theme</h1>
            <p>Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            <a class="btn btn-light btn-md">Read More</a>
        </div>
    </section>
    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                    <i class="fas fa-atlas" aria-hidden="true"></i>
                    <h3>Internet</h3>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                    <i class="fas fa-quidditch" aria-hidden="true"></i>
                    <h3>Custom</h3>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                    <i class="fas fa-kiwi-bird" aria-hidden="true"></i>
                    <h3>Nature</h3>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>

        <div class="row">