<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Gabora and Associates</title>
    <meta name="description" content="Contact Gabora and Associates for expert legal consultation and services.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #e74c3c;
        }
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }
        .navbar {
            background-color: var(--primary-color);
            padding: 1rem 0;
        }
        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
        }
        .contact-header {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3') center/cover;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .contact-info-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .contact-info-card i {
            color: var(--accent-color);
            margin-bottom: 15px;
        }
        .business-hours {
            background-color: var(--secondary-color);
            color: white;
            padding: 40px 0;
        }
        .contact-form {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 20px 0;
        }
        .map-container {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Gabora & Associates</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#practice-areas">Practice Areas</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#attorneys">Attorneys</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Header -->
    <section class="contact-header">
        <div class="container">
            <h1 class="display-4 mb-4">Contact Us</h1>
            <p class="lead">We're here to help with your legal needs</p>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info-card text-center">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                        <h3>Our Location</h3>
                        <p>123 Legal Street<br>City, State 12345</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-card text-center">
                        <i class="fas fa-phone fa-3x"></i>
                        <h3>Phone</h3>
                        <p>Main: (555) 123-4567<br>Fax: (555) 123-4568</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-card text-center">
                        <i class="fas fa-envelope fa-3x"></i>
                        <h3>Email</h3>
                        <p>info@gaboralaw.com<br>support@gaboralaw.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Hours -->
    <section class="business-hours">
        <div class="container">
            <h2 class="text-center mb-4">Business Hours</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p>Saturday: 10:00 AM - 2:00 PM</p>
                    <p>Sunday: Closed</p>
                    <p class="mt-3">* Available 24/7 for emergencies</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form">
        <div class="container">
            <h2 class="text-center mb-5">Send Us a Message</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" required>
                                <div class="invalid-feedback">Please enter your name</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                                <div class="invalid-feedback">Please enter a valid email</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" required>
                            <div class="invalid-feedback">Please enter your phone number</div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                            <div class="invalid-feedback">Please enter a subject</div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                            <div class="invalid-feedback">Please enter your message</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="privacy" required>
                                <label class="form-check-label" for="privacy">
                                    I agree to the privacy policy and terms of service
                                </label>
                                <div class="invalid-feedback">You must agree before submitting</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Find Us</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1!2d-73.98!3d40.75!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzAwLjAiTiA3M8KwNTgnNDguMCJX!5e0!3m2!1sen!2sus!4v1629856!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2023 Gabora and Associates. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form validation
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>