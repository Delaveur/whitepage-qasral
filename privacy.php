<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the grandeur of Qasr Al Watan, the majestic presidential palace in Abu Dhabi. Explore its stunning architecture, cultural exhibits, and light shows. Book your tickets online for an unforgettable experience!" />
    <meta name="keywords" content="presidential palace abu dhabi tickets, qasr al watan ticket price, qasr al watan tickets, abu dhabi palace tickets, qasr al watan light show, qasr al watan timings, uae presidential palace tickets">
    <meta name="author" content="Qasr Al Watan">
    <title>Privacy policy</title>
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
                    <li><a href="/en/explore-the-palace/" class="font-medium hover:text-yellow-500">Explore the palace</a></li>
                    <li><a href="/en/tickets/" class="font-medium hover:text-yellow-500">Tickets</a></li>
                    <li><a href="/en/plan-your-visit/opening-hours#visitors-information" class="font-medium hover:text-yellow-500">Visitors Information</a></li>
                    <li><a href="/#inside-qasralwatan" class="font-medium hover:text-yellow-500">Inside Qasr Al Watan</a></li>
                    <li><a href="/en/contactus/" class="font-medium hover:text-yellow-500">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Мобильное меню -->
    <div id="mobile-menu" class="hidden bg-gray-100 text-blue-800 p-4 lg:hidden overflow-hidden h-0">
        <ul class="py-4">
            <li><a href="/en/explore-the-palace/" class="block py-2 hover:text-yellow-500">Explore the palace</a></li>
            <li><a href="/en/tickets/" class="block py-2 hover:text-yellow-500">Tickets</a></li>
            <li><a href="/en/plan-your-visit/opening-hours#visitors-information" class="block py-2 hover:text-yellow-500">Visitors Information</a></li>
            <li><a href="/#inside-qasralwatan" class="block py-2 hover:text-yellow-500">Inside Qasr Al Watan</a></li>
            <li><a href="/en/contactus/" class="block py-2 hover:text-yellow-500">Contact Us</a></li>
        </ul>
    </div>
    <!-- Section 1 -->
    <section class="max-w-[1400px] min-h-[854px] mx-auto py-12 px-4 md:px-8">
    <h1 class="text-3xl font-bold mb-4">Privacy Policy</h1>
        <p>We take the confidentiality of your personal information very seriously. This policy explains what information we collect, how it is used, and your rights as a user.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Collected Information</h2>
        <p>We collect data when you interact with our website, such as:</p>
        <ul class="list-disc list-inside mt-4">
            <li>Your contact information (name, email, phone number).</li>
            <li>Information about your device (IP address, browser, operating system).</li>
            <li>Your preferences and interactions with the site.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Use of Data</h2>
        <p>We use your information to:</p>
        <ul class="list-disc list-inside mt-4">
            <li>Provide the requested services.</li>
            <li>Improve our products and services.</li>
            <li>Send relevant communications and respond to your inquiries.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Data Sharing</h2>
        <p>Your data is shared only:</p>
        <ul class="list-disc list-inside mt-4">
            <li>With third-party service providers for the operation of our website.</li>
            <li>If required by law.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Your Rights</h2>
        <p>You have the right to access, correct, or request the deletion of your personal data. For any request, please contact us via our contact form.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Security</h2>
        <p>We employ advanced security measures to protect your information from unauthorized access.</p>
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