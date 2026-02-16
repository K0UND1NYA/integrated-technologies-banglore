<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrated Technologies</title>
    <link rel="icon" type="image/jpeg" href="assets/favicon.jpg">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#ffffff',
                        primary: '#2563eb',
                        secondary: '#7c3aed',
                        accent: '#22d3ee',
                        glass: 'rgba(0, 0, 0, 0.05)',
                        'glass-heavy': 'rgba(0, 0, 0, 0.1)',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'scroll': 'scroll 40s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        scroll: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS for Scrollbars & Utilities -->
    <style type="text/tailwindcss">
        @layer utilities {
            .glass {
                @apply bg-glass backdrop-blur-md border border-black/5 shadow-lg;
            }
            .glass-card {
                @apply bg-glass hover:bg-glass-heavy transition-all duration-300 backdrop-blur-md border border-black/5 rounded-2xl shadow-xl;
            }
            .mask-fade-edges {
                mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
                -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            }
            /* Custom Scrollbar */
            .custom-scrollbar::-webkit-scrollbar {
                width: 8px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: #f1f5f9;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #cbd5e1;
                border-radius: 4px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #94a3b8;
            }
        }
    </style>
</head>
<body class="bg-background text-gray-900 font-sans antialiased overflow-x-hidden custom-scrollbar">

    <!-- Header -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 h-20 transition-all duration-300 bg-transparent">
        <div class="container mx-auto px-4 sm:px-6 flex justify-between items-center h-full">
            <!-- LOGO -->
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="flex flex-col items-end leading-none select-none">
                    <div class="flex items-center">
                        <span class="font-sans text-2xl md:text-3xl font-normal tracking-tight text-gray-600">INTEGRA</span>
                        <span class="font-sans text-2xl md:text-3xl font-bold tracking-tight text-blue-900">TED</span>
                    </div>
                    <div class="w-full h-[2px] bg-blue-900 mt-1 mb-1"></div>
                    <span class="font-sans text-[10px] md:text-xs font-bold tracking-wide text-gray-600 group-hover:text-primary transition-colors">Technologies</span>
                </div>
            </a>

            <!-- DESKTOP NAV -->
            <nav class="hidden md:flex items-center gap-6 lg:gap-8">
                <?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                    $nav_links = [
                        'Home' => 'index.php',
                        'Services' => 'services.php',
                        'Track Repair' => 'track.php',
                        'About' => 'about.php',
                        'Contact' => 'contact.php'
                    ];

                    foreach ($nav_links as $name => $link) {
                        $active_class = ($current_page == $link) ? "text-accent font-semibold" : "text-gray-600 hover:text-primary transition font-medium";
                        echo "<a href=\"$link\" class=\"$active_class\">$name</a>";
                    }
                ?>

                <a href="book-service.php" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-primary to-secondary text-white text-sm font-medium hover:scale-105 active:scale-95 transition-transform shadow-lg shadow-primary/20">
                    <div class="flex items-center gap-2">
                        <i data-lucide="zap" class="w-4 h-4"></i>
                        Book Repair
                    </div>
                </a>
            </nav>

            <!-- MOBILE MENU BUTTON -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-black/5 text-gray-700">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </header>

    <!-- MOBILE MENU OVERLAY -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-background/95 backdrop-blur-md z-[9999] transform translate-x-full transition-transform duration-300 md:hidden flex flex-col justify-center items-center">
        <button id="close-menu-btn" class="absolute top-6 right-6 text-gray-600 bg-black/5 p-2 rounded-lg hover:bg-black/10 transition">
            <i data-lucide="x" class="w-7 h-7"></i>
        </button>

        <nav class="flex flex-col items-center gap-8 text-xl">
            <?php
                foreach ($nav_links as $name => $link) {
                    $active_class = ($current_page == $link) ? "text-accent font-semibold" : "text-gray-800 font-medium";
                    echo "<a href=\"$link\" class=\"mobile-link $active_class\">$name</a>";
                }
            ?>
            <a href="book-service.php" class="px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-secondary text-white font-semibold shadow-lg hover:scale-105 transition-transform mt-4">
                Book Repair
            </a>
        </nav>
    </div>

    <!-- MAIN CONTENT START -->
    <main>
