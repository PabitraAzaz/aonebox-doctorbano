<?php if ($pager->getPageCount() > 1): ?>
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center space-x-2">

        <!-- Previous -->
        <?php if ($pager->getPreviousPageNumber()): ?>
            <a href="<?= $pager->getPreviousPage() ?>"
                class="px-3 py-1 rounded-md bg-gray-200 text-gray-700 hover:bg-gray-300">Prev</a>
        <?php else: ?>
            <span class="px-3 py-1 rounded-md bg-gray-100 text-gray-400">Prev</span>
        <?php endif; ?>

        <!-- Page Numbers -->
        <?php foreach ($pager->links() as $link): ?>
            <a href="<?= $link['uri'] ?>"
                class="px-3 py-1 rounded-md <?= $link['active'] ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' ?>">
                <?= $link['title'] ?>
            </a>
        <?php endforeach; ?>

        <!-- Next -->
        <?php if ($pager->getNextPageNumber()): ?>
            <a href="<?= $pager->getNextPage() ?>"
                class="px-3 py-1 rounded-md bg-gray-200 text-gray-700 hover:bg-gray-300">Next</a>
        <?php else: ?>
            <span class="px-3 py-1 rounded-md bg-gray-100 text-gray-400">Next</span>
        <?php endif; ?>
    </nav>
<?php endif; ?> 