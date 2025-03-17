<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['book', 'bookId']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['book', 'bookId']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-300">

    <div class="w-[120px] h-[150px] shrink-0 bg-gray-200 rounded-md overflow-hidden flex items-center justify-center">
        <?php if(!empty($book['imageLinks']['smallThumbnail'])): ?>
            <img src="<?php echo e($book['imageLinks']['smallThumbnail']); ?>" alt="<?php echo e($book['title']); ?>" class="w-full h-full object-cover">
        <?php else: ?>
            <span class="text-sm text-gray-500">No Image</span>
        <?php endif; ?>
    </div>

    <div class="flex flex-col justify-between flex-1 py-2">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
            <a href="/books/<?php echo e($bookId); ?>" target="_blank"><?php echo e($book['title']); ?></a>
        </h3>
        <div class="mt-4 text-sm line-clamp-3">
         Authors : <?php echo e(isset($book['authors']) ? implode(', ', $book['authors']) : 'No author available.'); ?>

        </div>
        <div class="mt-4 text-sm line-clamp-3">
        Description : <?php echo e($book['description'] ?? 'No description available.'); ?>

        </div>
    </div>
</div>
<?php /**PATH D:\data d\Tugas\semester 6\integrasi aplikasi enterprise\google-books-search\google-books-search\resources\views/components/book-card-wide.blade.php ENDPATH**/ ?>