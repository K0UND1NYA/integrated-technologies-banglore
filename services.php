<?php include 'includes/header.php'; ?>

<div class="relative pt-24 md:pt-32 pb-20 md:pb-24 overflow-hidden">
    <!-- Responsive background glow -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[420px] h-[320px] md:w-[800px] md:h-[500px] bg-gradient-to-r from-primary/20 via-accent/10 to-secondary/20 blur-[90px] md:blur-[140px] opacity-50 pointer-events-none"></div>

    <div class="container mx-auto px-5 sm:px-6 relative z-10">
        <!-- ================= HEADER ================= -->
        <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
            <span class="text-secondary font-semibold tracking-widest uppercase text-xs sm:text-sm">What We Do</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mt-3 mb-4 text-gray-900">Complete Technology Solutions</h1>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
                From product sales to expert repair and enterprise-grade IT solutions — we deliver reliable technology services tailored to your needs.
            </p>
        </div>

        <!-- ================= SERVICES GRID ================= -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-20 md:mb-24">
            <?php
            $services = [
                ["icon" => "shopping-bag", "title" => "IT Product Sales", "desc" => "Branded and custom-assembled computers for personal and business needs."],
                ["icon" => "wifi", "title" => "Networking Solutions", "desc" => "End-to-end networking, router setup, LAN/WAN configuration, and maintenance."],
                ["icon" => "shield-check", "title" => "AMC Contracts", "desc" => "Tailored annual maintenance contracts designed for small and growing businesses."],
                ["icon" => "wrench", "title" => "Expert Repair", "desc" => "Advanced repair solutions for laptops, desktops, mobile devices, and peripherals."],
                ["icon" => "award", "title" => "Authorized Reseller", "desc" => "Trusted partnerships with leading technology brands delivering quality products."],
                ["icon" => "layers", "title" => "Software Solutions", "desc" => "Business software, OS installation, antivirus, and productivity solutions."]
            ];

            foreach ($services as $idx => $srv): 
                $delay = $idx * 50;
            ?>
            <div data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" class="group relative p-6 md:p-8 bg-white border border-gray-200 rounded-2xl hover:border-primary/50 transition-all flex flex-col h-full shadow-sm hover:shadow-lg">
                <div class="relative z-10 flex flex-col h-full">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-xl flex items-center justify-center mb-5 text-primary border border-gray-100 group-hover:scale-105 transition-transform">
                        <i data-lucide="<?php echo $srv['icon']; ?>" class="w-6 h-6"></i>
                    </div>

                    <h3 class="text-lg md:text-xl font-semibold mb-2 text-gray-900"><?php echo $srv['title']; ?></h3>
                    
                    <p class="text-gray-600 mb-5 text-sm md:text-base flex-grow leading-relaxed"><?php echo $srv['desc']; ?></p>
                    
                    <a href="contact.php" class="inline-flex items-center gap-2 text-accent text-sm font-semibold hover:gap-3 transition">
                        Enquire Now <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- ================= CTA ================= -->
        <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-5 text-gray-900">Need a Custom Technology Solution?</h2>
            <p class="text-gray-600 mb-7 text-sm sm:text-base">
                Talk to our experts today and get tailored IT solutions, professional repair services, and long-term technology support.
            </p>
            <a href="contact.php" class="px-7 py-3 md:px-10 md:py-4 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-semibold shadow-lg shadow-primary/25 hover:shadow-primary/40 transition inline-block">
                Contact Our Team
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
