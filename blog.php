<?php
$page_key = 'blog';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/blog-data.php';

$posts = get_all_blog_posts();
?>

<!-- Blog Hero -->
<section class="relative h-[65vh] min-h-[500px] flex items-center bg-fixed bg-cover bg-center" style="background-image: url('<?php echo url('/assets/cloudinary/-7261_itcxch.png'); ?>');">
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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($posts as $post): ?>
                <!-- Post Card -->
                <article class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group flex flex-col h-full border border-gray-100">
                    <!-- Image -->
                    <div class="relative h-64 overflow-hidden">
                        <a href="<?php echo url('/single-blog.php?slug=' . $post['slug']); ?>" class="block h-full w-full">
                            <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
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
                            <a href="<?php echo url('/single-blog.php?slug=' . $post['slug']); ?>"><?php echo htmlspecialchars($post['title']); ?></a>
                        </h3>

                        <p class="text-gray-600 font-light leading-relaxed mb-6 line-clamp-3">
                            <?php echo htmlspecialchars($post['excerpt']); ?>
                        </p>

                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between">
                            <a href="<?php echo url('/single-blog.php?slug=' . $post['slug']); ?>" class="inline-flex items-center text-sm font-bold text-brand-purple uppercase tracking-wider hover:text-brand-orange transition-colors group-hover:translate-x-1 duration-300">
                                Read More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
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
