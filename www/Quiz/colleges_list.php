<?php
// Include the database connection and necessary functions
include_once __DIR__ . '/bootstrap.php';

// Fetch doctors from the database
$doctors = $db->getMultipleRows("SELECT * FROM doctors ORDER BY id ASC");

include_once 'includes/header.php';
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid mb-5">
        <div class="row pt-3">
            <div class="col-12">
                <h2 class="section-header">Available Doctors/Counselors</h2>
                <?php if (!isset($_SESSION['username'])): ?>
                    <h5 class="text-muted">Browse the list of available doctors and counselors below:</h5>
                <?php endif; ?>
            </div>
        </div>

        <!-- Doctor Cards -->
        <div class="row pt-3" id="doctorCards">
            <?php foreach ($doctors as $doctor): ?>
                <div class="col-12 col-md-4 mb-4 doctor-card">
                    <!-- Doctor Card -->
                    <div class="card h-100 shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title mb-0"><?= htmlspecialchars($doctor['name']) ?></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?= htmlspecialchars($doctor['description']) ?></p>
                            <ul class="list-group list-group-flush rounded border">
                                <li class="list-group-item"><strong>Location:</strong> <?= htmlspecialchars($doctor['location']) ?></li>
                                <li class="list-group-item"><strong>Contact:</strong> <?= htmlspecialchars($doctor['contact']) ?></li>
                                <li class="list-group-item"><strong>Specialist In:</strong> <?= htmlspecialchars($doctor['specialist']) ?></li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <!-- Add any additional actions or buttons here -->
                            <div class=""><strong>Get in Touch:</strong> <a href="tel:<?= htmlspecialchars($doctor['contact']) ?>">Call Now</a></div>
                        </div>
                    </div>
                    <!-- End Doctor Card -->
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<?php include_once 'includes/footer.php'; ?>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var showQualifyingCollegesEle = document.getElementById('showQualifyingColleges');
    var selectLevelEle = document.getElementById('collegeLevel');

    // JavaScript for filtering college cards based on selected level and qualifying checkbox
    function filterColleges() {

        var selectedLevel = selectLevelEle.value;
        var showQualifyingColleges = showQualifyingCollegesEle ? showQualifyingCollegesEle.checked : null;
        var collegeCards = document.querySelectorAll('.college-card');


        collegeCards.forEach(function(card) {

            var level = card.getAttribute('data-college-level');
            var isQualifying = card.getAttribute('data-qualifying') === 'true';

            console.log("Changed 1", showQualifyingColleges);


            if (showQualifyingColleges !== null && showQualifyingColleges) {
                if ((selectedLevel === 'all' || level === selectedLevel) && (isQualifying)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            } else {
                if (selectedLevel === 'all' || level === selectedLevel) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            }


        });
    }

    // Call the filter function initially and add event listeners
    filterColleges();

    // Add event listeners to the dropdown and checkbox
    if (selectLevelEle) {
        selectLevelEle.addEventListener('change', filterColleges);
    }

    if (showQualifyingCollegesEle) {
        showQualifyingCollegesEle.addEventListener('change', filterColleges);
    }
});
</script>