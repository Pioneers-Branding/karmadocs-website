<?php
require_once __DIR__ . '/includes/blog-data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = get_blog_post_by_slug($slug);

// Unknown or missing slug: send a real 404 rather than silently showing another article.
if ($post === null) {
    http_response_code(404);
    $page_key = 'single-blog';
    $page_title = 'Article Not Found | Karma Doctors Blog';
    $meta_desc = 'The article you are looking for could not be found.';
    require_once __DIR__ . '/includes/header.php';
    ?>
    <section class="bg-gray-50 py-32">
        <div class="container mx-auto px-4 text-center max-w-xl">
            <span class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-brand-purple/10 text-brand-purple mb-6">
                <i class="fas fa-file-circle-question text-2xl"></i>
            </span>
            <h1 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-4">Article Not Found</h1>
            <p class="text-gray-500 mb-10">
                That article may have been moved or renamed. Browse our latest mental health articles instead.
            </p>
            <a href="<?php echo url('/blog'); ?>" class="inline-flex items-center justify-center bg-brand-purple hover:bg-brand-purpleLight text-white px-8 py-3.5 rounded-full font-bold uppercase text-xs tracking-wider transition-all shadow-md">
                <i class="fas fa-arrow-left mr-2"></i> Back to All Articles
            </a>
        </div>
    </section>
    <?php
    require_once __DIR__ . '/includes/footer.php';
    exit;
}

$related = get_related_blog_posts($post['slug'], 3);

$page_key = 'single-blog';
$page_title = $post['title'] . ' | Karma Doctors Blog';
$meta_desc = $post['excerpt'];

require_once __DIR__ . '/includes/header.php';
?>

<!-- Single Post Hero -->
<section class="relative h-[50vh] min-h-[400px] flex items-end pb-12">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo url($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Category -->
            <span class="inline-block py-1 px-4 rounded-full bg-brand-orange text-white text-xs font-bold uppercase tracking-widest mb-4 shadow-sm">
                <?php echo htmlspecialchars($post['category']); ?>
            </span>

            <!-- Title -->
            <h1 class="text-3xl md:text-5xl font-bold font-sans mb-4 leading-tight drop-shadow-md">
                <?php echo htmlspecialchars($post['title']); ?>
            </h1>

            <!-- Meta -->
            <div class="flex items-center justify-center space-x-4 text-sm md:text-base font-medium text-gray-200">
                <span class="flex items-center">
                    <i class="far fa-calendar-alt mr-2 text-brand-orange"></i>
                    <?php echo htmlspecialchars($post['date']); ?>
                </span>
                <span class="flex items-center">
                    <i class="far fa-user mr-2 text-brand-orange"></i>
                    <?php echo htmlspecialchars($post['author']); ?>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <!-- Post Content -->
            <div class="prose prose-lg prose-purple max-w-none font-sans text-gray-700 leading-relaxed">
                <?php echo $post['content']; ?>
            </div>

            <!-- Tags -->
            <?php if (!empty($post['tags'])): ?>
                <div class="mt-12 pt-8 border-t border-gray-100">
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($post['tags'] as $tag): ?>
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">
                                #<?php echo htmlspecialchars($tag); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Related Articles -->
        <?php if (!empty($related)): ?>
            <div class="max-w-5xl mx-auto mt-20">
                <h2 class="font-sans text-2xl font-bold text-gray-900 mb-8 text-center">
                    More in <span class="text-brand-purple"><?php echo htmlspecialchars($post['category']); ?></span>
                </h2>
                <div class="grid gap-6 md:grid-cols-3">
                    <?php foreach ($related as $rel): ?>
                        <a href="<?php echo url('/blog/' . $rel['slug']); ?>"
                           class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow border border-gray-100 flex flex-col">
                            <div class="h-40 overflow-hidden">
                                <img src="<?php echo url($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>"
                                     loading="lazy" decoding="async"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 flex flex-col flex-grow">
                                <p class="text-[11px] font-semibold uppercase tracking-wider text-gray-400 mb-2"><?php echo htmlspecialchars($rel['date']); ?></p>
                                <h3 class="font-sans font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors line-clamp-3">
                                    <?php echo htmlspecialchars($rel['title']); ?>
                                </h3>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Back to Blog Button -->
        <div class="max-w-3xl mx-auto mt-12 text-center">
            <a href="<?php echo url('/blog'); ?>" class="inline-flex items-center justify-center bg-brand-purple hover:bg-brand-purpleLight text-white px-8 py-3.5 rounded-full font-bold uppercase text-xs tracking-wider transition-all shadow-md">
                <i class="fas fa-arrow-left mr-2"></i> Back to All Articles
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
