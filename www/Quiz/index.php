<?php include_once 'includes/header.php'; ?>

<style>
:root {
  /* Professional color palette */
  --primary-color: #2c3e50;
  --secondary-color: #34495e;
  --accent-color: #3498db;
  --success-color: #27ae60;
  --warning-color: #f39c12;
  --danger-color: #e74c3c;
  --light-bg: #f5f7fa;
  --dark-bg: #1a202c;
  --text-dark: #2d3748;
  --text-muted: #718096;
  --text-light: #f8fafc;
  --border-color: #e2e8f0;
  --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1);
  --transition-speed: 0.3s;
  
  /* Typography */
  --font-heading: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
  --font-body: 'Open Sans', -apple-system, BlinkMacSystemFont, sans-serif;
}

body {
  font-family: var(--font-body);
  color: var(--text-dark);
  line-height: 1.6;
}

h1, h2, h3, h4, h5, h6 {
  font-family: var(--font-heading);
  font-weight: 600;
}

/* Hero section */
.hero-section {
  position: relative;
  background-image: url('data:image/jpeg;base64,<?= base64_encode($siteSettings['HeroImage']) ?>');
  background-size: cover;
  background-position: center;
  color: var(--text-light);
  overflow: hidden;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(44, 62, 80, 0.9), rgba(52, 73, 94, 0.8));
}

.hero-content {
  position: relative;
  z-index: 2;
  padding: 7rem 0;
}

@media (max-width: 768px) {
  .hero-content {
    padding: 5rem 0;
  }
}

/* Section styling */
.section {
  padding: 5rem 0;
}

@media (max-width: 768px) {
  .section {
    padding: 3rem 0;
  }
}

.section-title {
  position: relative;
  margin-bottom: 3rem;
  font-weight: 700;
  text-align: center;
}

.section-title::after {
  content: "";
  position: absolute;
  bottom: -12px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 3px;
  background-color: var(--accent-color);
}

/* Cards */
.card {
  border: none;
  border-radius: 8px;
  overflow: hidden;
  transition: transform var(--transition-speed), box-shadow var(--transition-speed);
}

.card-hover:hover {
  transform: translateY(-5px);
  box-shadow: var(--card-shadow);
}

/* Feature cards */
.feature-card {
  height: 100%;
  background-color: white;
  box-shadow: var(--card-shadow);
}

.feature-icon-wrapper {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background-color: rgba(52, 152, 219, 0.1);
  margin-bottom: 1.5rem;
}

.feature-icon {
  font-size: 1.75rem;
  color: var(--accent-color);
}

/* Journey cards */
.journey-card {
  height: 100%;
  box-shadow: var(--card-shadow);
}

.journey-number {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: var(--accent-color);
  color: white;
  font-weight: bold;
  margin: 0 auto 1rem;
}

.journey-img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid white;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin: 0 auto 1.5rem;
}

/* Testimonial cards */
.testimonial-card {
  height: 100%;
  box-shadow: var(--card-shadow);
}

.testimonial-img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid white;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin: 0 auto 1rem;
}

.testimonial-quote {
  position: relative;
  padding: 1.5rem;
  font-style: italic;
  color: var(--text-muted);
}

.testimonial-quote::before {
  content: """;
  position: absolute;
  top: -10px;
  left: 0;
  font-size: 4rem;
  color: rgba(52, 152, 219, 0.1);
  font-family: Georgia, serif;
  line-height: 1;
}

/* Buttons */
.btn {
  border-radius: 6px;
  font-weight: 600;
  padding: 0.625rem 1.5rem;
  transition: all var(--transition-speed);
}

.btn-primary {
  background-color: var(--accent-color);
  border-color: var(--accent-color);
}

.btn-primary:hover {
  background-color: #2980b9;
  border-color: #2980b9;
}

.btn-outline-primary {
  color: var(--accent-color);
  border-color: var(--accent-color);
}

.btn-outline-primary:hover {
  background-color: var(--accent-color);
  border-color: var(--accent-color);
}

/* About section */
.about-card {
  height: 100%;
  box-shadow: var(--card-shadow);
}

.about-check-item {
  display: flex;
  align-items: center;
  margin-bottom: 0.75rem;
}

.about-check-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: var(--accent-color);
  color: white;
  margin-right: 0.75rem;
  flex-shrink: 0;
}

/* CTA section */
.cta-section {
  background-color: var(--primary-color);
  color: var(--text-light);
  padding: 4rem 0;
}

/* Divider */
.section-divider {
  height: 1px;
  background: linear-gradient(to right, transparent, var(--border-color), transparent);
  margin: 0;
  opacity: 0.5;
}

/* Responsive adjustments */
@media (max-width: 991.98px) {
  .feature-card, .journey-card, .testimonial-card, .about-card {
    margin-bottom: 1.5rem;
  }
}

@media (max-width: 767.98px) {
  h1 {
    font-size: 2.25rem;
  }
  
  h2 {
    font-size: 1.75rem;
  }
  
  h3 {
    font-size: 1.5rem;
  }
  
  .section-title {
    margin-bottom: 2rem;
  }
  
  .feature-icon-wrapper {
    width: 60px;
    height: 60px;
  }
  
  .feature-icon {
    font-size: 1.5rem;
  }
}

@media (max-width: 575.98px) {
  .hero-content {
    padding: 4rem 0;
  }
  
  .btn {
    width: 100%;
    margin-bottom: 0.5rem;
  }
  
  .journey-img, .testimonial-img {
    width: 80px;
    height: 80px;
  }
}
</style>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-overlay"></div>
  <div class="container hero-content text-center">
    <h1 class="display-4 mb-4 fw-bold"><?=$siteSettings['HomeHeroTitle'] ?? 'Expand Your Knowledge'?></h1>
    <p class="lead mb-4"><?=$siteSettings['HomeHeroSubTitle'] ?? 'Challenge yourself with our comprehensive quiz platform'?></p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a class="btn btn-primary" href="<?=BASE_URL?>/quiz.php">
        <i class="fas fa-play-circle me-2"></i>Browse Quizzes
      </a>
      <a class="btn btn-outline-light" href="<?=BASE_URL?>/register.php">
        <i class="fas fa-user-plus me-2"></i>Create Account
      </a>
    </div>
    <?php if (!empty($siteSettings['HomeHeroNote'])): ?>
      <p class="mt-4 small text-light"><?=$siteSettings['HomeHeroNote']?></p>
    <?php endif; ?>
  </div>
</section>

<!-- Features Section -->
<section class="section bg-light">
  <div class="container">
    <h2 class="section-title">Professional Features</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="feature-card card card-hover h-100">
          <div class="card-body text-center p-4">
            <div class="feature-icon-wrapper">
              <i class="fas fa-question feature-icon"></i>
            </div>
            <h3 class="h4 mb-3">Comprehensive Quiz Library</h3>
            <p class="text-muted mb-4">Access a diverse collection of professionally curated quizzes across multiple disciplines and difficulty levels.</p>
             
              Explore Categories <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4">
        <div class="feature-card card card-hover h-100">
          <div class="card-body text-center p-4">
            <div class="feature-icon-wrapper">
              <i class="fas fa-play-circle feature-icon"></i>
            </div>
            <h3 class="h4 mb-3">Interactive Learning</h3>
            <p class="text-muted mb-4">Engage with dynamic quizzes that provide detailed explanations and instant feedback to enhance your understanding.</p>
            
              Try Featured Quiz <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4">
        <div class="feature-card card card-hover h-100">
          <div class="card-body text-center p-4">
            <div class="feature-icon-wrapper">
              <i class="fas fa-chart-line feature-icon"></i>
            </div>
            <h3 class="h4 mb-3">Performance Analytics</h3>
            <p class="text-muted mb-4">Track your progress with detailed analytics, identify areas for improvement, and compare your results with peers.</p>
           
              Sign Up Now <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>
<div class="section-divider"></div>


<!-- Testimonials Section -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Client Testimonials</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="testimonial-card card card-hover h-100">
          <div class="card-body p-4">
            <div class="text-center mb-3">
              <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fA%3D%3D"
                   class="testimonial-img" alt="Emma Wilson">
              <h4 class="h5 mt-3 mb-1">Emma Wilson</h4>
              <p class="small text-muted mb-0">Marketing Professional</p>
              <div class="text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="testimonial-quote">
              <p>"This platform gave me clarity when I was feeling lost. The questionnaire was easy to understand and helped me identify the right steps toward seeking support."</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="testimonial-card card card-hover h-100">
          <div class="card-body p-4">
            <div class="text-center mb-3">
              <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fA%3D%3D"
                   class="testimonial-img" alt="Sophia Johnson">
              <h4 class="h5 mt-3 mb-1">Sophia Johnson</h4>
              <p class="small text-muted mb-0">University Student</p>
              <div class="text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
            <div class="testimonial-quote">
              <p>"I was skeptical at first, but the tools on this site really helped me understand my emotions better. It's like having a guide when you're feeling overwhelmed."</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="testimonial-card card card-hover h-100">
          <div class="card-body p-4">
            <div class="text-center mb-3">
              <img src="https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fA%3D%3D"
                   class="testimonial-img" alt="Liam Brown">
              <h4 class="h5 mt-3 mb-1">Liam Brown</h4>
              <p class="small text-muted mb-0">Software Engineer</p>
              <div class="text-warning my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="testimonial-quote">
              <p>"The self-assessment quiz gave me the confidence to take the first step toward addressing my anxiety. I feel more in control of my mental health now."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Add this before the closing body tag to ensure proper font loading -->
<script>
  // Add Google Fonts dynamically
  (function() {
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap';
    document.head.appendChild(link);
  })();
  
  // Add responsive behavior for mobile navigation if needed
  document.addEventListener('DOMContentLoaded', function() {
    // Any additional JavaScript for enhancing the UI can go here
    
    // Example: Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop,
            behavior: 'smooth'
          });
        }
      });
    });
  });
</script>

<?php include_once 'includes/footer.php'; ?>

