<?php include 'includes/header.php'; ?>

<div class="min-h-screen pt-20 overflow-hidden">

    <!-- ================= HERO ================= -->
    <section class="relative min-h-[calc(100vh-80px)] md:min-h-[90vh] flex items-center justify-center overflow-hidden pb-12 md:pb-0">
        <!-- Glow Background -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] md:w-[800px] md:h-[800px] bg-primary/20 blur-[90px] md:blur-[120px] rounded-full opacity-60 md:opacity-100"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] md:w-[600px] md:h-[600px] bg-secondary/10 blur-[80px] md:blur-[100px] rounded-full opacity-60 md:opacity-100"></div>

        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">
            <!-- LEFT TEXT -->
            <div class="space-y-6 text-center md:text-left" data-aos="fade-up">
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold font-heading tracking-tight">
                    Sales | Solutions <br />
                    <span class="text-4xl sm:text-5xl md:text-7xl font-bold font-heading tracking-tight text-primary">Services | Support</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-lg mx-auto md:mx-0">
                    Integrated Technologies, Empowering your digital journey with expert service, advanced repair, and reliable solutions.
                </p>
                <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                    <a href="contact.php" class="px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-semibold shadow-lg hover:scale-105 transition-transform">
                        Book a Service
                    </a>
                    <a href="services.php" class="px-6 py-3 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 transition flex items-center gap-2">
                        Explore Services <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- RIGHT VISUAL -->
            <div class="relative w-full" data-aos="fade-up" data-aos-delay="200">
                <div class="relative w-full h-[350px] md:h-[500px] rounded-3xl border border-gray-200 bg-white/50 backdrop-blur-sm flex items-center justify-center overflow-hidden">
                    
                    <!-- CONNECTION LINES -->
                    <svg class="absolute inset-0 w-full h-full opacity-20">
                        <line x1="25%" y1="30%" x2="50%" y2="50%" stroke="black" stroke-width="1" />
                        <line x1="75%" y1="70%" x2="50%" y2="50%" stroke="black" stroke-width="1" />
                    </svg>

                    <!-- EXPERIENCE -->
                    <div class="absolute top-6 right-6 md:top-10 md:right-10 p-2 md:p-3 bg-white/80 rounded-xl border border-gray-200 shadow-lg flex items-center gap-2 md:gap-3 animate-float" style="animation-delay: 0s;">
                        <i data-lucide="shield-check" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div>
                            <p class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Experience</p>
                            <p class="font-semibold text-gray-900 text-sm md:text-base">25+ Years</p>
                        </div>
                    </div>

                    <!-- AVAILABILITY -->
                    <div class="absolute bottom-6 left-6 md:bottom-10 md:left-10 p-2 md:p-3 bg-white/80 rounded-xl border border-gray-200 shadow-lg flex items-center gap-2 md:gap-3 animate-float" style="animation-delay: 2s;">
                        <i data-lucide="clock" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div>
                            <p class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Availability</p>
                            <p class="font-semibold text-gray-900 text-xs md:text-sm">Mon–Sat 10:30–7:30</p>
                        </div>
                    </div>

                    <!-- CENTER CORE -->
                    <div class="relative z-10">
                        <div class="absolute inset-0 bg-blue-500/20 blur-2xl rounded-full animate-pulse"></div>
                        <div class="w-28 h-28 md:w-36 md:h-36 rounded-2xl bg-white border border-gray-200 shadow-[0_0_40px_rgba(37,99,235,0.15)] backdrop-blur-md"></div>
                    </div>

                    <!-- SERVER -->
                    <div class="absolute top-6 left-6 md:top-10 md:left-10 animate-float" style="animation-delay: 1s;">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-500/15 blur-2xl rounded-full animate-pulse"></div>
                            <i data-lucide="server" class="text-gray-900 w-16 h-16 md:w-28 md:h-28 relative z-10 drop-shadow-lg"></i>
                        </div>
                    </div>

                    <!-- STORAGE -->
                    <div class="absolute bottom-6 right-6 md:bottom-10 md:right-10 animate-float" style="animation-delay: 3s;">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-500/15 blur-2xl rounded-full animate-pulse"></div>
                            <i data-lucide="hard-drive" class="text-gray-900 w-16 h-16 md:w-28 md:h-28 relative z-10 drop-shadow-lg"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ================= SERVICES ================= -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-gray-900">Our Expertise</h2>
                <p class="text-gray-600 mt-3">Comprehensive technology and repair solutions for modern needs.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <?php
                    $services = [
                        ["icon" => "shopping-bag", "title" => "Product Sales", "desc" => "Branded & custom PCs."],
                        ["icon" => "wifi", "title" => "Networking", "desc" => "LAN/WAN & infrastructure."],
                        ["icon" => "shield-check", "title" => "AMC Plans", "desc" => "Business maintenance plans."],
                        ["icon" => "wrench", "title" => "Expert Repair", "desc" => "Chip-level diagnostics."],
                        ["icon" => "monitor", "title" => "Software", "desc" => "OS, antivirus & business apps."],
                        ["icon" => "award", "title" => "Authorized Partner", "desc" => "Trusted partner for top global tech brands."]
                    ];

                    foreach ($services as $idx => $s) {
                        $delay = $idx * 100;
                        echo "
                        <div class='p-6 md:p-8 rounded-2xl bg-white border border-gray-200 hover:border-primary/60 transition shadow-sm hover:shadow-md' data-aos='fade-up' data-aos-delay='$delay'>
                            <i data-lucide='{$s['icon']}' class='w-8 h-8 mb-4 text-primary'></i>
                            <h3 class='text-lg md:text-xl font-semibold tracking-tight text-gray-900'>{$s['title']}</h3>
                            <p class='text-gray-600 mt-2 text-sm md:text-base'>{$s['desc']}</p>
                        </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- ================= REVIEWS ================= -->
    <?php include 'includes/reviews.php'; ?>

    <!-- ================= CTA ================= -->
    <section class="py-20 md:py-28 text-center">
        <div class="max-w-3xl mx-auto px-6" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 tracking-tight text-gray-900">Ready to Transform Your Technology?</h2>
            <p class="text-gray-600 mb-8">Partner with Integrated Technologies for reliable solutions and expert support.</p>
            <a href="contact.php" class="px-8 py-3 md:px-10 md:py-4 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-semibold shadow-lg transition hover:scale-105">
                Get Started
            </a>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>
