<?php 
session_start();
require_once 'config/database.php'; 
include 'includes/public-header.php'; 

$booking_ref = $_SESSION['last_booking_ref'] ?? null;

if (!$booking_ref) {
    echo "<div class='container' style='padding:100px 20px; text-align:center;'><h2>No booking found.</h2><a href='rooms.php' class='btn-primary'>Browse Rooms</a></div>";
    include 'includes/public-footer.php';
    exit;
}

$stmt = $pdo->prepare("
    SELECT b.*, r.room_name, r.price_per_night, c.full_name, c.email 
    FROM bookings b
    JOIN rooms r ON b.room_id = r.id
    JOIN customers c ON b.customer_id = c.id
    WHERE b.booking_ref = ?
");
$stmt->execute([$booking_ref]);
$booking = $stmt->fetch();

if (!$booking) {
    echo "<div class='container' style='padding:100px 20px; text-align:center;'><h2>Booking not found.</h2></div>";
    include 'includes/public-footer.php';
    exit;
}

unset($_SESSION['last_booking_ref']);
?>

<section class="confirmation-section">
    <div class="container">
        <div class="confirmation-card">
            <i class="fas fa-check-circle success-icon"></i>
            <h1>Booking Received!</h1>
            <p>Thank you, <strong><?php echo htmlspecialchars($booking['full_name']); ?></strong>. Your booking request has been submitted successfully.</p>
            
            <div class="booking-summary">
                <h3>Booking Summary</h3>
                <p><strong>Reference:</strong> <?php echo htmlspecialchars($booking['booking_ref']); ?></p>
                <p><strong>Room:</strong> <?php echo htmlspecialchars($booking['room_name']); ?></p>
                <p><strong>Check-in:</strong> <?php echo date('d M Y', strtotime($booking['check_in'])); ?></p>
                <p><strong>Check-out:</strong> <?php echo date('d M Y', strtotime($booking['check_out'])); ?></p>
                <p><strong>Guests:</strong> <?php echo $booking['adults']; ?> Adults, <?php echo $booking['children']; ?> Children</p>
                <p><strong>Total Price:</strong> Ugx <?php echo number_format($booking['total_price']); ?></p>
                <p><strong>Status:</strong> <span class="status-pending">Pending Confirmation</span></p>
            </div>
            
            <p class="confirmation-note">Our staff will contact you shortly to confirm your booking. Please keep your reference number safe.</p>
            <a href="index.php" class="btn-primary">Return to Home</a>
        </div>
    </div>
</section>

<?php include 'includes/public-footer.php'; ?>