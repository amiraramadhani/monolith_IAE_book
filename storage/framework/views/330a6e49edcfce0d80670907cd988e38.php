<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl"><?php echo e($book['volumeInfo']['title'] ?? 'Unknown Title'); ?></h1>
            <?php if(isset($book['volumeInfo']['authors'])): ?>
            <p class="text-lg text-gray-600">By <?php echo e(implode(', ', $book['volumeInfo']['authors'])); ?></p>
            <?php endif; ?>
        </section>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="flex justify-center">
                <?php if(isset($book['volumeInfo']['imageLinks']['medium'])): ?>
                <img src="<?php echo e($book['volumeInfo']['imageLinks']['medium']); ?>" alt="Book Cover" class="w-[120] h-[400px] object-cover rounded-lg shadow-lg">
                <?php elseif(isset($book['volumeInfo']['imageLinks']['thumbnail'])): ?>
                <img src="<?php echo e($book['volumeInfo']['imageLinks']['thumbnail']); ?>" alt="Book Cover" class="w-[120] h-[400px] object-cover rounded-lg shadow-lg">
                <?php else: ?>
                <p class="text-gray-500">No Image Available</p>
                <?php endif; ?>
            </div>

            <div class="space-y-4">
                <?php if(isset($book['volumeInfo']['publisher'])): ?>
                <p><strong>Publisher:</strong> <?php echo e($book['volumeInfo']['publisher']); ?></p>
                <?php endif; ?>

                <?php if(isset($book['volumeInfo']['publishedDate'])): ?>
                <p><strong>Published Date:</strong> <?php echo e($book['volumeInfo']['publishedDate']); ?></p>
                <?php endif; ?>

                <?php if(isset($book['volumeInfo']['pageCount'])): ?>
                <p><strong>Pages:</strong> <?php echo e($book['volumeInfo']['pageCount']); ?></p>
                <?php endif; ?>

                <?php if(isset($book['volumeInfo']['categories'])): ?>
                <p><strong>Categories:</strong> <?php echo e(implode(', ', $book['volumeInfo']['categories'])); ?></p>
                <?php endif; ?>

                <?php if(!empty($book['volumeInfo']['description'])): ?>
                <div class="max-h-60 overflow-y-auto">
                    <p class="text-gray-700"><strong>Description:</strong> <?php echo e($book['volumeInfo']['description']); ?></p>
                </div>
                <?php endif; ?>

                <?php if(isset($book['volumeInfo']['previewLink'])): ?>
                <a href="<?php echo e($book['volumeInfo']['previewLink']); ?>" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg">Preview on Google Books</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\data d\Tugas\semester 6\integrasi aplikasi enterprise\google-books-search\google-books-search\resources\views/books/show.blade.php ENDPATH**/ ?>