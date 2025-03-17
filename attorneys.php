<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Attorneys - Gabora and Associates</title>
    <meta name="description" content="Meet our team of experienced attorneys at Gabora and Associates, dedicated to providing expert legal representation.">
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
        .attorneys-header {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3') center/cover;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .attorney-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: transform 0.3s;
        }
        .attorney-card:hover {
            transform: translateY(-5px);
        }
        .attorney-img {
            height: 300px;
            object-fit: cover;
        }
        .attorney-info {
            padding: 25px;
        }
        .attorney-social {
            margin-top: 15px;
        }
        .attorney-social a {
            color: var(--primary-color);
            margin-right: 15px;
            font-size: 1.2rem;
        }
        .attorney-social a:hover {
            color: var(--accent-color);
        }
        .education-item {
            margin-bottom: 10px;
        }
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 20px 0;
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
                    <li class="nav-item"><a class="nav-link active" href="attorneys.php">Attorneys</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Attorneys Header -->
    <section class="attorneys-header">
        <div class="container">
            <h1 class="display-4 mb-4">Our Attorneys</h1>
            <p class="lead">Meet our team of dedicated legal professionals</p>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Partners</h2>
            <div class="row">
                <!-- Partner 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="attorney-card">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3" class="attorney-img" alt="John Gabora">
                        <div class="attorney-info">
                            <h3>John Gabora</h3>
                            <p class="text-muted">Managing Partner</p>
                            <p><strong>Practice Areas:</strong> Civil Litigation, Business Law</p>
                            <div class="education-item">
                                <p class="mb-0"><strong>J.D.</strong> Harvard Law School</p>
                                <p class="mb-0"><strong>B.A.</strong> Yale University, Political Science</p>
                            </div>
                            <p class="mt-3">With over 20 years of experience, John leads our litigation team with expertise in complex business disputes and class action lawsuits.</p>
                            <div class="attorney-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                                <a href="#"><i class="fas fa-phone"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Partner 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="attorney-card">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3" class="attorney-img" alt="Sarah Reynolds">
                        <div class="attorney-info">
                            <h3>Sarah Reynolds</h3>
                            <p class="text-muted">Senior Partner</p>
                            <p><strong>Practice Areas:</strong> Real Estate Law, Corporate Law</p>
                            <div class="education-item">
                                <p class="mb-0"><strong>J.D.</strong> Stanford Law School</p>
                                <p class="mb-0"><strong>M.B.A.</strong> Stanford Graduate School of Business</p>
                                <p class="mb-0"><strong>B.S.</strong> University of California, Economics</p>
                            </div>
                            <p class="mt-3">Sarah specializes in complex real estate transactions and has successfully negotiated deals valued at over $500 million throughout her career.</p>
                            <div class="attorney-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                                <a href="#"><i class="fas fa-phone"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Partner 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="attorney-card">
                        <img src="https://images.unsplash.com/photo-1556157382-97eda2f9e2bf?ixlib=rb-4.0.3" class="attorney-img" alt="Michael Chen">
                        <div class="attorney-info">
                            <h3>Michael Chen</h3>
                            <p class="text-muted">Partner</p>
                            <p><strong>Practice Areas:</strong> Business Law, Intellectual Property</p>
                            <div class="education-item">
                                <p class="mb-0"><strong>J.D.</strong> Columbia Law School</p>
                                <p class="mb-0"><strong>B.S.</strong> MIT, Computer Science</p>
                            </div>
                            <p class="mt-3">Michael brings a unique technical background to his legal practice, helping technology companies navigate complex IP issues and business transactions.</p>
                            <div class="attorney-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                                <a href="#"><i class="fas fa-phone"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Associates Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Associates</h2>
            <div class="row">
                <!-- Associate 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="attorney-card">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3" class="attorney-img" alt="David Wilson">
                        <div class="attorney-info">
                            <h3>David Wilson</h3>
                            <p class="text-muted">Senior Associate</p>
                            <p><strong>Practice Areas:</strong> Civil Litigation, Employment Law</p>
                            <div class="education-item">
                                <p class="mb-0"><strong>J.D.</strong> Georgetown University Law Center</p>
                                <p class="mb-0"><strong>B.A.</strong> University of Virginia, History</p>
                            </div>
                            <p class="mt-3">David has successfully represented clients in numerous employment disputes and civil litigation matters.</p>
                            <div class="attorney-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Associate 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="attorney-card">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3" class="attorney-img" alt="Jennifer Park">
                        <div class="attorney-info">
                            <h3>Jennifer Park</h3>
                            <p class="text-muted">Associate</p>
                            <p><strong>Practice Areas:</strong> Real Estate Law, Contract Law</p>
                            <div class="education-item">
                                <p class="mb-0"><strong>J.D.</strong> UCLA School of Law</p>
                                <p class="mb-0"><strong>B.A.</strong> UC Berkeley, Political Science</p>
                            </div>
                            <p class="mt-3">Jennifer focuses on residential and commercial real estate transactions and contract negotiations.</p>
                            <div class="attorney-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Associate 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="attorney-card">
                        <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3" class="attorney-img" alt="Robert Taylor">
                        <div class="attorney-info">
                            <h3>Robert Taylor</h3>
                            <p class="text-muted">Associate</p>
                            <p><strong>Practice Areas:</strong> Business Law, Tax Law</p>
                            <div class="education-item">
                                <p class="mb-0"><strong>J.D.</strong> University of Chicago Law School</p>
                                <p class="mb-0"><strong>M.B.A.</strong> University of Chicago Booth School of Business</p>
                                <p class="mb-0"><strong>B.S.</strong> University of Michigan, Finance</p>
                            </div>
                            <p class="mt-3">Robert provides strategic tax planning and business advice to startups and established companies.</p>
                            <div class="attorney-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Need Legal Assistance?</h2>
            <p class="lead mb-4">Our team of experienced attorneys is here to help you with your legal matters.</p>
            <a href="contact.php" class="btn btn-danger btn-lg">Contact Us Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2023 Gabora and Associates. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>