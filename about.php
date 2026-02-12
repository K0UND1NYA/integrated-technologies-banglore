<?php include 'includes/header.php'; ?>

<div class="pt-32 pb-20 container mx-auto px-6 overflow-hidden">
    <!-- Hero Section -->
    <div class="text-center mb-16 space-y-6" data-aos="fade-up">
        <span class="text-accent font-semibold tracking-wider uppercase text-sm">Our Story</span>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900">Empowering Your Digital Journey Since 2000</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Integrated Technologies, founded by Dinesh Gurumurthy, began its journey in 2000 with a clear vision to provide unparalleled support to those grappling with computer-related challenges.
        </p>
    </div>

    <!-- Stats Grid -->
    <div class="grid md:grid-cols-4 gap-8 mb-20" id="stats-section">
        <?php
        $stats = [
            ["icon" => "users", "val" => "800+", "label" => "Satisfied Clients"],
            ["icon" => "calendar", "val" => "25+", "label" => "Glorious Years"],
            ["icon" => "briefcase", "val" => "55+", "label" => "Running Projects"],
            ["icon" => "award", "val" => "80+", "label" => "Active Clients"]
        ];

        foreach ($stats as $idx => $stat):
            $delay = $idx * 100;
            // Parse number and suffix
            $num = intval($stat['val']);
            $suffix = trim(str_replace($num, '', $stat['val']));
        ?>
        <div data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" class="p-6 bg-white border border-gray-200 rounded-2xl text-center group hover:bg-gray-50 transition-colors shadow-sm hover:shadow-md">
            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 text-primary group-hover:scale-110 transition-transform">
                <i data-lucide="<?php echo $stat['icon']; ?>" class="w-6 h-6"></i>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-1">
                <span class="counter" data-target="<?php echo $num; ?>">0</span><?php echo $suffix; ?>
            </h3>
            <p class="text-gray-500 text-sm"><?php echo $stat['label']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Content Section -->
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6 text-gray-600 leading-relaxed" data-aos="fade-right">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Integrated Technologies?</h2>
            <p>
                We work with a passion for embracing challenges and innovating new solutions in the IT sector. Our commitment to quality, coupled with our extensive experience and partnerships with leading tech brands, ensures that you receive unparalleled service and support tailored to your specific needs.
            </p>
            <ul class="space-y-3 mt-4">
                <?php
                $reasons = [
                    "Expertise and Experience",
                    "Customized Solutions",
                    "Authorized Partnerships",
                    "Comprehensive Service Range",
                    "Dedicated Customer Support"
                ];
                foreach ($reasons as $item):
                ?>
                <li class="flex items-center gap-3">
                    <div class="w-2 h-2 rounded-full bg-accent"></div>
                    <span><?php echo $item; ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="relative" data-aos="fade-left">
            <div class="absolute inset-0 bg-gradient-to-tr from-primary to-secondary rounded-2xl transform rotate-3 opacity-10 blur-lg"></div>
            <div class="relative bg-white border border-gray-200 shadow-xl rounded-2xl p-8 aspect-video flex items-center justify-center">
                <div class="text-center">
                    <p class="text-6xl font-bold text-gray-400 mb-2">2000</p>
                    <p class="text-xl font-semibold text-gray-900">Established Year</p>
                    <p class="text-sm text-gray-500 mt-2">Dinesh Gurumurthy - Founder</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Counter Animation
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the slower

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    
                    // Lower increment to slow and higher to fast
                    const inc = target / speed;

                    if (count < target) {
                        // Add inc to count and output in counter
                        counter.innerText = Math.ceil(count + inc);
                        // Call function every ms
                        setTimeout(updateCount, 20);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        };

        // Use Intersection Observer to start animation when in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target); // Run once
                }
            });
        }, { threshold: 0.5 }); // Start when 50% visible

        const statsSection = document.getElementById('stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
