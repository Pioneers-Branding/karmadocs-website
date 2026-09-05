<?php
$page_key = '404';
$page_title = 'Page Not Found | Karma Doctors & Associates';
require_once __DIR__ . '/includes/header.php';
?>

<div class="container mx-auto px-4 py-32 text-center min-h-[60vh] flex flex-col justify-center items-center">
    <h1 class="text-7xl font-extrabold text-brand-purple mb-4">404</h1>
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Page Not Found</h2>
    <p class="text-lg text-gray-600 mb-8 max-w-md">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <a href="<?php echo url('/'); ?>" class="inline-block bg-brand-orange text-white px-8 py-3.5 rounded-full font-bold uppercase tracking-wider hover:bg-brand-orangeHover transition-colors shadow-lg">
        Go Back Home
    </a>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
