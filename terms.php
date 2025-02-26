<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the grandeur of Qasr Al Watan, the majestic presidential palace in Abu Dhabi. Explore its stunning architecture, cultural exhibits, and light shows. Book your tickets online for an unforgettable experience!" />
    <meta name="keywords" content="presidential palace abu dhabi tickets, qasr al watan ticket price, qasr al watan tickets, abu dhabi palace tickets, qasr al watan light show, qasr al watan timings, uae presidential palace tickets">
    <meta name="author" content="Qasr Al Watan">
    <title>Terms of conduct</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleMenu() {
            let menu = document.getElementById("mobile-menu");
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden", "h-0");
                menu.classList.add("h-auto", "p-4");
            } else {
                menu.classList.add("hidden", "h-0");
                menu.classList.remove("h-auto", "p-4");
            }
        }
    </script>
</head>
<body>
    <div class="bg-white text-blue-800 py-4 px-6 border-b-2 border-yellow-500">
        <div class="max-w-[1400px] mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-yellow-500"><a href="/">Qasr Al Watan</a></h1>
            <button class="lg:hidden" onclick="toggleMenu()">☰</button>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6">
                    <li><a href="/calendars/day/#/theme-park/" class="font-medium hover:text-yellow-500">Day view</a></li>
                    <li><a href="/offers-discounts/" class="font-medium hover:text-yellow-500">Offers</a></li>
                    <li><a href="/destinations/theme-park/" class="font-medium hover:text-yellow-500">Theme park</a></li>
                    <li><a href="/railroad/" class="font-medium hover:text-yellow-500">Railroad</a></li>
                    <li><a href="/sliding/" class="font-medium hover:text-yellow-500">Sliding Sleighs</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Мобильное меню -->
    <div id="mobile-menu" class="hidden bg-gray-100 text-blue-800 p-4 lg:hidden overflow-hidden h-0">
        <ul class="py-4">
            <li><a href="/calendars/day/#/theme-park/" class="block py-2 hover:text-yellow-500">Day view</a></li>
            <li><a href="/offers-discounts/" class="block py-2 hover:text-yellow-500">Offers</a></li>
            <li><a href="/destinations/theme-park/" class="block py-2 hover:text-yellow-500">Theme park</a></li>
            <li><a href="/railroad/" class="block py-2 hover:text-yellow-500">Railroad</a></li>
            <li><a href="/sliding/" class="block py-2 hover:text-yellow-500">Sliding Sleighs</a></li>
        </ul>
    </div>
    <!-- Section 1 -->
    <section class="max-w-[1400px] min-h-[854px] mx-auto py-12 px-4 md:px-8">
    <h1 class="text-3xl font-bold mb-4">General Terms</h1>
        <p>These general terms govern the use of our website. By accessing this site, you agree to the terms and conditions described below.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Use of the Site</h2>
        <p>The site is intended for personal and non-commercial use. You agree not to use the site for illegal or harmful activities.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Intellectual Property</h2>
        <p>All site content, including text, images, logos, and other elements, is protected by copyright. Any reproduction or distribution without prior authorization is prohibited.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Liabilities</h2>
        <p>We cannot be held responsible for direct or indirect damages resulting from the use of our website. You use the site at your own risk.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Modifications</h2>
        <p>We reserve the right to modify these general terms at any time. Changes will take effect as soon as they are published on the site.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Contact</h2>
        <p>If you have any questions regarding these general terms, please contact us through our contact form.</p>
    </section>
    <footer class="bg-gray-800 text-white text-center py-4">
        <p class="mb-3">&copy; <?php echo date("Y"); ?> Qasr Al Watan. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="/privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="/terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>