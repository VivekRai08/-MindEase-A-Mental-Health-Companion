<?php
// Include the database connection and necessary functions
include_once __DIR__ . '/bootstrap.php';

// Fetch books from the database
$books = $db->getMultipleRows("SELECT * FROM books ORDER BY id ASC");

include_once 'includes/header.php';
?>

<style>
    #scrollBtn {
    display: none; /* Hidden by default */
    position: fixed;
    bottom: 20px;
    right: 120px;
    z-index: 100;
    font-size: 18px;
    background-color: #007bff;
    color: white;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 50%;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

#scrollBtn:hover {
    background-color: #0056b3;
}

</style>
<!-- Main content -->
<button onclick="scrollToTop()" id="scrollBtn" title="Go to top">▲</button>
<section class="content">
    <div class="container-fluid mb-5">
        <div class="row pt-3">
            <div class="col-12">
                <h2 class="section-header">Available Books</h2>
                <?php if (!isset($_SESSION['username'])): ?>
                    <h5 class="text-muted">Browse the collection of available books below:</h5>
                <?php endif; ?>
            </div>
        </div>

        <!-- Book Cards -->
        <div class="row pt-3" id="bookCards">
            <?php foreach ($books as $book): ?>
                <div class="col-12 col-md-6 mb-6 book-card">
                    <!-- Book Card -->
                    <div class="card h-100 shadow-sm">
    <div class="card-header text-center">
        <h5 class="card-title mb-0"><?= htmlspecialchars($book['name']) ?></h5>
    </div>
    <div class="card-body text-center">
        <!-- Display Book Image -->
        <?php if(isset($book) && !empty($book['image'])){ ?>
                                                <img src="data:image/jpeg;base64,<?= base64_encode($book['image']) ?>"
                                                    alt="Book Image" class="img-fluid">
                                                <?php } else { ?>
                                                    <img src="<?php echo IMAGE_PATH ."book.jpg" ?>"
                                                    alt="Book Image" class="img-fluid">
                                                <?php } ?>
        <!-- <img src="<?= htmlspecialchars($book['image']) ?>" alt="" class="img-fluid rounded mb-3" style="max-height: 200px;"> -->
        <!-- Display Book Description -->
        <p class="card-text"><?= htmlspecialchars($book['description']) ?></p>
        <!-- Display Book Author -->
        <ul class="list-group list-group-flush rounded border">
            <li class="list-group-item"><strong>Author:</strong> <?= htmlspecialchars($book['author']) ?></li>
        </ul>
    </div>
    <div class="card-footer text-center">
      <a href="https://drive.google.com/drive/folders/1kpF2UmDyMX9_ZvDr_W8OCvpQj6sbnMIr" target="_blank" class="btn btn-primary">Read More</a> 
      <a href="https://www.amazon.in/dp/XXXXXXXXXX" target="_blank" class="btn btn-primary">Buy Now</a>
   
    </div>
</div>

                    <!-- End Book Card -->
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
    // Show button when scrolling down
    window.onscroll = function() {
        let scrollBtn = document.getElementById("scrollBtn");
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            scrollBtn.style.display = "block";
        } else {
            scrollBtn.style.display = "none";
        }
    };

    // Scroll to top function
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

