
<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Create Account</h2>
    
   <form method="POST" action="/register"
      class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">


  <input type="text" name="name" placeholder="Full name" required
         class="w-full border px-4 py-2 rounded-lg">

  <input type="email" name="email" placeholder="Email" required
         class="w-full border px-4 py-2 rounded-lg">

  <input type="password" name="password" placeholder="Password" required
         class="w-full border px-4 py-2 rounded-lg">

  <button type="submit"
          class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
    Register
  </button>
</form>

</section>