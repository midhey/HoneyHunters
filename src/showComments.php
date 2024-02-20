<?php
global $db_connect;
include 'db.php';

$result = $db_connect->query("SELECT * FROM comments ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    echo '
    <div class="col-lg-4 comment">
        <div class="col-10 m-auto">
            <header>
                <p class="text-center text-white fw-medium py-3 mb-0">' . htmlspecialchars($row['name']) . '</p>
            </header>
            <main class="py-3">
                <p class="text-center fw-bold pt-4">' . htmlspecialchars($row['email']) . '</p>
                <p class="text-center fw-medium mt-5">' . htmlspecialchars($row['comment']) . '</p>
            </main>
        </div>
    </div>';
}

$db_connect->close();
?>
