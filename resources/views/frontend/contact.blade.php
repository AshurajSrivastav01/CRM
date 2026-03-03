@extends('frontend.layout.main')
@section('main-container')
    <!-- Contact Header -->
    <section class="contact-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Get In Touch</h1>
                    <p class="lead">We'd love to hear from you. Reach out to us with questions, suggestions, or collaboration ideas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <!-- Contact Info Section -->
        <section class="contact-section">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="contact-card animate-fadein">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h4>Visit Us</h4>
                        <p>123 Blog Street<br>New York, NY 10001<br>United States</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="contact-card animate-fadein">
                        <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p>+1 (234) 567-8900<br>+1 (987) 654-3210</p>
                        <p class="text-muted">Mon-Fri, 9am-5pm EST</p>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="contact-card animate-fadein">
                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p>info@blogosphere.com<br>support@blogosphere.com</p>
                        <p class="text-muted">We respond within 24 hours</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form & Map Section -->
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-7 mb-5">
                <div class="contact-form animate-fadein">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="newsletter">
                            <label class="form-check-label" for="newsletter">Subscribe to our newsletter</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="col-lg-5 mb-5">
                <div class="map-section animate-fadein">
                    <div class="map-placeholder">
                        <i class="bi bi-map display-1 mb-3"></i>
                        <h4>Our Location</h4>
                        <p class="text-center">123 Blog Street, New York, NY</p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="text-center mt-4 animate-fadein">
                    <h4 class="mb-3">Follow Us</h4>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-5">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                        <p class="lead">Find quick answers to common questions about Blogosphere.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How can I contribute to Blogosphere?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We're always looking for talented writers and subject matter experts. Please send your writing samples and areas of expertise to contribute@blogosphere.com. Our editorial team will review your submission and get back to you within 5-7 business days.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How often is new content published?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We publish new articles daily across various categories. Typically, you can expect 3-5 new pieces of content each day. Subscribe to our newsletter to stay updated with our latest publications.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I republish content from Blogosphere?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We generally don't allow full republication of our content without permission. However, we encourage you to quote excerpts (up to 150 words) with proper attribution and a link back to the original article. For republication requests, please contact our editorial team at permissions@blogosphere.com.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How can I advertise on Blogosphere?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We offer various advertising options including sponsored content, display ads, and newsletter sponsorships. For our media kit and advertising rates, please contact our advertising team at ads@blogosphere.com.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How do I report an error in an article?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We strive for accuracy in all our content. If you've found an error, please email us at corrections@blogosphere.com with the article title, URL, and a description of the error. Our editorial team will review and correct it as soon as possible.
                                    </div>
                                </div>
                            </div>
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

            // Form validation
            const contactForm = document.querySelector('form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Simple validation
                    const name = document.getElementById('name');
                    const email = document.getElementById('email');
                    const subject = document.getElementById('subject');
                    const message = document.getElementById('message');

                    if (name.value && email.value && subject.value && message.value) {
                        // Show success message (in a real application, you would submit the form)
                        alert('Thank you for your message! We will get back to you soon.');
                        contactForm.reset();
                    } else {
                        alert('Please fill in all required fields.');
                    }
                });
            }
        });
    </script>
@endsection
