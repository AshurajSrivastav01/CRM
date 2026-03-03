@extends('frontend.layout.main')
@section('main-container')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Discover Stories, Ideas, and Inspiration</h1>
            <p class="lead mb-4">Explore a world of captivating articles on technology, lifestyle, travel, and more.</p>
            <button class="btn btn-light btn-lg px-4 py-2">Start Reading</button>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-post bg-white">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid h-100" alt="Featured Post" style="object-fit: cover;">
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 p-md-5">
                                <span class="category-badge">Technology</span>
                                <h2 class="mt-3">The Future of Artificial Intelligence in Everyday Life</h2>
                                <p class="text-muted">How AI is transforming our daily routines and what to expect in the coming years as technology continues to evolve at a rapid pace.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1160&q=80" alt="Author" class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <h6 class="mb-0">Sarah Johnson</h6>
                                        <small class="text-muted">May 15, 2023 · 8 min read</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts & Sidebar -->
    <section class="container mb-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Travel</span>
                                <h5 class="card-title mt-2">10 Hidden Gems in Europe You Need to Visit</h5>
                                <p class="card-text">Discover breathtaking locations off the beaten path that will make your European adventure unforgettable.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 6 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1153&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Health</span>
                                <h5 class="card-title mt-2">Morning Routines of Highly Successful People</h5>
                                <p class="card-text">Learn how starting your day with intention can dramatically improve your productivity and overall wellbeing.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 5 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Food</span>
                                <h5 class="card-title mt-2">Easy Gourmet Recipes for Busy Weeknights</h5>
                                <p class="card-text">Impress your family with these delicious meals that take 30 minutes or less to prepare.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 7 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Technology</span>
                                <h5 class="card-title mt-2">How 5G Technology Will Change Our World</h5>
                                <p class="card-text">Explore the potential applications of 5G beyond faster smartphones, from smart cities to remote surgery.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 10 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Travel</span>
                                <h5 class="card-title mt-2">10 Hidden Gems in Europe You Need to Visit</h5>
                                <p class="card-text">Discover breathtaking locations off the beaten path that will make your European adventure unforgettable.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 6 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1153&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Health</span>
                                <h5 class="card-title mt-2">Morning Routines of Highly Successful People</h5>
                                <p class="card-text">Learn how starting your day with intention can dramatically improve your productivity and overall wellbeing.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 5 min read</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- About Widget -->
                <div class="sidebar-widget">
                    <h4>About Blog</h4>
                    <p>Welcome to our blog where we explore the latest trends in technology, travel, lifestyle, and more. Our mission is to inspire and inform.</p>
                    <div class="social-icons d-flex mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>

                <!-- Popular Posts -->
                <div class="sidebar-widget">
                    <h4>Popular Posts</h4>
                    <div class="popular-post">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Popular Post">
                        <div class="popular-post-content">
                            <h6>The Best Tech Gadgets of 2023</h6>
                            <span><i class="bi bi-clock me-1"></i> Apr 28, 2023</span>
                        </div>
                    </div>
                    <div class="popular-post">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Popular Post">
                        <div class="popular-post-content">
                            <h6>10 Delicious Smoothie Recipes for Summer</h6>
                            <span><i class="bi bi-clock me-1"></i> May 5, 2023</span>
                        </div>
                    </div>
                    <div class="popular-post">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Popular Post">
                        <div class="popular-post-content">
                            <h6>How to Shop Sustainably on a Budget</h6>
                            <span><i class="bi bi-clock me-1"></i> May 12, 2023</span>
                        </div>
                    </div>
                </div>

                <!-- Categories -->
                <div class="sidebar-widget">
                    <h4>Categories</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Technology
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Travel
                            <span class="badge bg-primary rounded-pill">9</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Food
                            <span class="badge bg-primary rounded-pill">17</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Health
                            <span class="badge bg-primary rounded-pill">12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Lifestyle
                            <span class="badge bg-primary rounded-pill">10</span>
                        </li>
                    </ul>
                </div>

                <!-- Tags -->
                <div class="sidebar-widget">
                    <h4>Tags</h4>
                    <div class="tag-cloud">
                        <a href="#">Tech</a>
                        <a href="#">Travel</a>
                        <a href="#">Recipes</a>
                        <a href="#">Health</a>
                        <a href="#">Fitness</a>
                        <a href="#">Finance</a>
                        <a href="#">Design</a>
                        <a href="#">Art</a>
                        <a href="#">Music</a>
                        <a href="#">Books</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="container">
        <div class="newsletter-form text-center">
            <h2 class="mb-3">Subscribe to Our Newsletter</h2>
            <p class="mb-4">Get the latest posts delivered straight to your inbox.</p>
            <form class="row g-3 justify-content-center">
                <div class="col-md-6">
                    <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-light btn-lg w-100">Subscribe</button>
                </div>
            </form>
        </div>
    </section>
@endsection
