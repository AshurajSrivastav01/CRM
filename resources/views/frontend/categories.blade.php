@extends('frontend.layout.main')
@section('main-container')

    <!-- Categories Hero -->
    <section class="categories-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4">Explore Categories</h1>
                        <p class="lead">Discover content organized by topics that matter to you. Dive deep into your interests with our curated categories.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <!-- Categories Grid -->
        <section class="categories-section">
            <div class="row">
                <!-- Technology -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="category-card animate-fadein">
                        <div class="category-icon">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h3>Technology</h3>
                        <p>Explore the latest innovations, gadgets, and tech trends shaping our future.</p>
                        <span class="article-count">128 Articles</span>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <!-- Travel -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="category-card animate-fadein">
                        <div class="category-icon">
                            <i class="bi bi-airplane"></i>
                        </div>
                        <h3>Travel</h3>
                        <p>Discover breathtaking destinations, travel tips, and cultural experiences around the world.</p>
                        <span class="article-count">86 Articles</span>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <!-- Food -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="category-card animate-fadein">
                        <div class="category-icon">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <h3>Food</h3>
                        <p>Recipes, cooking techniques, restaurant reviews, and culinary adventures.</p>
                        <span class="article-count">112 Articles</span>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <!-- Health -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="category-card animate-fadein">
                        <div class="category-icon">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h3>Health</h3>
                        <p>Wellness advice, fitness tips, mental health resources, and medical insights.</p>
                        <span class="article-count">74 Articles</span>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <!-- Lifestyle -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="category-card animate-fadein">
                        <div class="category-icon">
                            <i class="bi bi-house-heart"></i>
                        </div>
                        <h3>Lifestyle</h3>
                        <p>Home decor, personal development, relationships, and everyday inspiration.</p>
                        <span class="article-count">93 Articles</span>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <!-- Finance -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="category-card animate-fadein">
                        <div class="category-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h3>Finance</h3>
                        <p>Personal finance tips, investment strategies, and economic insights.</p>
                        <span class="article-count">67 Articles</span>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Tags -->
        <section class="tags-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h3 class="mb-4">Popular Tags</h3>
                        <div class="tag-cloud">
                            <a href="#" class="tag">Technology</a>
                            <a href="#" class="tag">Travel</a>
                            <a href="#" class="tag">Recipes</a>
                            <a href="#" class="tag">Health</a>
                            <a href="#" class="tag">Fitness</a>
                            <a href="#" class="tag">Finance</a>
                            <a href="#" class="tag">Design</a>
                            <a href="#" class="tag">Art</a>
                            <a href="#" class="tag">Music</a>
                            <a href="#" class="tag">Books</a>
                            <a href="#" class="tag">AI</a>
                            <a href="#" class="tag">Photography</a>
                            <a href="#" class="tag">Sustainability</a>
                            <a href="#" class="tag">Entrepreneurship</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter-section">
            <div class="container position-relative">
                <h2 class="mb-3">Stay Updated</h2>
                <p class="lead mb-4">Subscribe to our newsletter and never miss an update from your favorite categories.</p>
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
    </main>

    <script>
        // Animation for elements
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.animate-fadein');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                    }
                });
            });

            animatedElements.forEach(element => {
                element.style.opacity = 0;
                element.style.transition = 'opacity 0.6s ease-in-out, transform 0.6s ease-in-out';
                observer.observe(element);
            });
        });
    </script>

@endsection
