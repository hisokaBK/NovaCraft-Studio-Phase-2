<?php 
echo (isset($_SESSION['ok_r']) && strlen($_SESSION['ok_r']) > 1)
    ? "<p class='text-green-500 text-center p-3'>{$_SESSION['ok_r']}</p>"
    : '';
?>

<section class="container mx-auto py-24">
    <h2 class="text-3xl font-bold mb-6 text-center text-sky-600">Create Account</h2>

    <form method="POST" action="/controller_register"
          class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">

        <input type="text" name="name" placeholder="Full name"
               class="w-full border px-4 py-2 rounded-lg <?php echo !empty($_SESSION['error']['name']) ? 'border-red-500' : '' ?>">
        <?php 
        echo !empty($_SESSION['error']['name'])
            ? "<p class='px-4 text-red-400'>{$_SESSION['error']['name']}</p>"
            : '';
        ?>

        <input type="email" name="email" placeholder="Email"
               class="w-full border px-4 py-2 rounded-lg <?php echo !empty($_SESSION['error']['email']) ? 'border-red-500' : '' ?>">
        <?php 
        echo !empty($_SESSION['error']['email'])
            ? "<p class='px-4 text-red-400'>{$_SESSION['error']['email']}</p>"
            : '';
        ?>

        <input type="password" name="password" placeholder="Password"
               class="w-full border px-4 py-2 rounded-lg <?php echo !empty($_SESSION['error']['password']) ? 'border-red-500' : '' ?>">
        <?php 
        echo !empty($_SESSION['error']['password'])
            ? "<p class='px-4 text-red-400'>{$_SESSION['error']['password']}</p>"
            : '';
        ?>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Register
        </button>

    </form>
</section>
