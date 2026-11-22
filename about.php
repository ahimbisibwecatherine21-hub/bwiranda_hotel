<?php 
require_once 'config/database.php'; 
include 'includes/public-header.php'; 
?>

<!-- PAGE HERO -->
<section class="page-hero" style="background-image: url('assets/images/hero1.jpeg');">
    <div class="page-hero-content">
        <h1>About Us</h1>
        <p>Experience New Living in Kasese</p>
    </div>
</section>

<!-- STORY SECTION -->
<section class="about-story">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>Bwiranda Hotel was founded with a simple vision: to offer travelers to Western Uganda a place where genuine Ugandan hospitality meets modern comfort. Nestled in the heart of Kasese town, we are perfectly positioned as your gateway to the magnificent Rwenzori Mountains and Queen Elizabeth National Park.</p>
                <p>From our carefully designed rooms to our warm and attentive staff, every detail at Bwiranda Hotel is crafted to make your stay memorable. Whether you are traveling for business, planning a family vacation, or organizing a conference, we are here to serve you with excellence.</p>
            </div>
            <div class="about-image">
                <img src="assets/images/about.jpg" 
                     onerror="this.onerror=null; this.src='assets/images/hero1.jpeg';" 
                     alt="Bwiranda Hotel">
            </div>
        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="mission-vision">
    <div class="container">
        <div class="mv-grid">
            <div class="mv-card">
                <i class="fas fa-bullseye"></i>
                <h3>Our Mission</h3>
                <p>To provide exceptional hospitality and comfortable accommodation that exceeds our guests' expectations, while contributing to the growth of tourism in the Rwenzori region.</p>
            </div>
            <div class="mv-card">
                <i class="fas fa-eye"></i>
                <h3>Our Vision</h3>
                <p>To be the leading hotel in Western Uganda, known for our warm hospitality, modern amenities, and commitment to sustainable tourism.</p>
            </div>
            <div class="mv-card">
                <i class="fas fa-heart"></i>
                <h3>Our Values</h3>
                <p>Integrity, excellence, and a genuine care for our guests. We treat every visitor as family and every stay as an opportunity to create lasting memories.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why-us">
    <div class="container">
        <h2>Why Choose Bwiranda Hotel?</h2>
        <div class="why-grid">
            <div class="why-item"><i class="fas fa-map-marker-alt"></i><h4>Prime Location</h4><p>Minutes from Kasese town center and easy access to national parks.</p></div>
            <div class="why-item"><i class="fas fa-bed"></i><h4>Comfortable Rooms</h4><p>Spacious, modern rooms with all the amenities you need.</p></div>
            <div class="why-item"><i class="fas fa-utensils"></i><h4>Delicious Cuisine</h4><p>Local and international dishes prepared by expert chefs.</p></div>
            <div class="why-item"><i class="fas fa-wifi"></i><h4>Free Wi-Fi</h4><p>Stay connected with complimentary high-speed internet.</p></div>
            <div class="why-item"><i class="fas fa-shield-alt"></i><h4>24/7 Security</h4><p>Round-the-clock security for your peace of mind.</p></div>
            <div class="why-item"><i class="fas fa-concierge-bell"></i><h4>Warm Hospitality</h4><p>Friendly staff dedicated to making your stay unforgettable.</p></div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Experience Bwiranda Hotel?</h2>
        <p>Book your stay today and discover the warm hospitality of Western Uganda.</p>
        <a href="rooms.php" class="btn-primary">Book a Room</a>
    </div>
</section>

<?php include 'includes/public-footer.php'; ?>