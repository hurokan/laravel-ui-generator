<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Blog Site</title>
    <style>
        /* Custom styles */
        .navbar-brand {
            font-weight: bold;
        }
        .blog-post {
            margin-bottom: 40px;
        }
        .post-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .post-meta {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .post-content {
            font-size: 18px;
            line-height: 1.6;
        }
        .sidebar {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .sidebar-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .sidebar-categories {
            list-style: none;
            padding: 0;
        }
        .sidebar-categories li {
            margin-bottom: 10px;
        }
        .read-more {
            color: #007bff;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Blog Site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Signin</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</header>

<main class="container py-4">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mb-4">Blog Posts</h1>
            <div class="blog-post">
                <h2 class="post-title">Sample Blog Post 1</h2>
                <p class="post-meta">Posted on July 10, 2023</p>
                <p class="post-content">
                    This is the content of the blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae libero metus. Phasellus vel ipsum gravida, consequat purus in, congue velit. Morbi blandit faucibus arcu, at consectetur neque auctor nec. Vestibulum vitae malesuada nisl. Nulla hendrerit tortor eu ipsum posuere feugiat. Donec ullamcorper, elit id varius tempus, enim risus faucibus tellus, eget bibendum nisi purus id massa.
                    <span class="read-more">Read More</span>
                </p>
            </div>
            <div class="blog-post">
                <h2 class="post-title">Sample Blog Post 2</h2>
                <p class="post-meta">Posted on July 9, 2023</p>
                <p class="post-content">
                    This is another blog post. Nulla rhoncus malesuada neque, ac commodo lacus placerat sit amet. Donec scelerisque varius tortor, vel iaculis metus lobortis at. Praesent viverra dignissim lectus, ut iaculis orci dignissim ut. Nam vulputate tellus ligula, ac euismod leo rhoncus id. Sed efficitur pulvinar neque, ac dignissim mi interdum sed.
                    <span class="read-more">Read More</span>
                </p>
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1 <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-md-4">
            <div class="sidebar">
                <h3 class="sidebar-title">About</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur nunc a velit euismod, ac consectetur nisi auctor.
                    <span class="read-more">Read More</span>
                </p>
                <h3 class="sidebar-title">Categories</h3>
                <ul class="sidebar-categories">
                    <li>Category 1</li>
                    <li>Category 2</li>
                    <li>Category 3</li>
                </ul>
                <div>
                    <h4 class="sidebar-title">Recent posts</h4>
                    <ul class="sidebar-categories">
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Example blog post title</h6>
                                    <small class="text-body-secondary">January 15, 2023</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">This is another blog post title</h6>
                                    <small class="text-body-secondary">January 14, 2023</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                    <small class="text-body-secondary">January 13, 2023</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="sidebar-title">Archives</h4>
                    <ul class="sidebar-categories">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
