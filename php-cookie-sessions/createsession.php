<?php 
    session_start();
    $counter = $_SESSION['counter'] ?? 0;
    $counter = $counter + 2;
    $_SESSION['counter'] = $counter;

    $message = 'Page views: ' . $counter;
?>

<h1>Welcome</h1>
<p><?= $message; ?></p>
<p><a href="createsession.php">Refresh this page</a> to see the page views increase.</p