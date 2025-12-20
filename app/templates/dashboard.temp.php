
<section class="container mx-auto py-16">

    <div class="max-w-6xl mx-auto bg-white p-8 shadow-md rounded-lg">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-sky-600">Users Dashboard</h2>

        </div>

      <div class="flex">
       <img src="assets/dachbor.gif" alt="">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Created At</th>
                    <th class="border px-4 py-2">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($users) > 0): ?>
                    <?php foreach ($users as $user): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($user['id']); ?></td>
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($user['name']); ?></td>
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($user['email']); ?></td>
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($user['created_at']); ?></td>
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($user['role']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-500">
                            No users found
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

   </div>
 </div>

</section>

