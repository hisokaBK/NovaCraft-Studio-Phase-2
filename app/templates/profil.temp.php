<?php
if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<section class="container mx-auto py-16">
    <div class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">

        <h2 class="text-3xl font-bold text-center">My Profile</h2>

        <div class="border-t pt-4 space-y-2">
            <p><strong>Name :</strong> <?php echo htmlspecialchars($user['name']); ?></p>
            <p><strong>Email :</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <img src="assets/fani.gif" alt="">
        </div>

        <form method="POST" action="/controller_sign_out">
            <button type="submit"
                    class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">
                Logout
            </button>
        </form>

    </div>
</section>

</body>
</html>
