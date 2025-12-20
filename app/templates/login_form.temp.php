<?php 
echo (isset($_SESSION['ok']) && strlen($_SESSION['ok']) > 1)
    ? "<p class='text-green-500 text-center p-3'>{$_SESSION['ok']}</p>"
    : '';
?>

<section class="container mx-auto py-[121px]">
    <h2 class="text-3xl font-bold mb-6 text-center text-sky-600">Login</h2>

    <form method="POST" action="/controller_login"
          class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">

        <input type="email" name="email" placeholder="Email"
               class="w-full border px-4 py-2 rounded-lg <?php echo !empty($_SESSION['error']['email_log']) ? 'border-red-500' : '' ?>">
        <?php 
        echo !empty($_SESSION['error']['email_log'])
            ? "<p class='px-4 text-red-400'>{$_SESSION['error']['email_log']}</p>"
            : '';
        ?>

        <input type="password" name="password" placeholder="Password"
               class="w-full border px-4 py-2 rounded-lg <?php echo !empty($_SESSION['error']['password_log']) ? 'border-red-500' : '' ?>">
        <?php 
        echo !empty($_SESSION['error']['password_log'])
            ? "<p class='px-4 text-red-400'>{$_SESSION['error']['password_log']}</p>"
            : '';
        ?>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Login
        </button>

        <p class=" pl-3">Don't have account ? <a  class="text-sky-500" href="/register">Sign up</a></p>

    </form>
</section>
