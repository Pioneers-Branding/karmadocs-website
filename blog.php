<?php
$page_key = 'blog';
require_once __DIR__ . '/includes/blog-data.php';

$per_page   = 9;
$categories = get_blog_categories();
$active_cat = isset($_GET['cat']) ? trim($_GET['cat']) : '';
if ($active_cat !== '' && !isset($categories[$active_cat])) {
    $active_cat = '';
}
$paged = isset($_GET['paged']) ? (int) $_GET['paged'] : 1;
$data  = get_blog_posts_paged($paged, $per_page, $active_cat);
$posts = $data['posts'];

$page_title = $active_cat !== ''
    ? $active_cat . ' Articles | Karma Doctors Blog'
    : 'Mental Health Blog & Insights | Karma Doctors & Associates';
$meta_desc = 'Expert articles on TMS therapy, depression, anxiety, ADHD, PTSD and mental health from the psychiatric team at Karma Doctors & Associates.';

/** Build a listing URL that keeps the active category. */
function blog_page_url($page, $cat) {
    $q = [];
    if ($cat !== '')  { $q['cat'] = $cat; }
    if ($page > 1)    { $q['paged'] = $page; }
    return url('blog' . ($q ? '?' . http_build_query($q) : ''));
}

require_once __DIR__ . '/includes/header.php';
?>

<!-- Blog Hero -->
<section class="relative h-[65vh] min-h-[500px] flex items-center bg-fixed bg-cover bg-center" style="background-image: url('<?php echo url('assets/cloudinary/-7261_itcxch.png'); ?>');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent mix-blend-multiply"></div>

    <div class="container mx-auto px-6 relative z-10 pt-20">
        <div class="max-w-3xl">
            <h1 class="font-sans text-4xl md:text-6xl font-bold mb-6 leading-tight text-white drop-shadow-md" data-aos="fade-right">
                Our Blog & <br><span class="text-brand-orange">Insights</span>
            </h1>

            <div class="w-24 h-1 bg-brand-orange mb-8 rounded-full" data-aos="fade-right" data-aos-delay="100"></div>

            <p class="text-xl text-gray-50 font-medium leading-relaxed max-w-xl" data-aos="fade-right" data-aos-delay="200">
                Latest updates, mental health tips, and stories from Karma Doctors & Associates.
            </p>
        </div>
    </div>
</section>

<!-- Blog Grid Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="container mx-auto px-4">

        <!-- Category Filter -->
        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up">
            <a href="<?php echo blog_page_url(1, ''); ?>"
               class="px-5 py-2 rounded-full text-sm font-semibold transition-colors border <?php echo $active_cat === '' ? 'bg-brand-purple text-white border-brand-purple' : 'bg-white text-gray-600 border-gray-200 hover:border-brand-purple hover:text-brand-purple'; ?>">
                All <span class="opacity-60">(<?php echo count(get_blog_index()); ?>)</span>
            </a>
            <?php foreach ($categories as $cat_name => $cat_count): ?>
                <a href="<?php echo blog_page_url(1, $cat_name); ?>"
                   class="px-5 py-2 rounded-full text-sm font-semibold transition-colors border <?php echo $active_cat === $cat_name ? 'bg-brand-purple text-white border-brand-purple' : 'bg-white text-gray-600 border-gray-200 hover:border-brand-purple hover:text-brand-purple'; ?>">
                    <?php echo htmlspecialchars($cat_name); ?> <span class="opacity-60">(<?php echo $cat_count; ?>)</span>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Result count -->
        <p class="text-center text-sm text-gray-500 mb-10">
            Showing <?php echo count($posts); ?> of <?php echo $data['total']; ?> article<?php echo $data['total'] === 1 ? '' : 's'; ?>
            <?php if ($active_cat !== ''): ?> in <span class="font-semibold text-gray-700"><?php echo htmlspecialchars($active_cat); ?></span><?php endif; ?>
            &nbsp;&bull;&nbsp; Page <?php echo $data['page']; ?> of <?php echo $data['total_pages']; ?>
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($posts as $post): ?>
                <!-- Post Card -->
                <article class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group flex flex-col h-full border border-gray-100">
                    <!-- Image -->
                    <div class="relative h-64 overflow-hidden">
                        <a href="<?php echo url($post['slug']); ?>" class="block h-full w-full">
                            <img src="<?php echo url($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" width="1600" height="900" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-brand-purple/20 group-hover:bg-transparent transition-colors duration-300"></div>
                        </a>
                        <!-- Badge -->
                        <div class="absolute top-4 left-4 z-10">
                            <span class="inline-block px-3 py-1 bg-brand-orange/90 text-white text-xs font-bold uppercase tracking-wider rounded-full backdrop-blur-sm shadow-sm">
                                <?php echo htmlspecialchars($post['category']); ?>
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4 text-xs font-semibold uppercase tracking-wider text-gray-400 flex items-center space-x-2">
                            <span class="text-brand-purple">
                                <i class="far fa-calendar-alt mr-1"></i> <?php echo htmlspecialchars($post['date']); ?>
                            </span>
                            <span>&bull;</span>
                            <span><?php echo htmlspecialchars($post['author']); ?></span>
                        </div>

                        <h3 class="text-xl font-bold font-sans text-gray-900 mb-4 leading-tight group-hover:text-brand-purple transition-colors">
                            <a href="<?php echo url($post['slug']); ?>"><?php echo htmlspecialchars($post['title']); ?></a>
                        </h3>

                        <p class="text-gray-600 font-light leading-relaxed mb-6 line-clamp-3">
                            <?php echo htmlspecialchars($post['excerpt']); ?>
                        </p>

                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between">
                            <a href="<?php echo url($post['slug']); ?>" class="inline-flex items-center text-sm font-bold text-brand-purple uppercase tracking-wider hover:text-brand-orange transition-colors group-hover:translate-x-1 duration-300">
                                Read More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if ($data['total_pages'] > 1): ?>
            <nav class="flex justify-center items-center gap-2 mt-16 flex-wrap" aria-label="Blog pagination">
                <?php if ($data['page'] > 1): ?>
                    <a href="<?php echo blog_page_url($data['page'] - 1, $active_cat); ?>" rel="prev"
                       class="px-4 py-2.5 rounded-lg bg-white border border-gray-200 text-gray-600 hover:border-brand-purple hover:text-brand-purple transition-colors text-sm font-semibold">
                        <i class="fas fa-chevron-left text-xs mr-1"></i> Prev
                    </a>
                <?php endif; ?>

                <?php
                $win_start = max(1, $data['page'] - 2);
                $win_end   = min($data['total_pages'], $data['page'] + 2);
                if ($win_start > 1): ?>
                    <a href="<?php echo blog_page_url(1, $active_cat); ?>" class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-gray-200 text-gray-600 hover:border-brand-purple hover:text-brand-purple transition-colors text-sm font-semibold">1</a>
                    <?php if ($win_start > 2): ?><span class="px-1 text-gray-400">&hellip;</span><?php endif; ?>
                <?php endif; ?>

                <?php for ($i = $win_start; $i <= $win_end; $i++): ?>
                    <a href="<?php echo blog_page_url($i, $active_cat); ?>"
                       <?php echo $i === $data['page'] ? 'aria-current="page"' : ''; ?>
                       class="w-10 h-10 flex items-center justify-center rounded-lg border transition-colors text-sm font-semibold <?php echo $i === $data['page'] ? 'bg-brand-purple text-white border-brand-purple' : 'bg-white border-gray-200 text-gray-600 hover:border-brand-purple hover:text-brand-purple'; ?>">
                        <?php echo $i; ?>
                    </a>
                <?php endfor; ?>

                <?php if ($win_end < $data['total_pages']): ?>
                    <?php if ($win_end < $data['total_pages'] - 1): ?><span class="px-1 text-gray-400">&hellip;</span><?php endif; ?>
                    <a href="<?php echo blog_page_url($data['total_pages'], $active_cat); ?>" class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-gray-200 text-gray-600 hover:border-brand-purple hover:text-brand-purple transition-colors text-sm font-semibold"><?php echo $data['total_pages']; ?></a>
                <?php endif; ?>

                <?php if ($data['page'] < $data['total_pages']): ?>
                    <a href="<?php echo blog_page_url($data['page'] + 1, $active_cat); ?>" rel="next"
                       class="px-4 py-2.5 rounded-lg bg-white border border-gray-200 text-gray-600 hover:border-brand-purple hover:text-brand-purple transition-colors text-sm font-semibold">
                        Next <i class="fas fa-chevron-right text-xs ml-1"></i>
                    </a>
                <?php endif; ?>
            </nav>
        <?php endif; ?>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-20 bg-brand-purple text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold font-sans mb-6">Stay Updated with Karma Docs</h2>
        <p class="text-lg text-purple-100 mb-10 max-w-2xl mx-auto font-light">
            Subscribe to our newsletter for the latest mental health insights, tips, and clinic updates.
        </p>

        <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
            <input type="email" required placeholder="Your email address" class="flex-grow px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-brand-orange shadow-lg">
            <button type="submit" class="bg-brand-orange text-white font-bold py-4 px-8 rounded-full shadow-lg hover:bg-brand-orangeHover transition-transform hover:-translate-y-1 transform duration-300 uppercase tracking-wider text-sm">
                Subscribe
            </button>
        </form>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
