<form method="POST" action="/register"
      class="max-w-md mx-auto mt-10 bg-white p-6 rounded-xl shadow space-y-4">

  <h2 class="text-2xl font-bold text-center">Create Account</h2>

  <input type="text" name="name" placeholder="Full name" required
         class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">

  <input type="email" name="email" placeholder="Email" required
         class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">

  <input type="password" name="password" placeholder="Password" required
         class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">

  <button type="submit"
          class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
    Register
  </button>
</form>