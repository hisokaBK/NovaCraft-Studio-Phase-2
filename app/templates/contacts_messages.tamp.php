<div class="max-w-6xl mx-auto bg-white p-6 shadow-md rounded-lg mb-8">
        <div class="flex items-center gap-3 mb-6 justify-between">
            <h2 class="text-2xl font-bold text-sky-600">Contact Messages</h2>
            <img class="h-[60px]" src="assets/ss.jpg" alt="">
        </div>

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Message</th>
                    <th class="border px-4 py-2">Send At</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($messages) > 0): ?>
                    <?php foreach ($messages as $msg): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2"><?= htmlspecialchars($msg['id']) ?></td>
                            <td class="border px-4 py-2"><?= htmlspecialchars($msg['name']) ?></td>
                            <td class="border px-4 py-2"><?= htmlspecialchars($msg['email']) ?></td>
                            <td class="border px-4 py-2 max-w-md truncate">
                                <?= htmlspecialchars($msg['message']) ?>
                            </td>
                            <td class="border px-4 py-2"><?= htmlspecialchars($msg['send_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">
                            No messages found
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>

</section>