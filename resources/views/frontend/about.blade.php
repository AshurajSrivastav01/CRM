@extends('frontend.layout.main')
@section('main-container')

    <!-- About Header -->
    <section class="about-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Our Story</h1>
                    <p class="lead">Blogosphere began with a simple idea: create a space where curious minds can explore, learn, and share knowledge about the world around us.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <!-- Mission Section -->
        <section class="mission-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="mission-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h2 class="mb-4">Our Mission</h2>
                        <p class="lead">At Blogosphere, we're dedicated to delivering insightful, well-researched content that informs, inspires, and engages our readers. We believe in the power of knowledge to transform lives and communities.</p>
                        <p>Our team of passionate writers and experts work tirelessly to bring you the latest trends, thought-provoking ideas, and practical advice across a wide range of topics.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="stat-item">
                            <div class="stat-number" data-count="500">0</div>
                            <div class="stat-label">Articles Published</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="stat-item">
                            <div class="stat-number" data-count="250">0</div>
                            <div class="stat-label">Expert Writers</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number" data-count="2">0</div>
                            <div class="stat-label">Million Readers</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number" data-count="6">0</div>
                            <div class="stat-label">Years of Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-5">
                        <h2 class="mb-4">Meet Our Team</h2>
                        <p class="lead">Our diverse team of writers, editors, and designers are committed to delivering exceptional content that matters.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member animate-fadein">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Team Member" class="team-img">
                            <h4>Michael Chen</h4>
                            <p class="text-primary">Editor-in-Chief</p>
                            <p>With over 10 years of experience in digital publishing, Michael leads our content strategy.</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-member animate-fadein">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Team Member" class="team-img">
                            <h4>Sarah Johnson</h4>
                            <p class="text-primary">Content Director</p>
                            <p>Sarah oversees our team of writers and ensures the highest quality standards for all content.</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="team-member animate-fadein">
                            <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=699&q=80" alt="Team Member" class="team-img">
                            <h4>David Wilson</h4>
                            <p class="text-primary">Creative Director</p>
                            <p>David brings our stories to life with his exceptional design skills and creative vision.</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="values-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-5">
                        <h2 class="mb-4">Our Values</h2>
                        <p class="lead">These core principles guide everything we do at Blogosphere.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="value-card animate-fadein">
                            <div class="value-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h4>Innovation</h4>
                            <p>We constantly explore new ideas and approaches to deliver fresh perspectives and cutting-edge content.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="value-card animate-fadein">
                            <div class="value-icon">
                                <i class="bi bi-heart"></i>
                            </div>
                            <h4>Passion</h4>
                            <p>Our love for knowledge and storytelling drives us to create content that resonates with our readers.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="value-card animate-fadein">
                            <div class="value-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4>Integrity</h4>
                            <p>We maintain the highest standards of honesty, accuracy, and transparency in all our content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="mb-4">Join Our Community</h2>
                        <p class="lead mb-4">Become part of our growing community of readers and contributors who are passionate about learning and sharing knowledge.</p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#" class="btn btn-primary btn-lg">Subscribe to Newsletter</a>
                            <a href="#" class="btn btn-outline-primary btn-lg">Become a Contributor</a>
                        </div>
                    </div>
                </div>
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
                element.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';
                observer.observe(element);
            });

            // Animate stats counting
            const statElements = document.querySelectorAll('.stat-number');
            const options = {
                threshold: 0.5
            };

            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        const target = parseInt(element.getAttribute('data-count'));
                        const duration = 2000;
                        const step = target / (duration / 16);
                        let current = 0;

                        const timer = setInterval(() => {
                            current += step;
                            if (current >= target) {
                                clearInterval(timer);
                                element.textContent = target + (element.getAttribute('data-count') === '2' ? 'M' : '+');
                            } else {
                                element.textContent = Math.floor(current) + (element.getAttribute('data-count') === '2' ? 'M' : '+');
                            }
                        }, 16);

                        statsObserver.unobserve(element);
                    }
                });
            }, options);

            statElements.forEach(element => {
                statsObserver.observe(element);
            });
        });
    </script>
@endsection
