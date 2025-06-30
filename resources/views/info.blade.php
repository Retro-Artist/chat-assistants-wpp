<!DOCTYPE html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />
  </head>

  <body class="bg-[#FDFDFC] dark:bg-[#0A0A0A] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen font-['Instrument_Sans'] antialiased">
    <!-- Subtle background gradient -->
    <div
      class="fixed inset-0 bg-gradient-to-br from-[#FDFDFC] via-[#f8f8f8] to-[#FDFDFC] dark:from-[#0A0A0A] dark:via-[#161615] dark:to-[#0A0A0A] opacity-80"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-8">
      <!-- Header -->
      <header class="mb-12">
        <div class="flex items-center space-x-5 mb-6">
          <div class="relative">
            <div
              class="w-14 h-14 bg-gradient-to-br from-red-500/90 to-red-600/90 rounded-xl flex items-center justify-center shadow-lg shadow-red-500/25 backdrop-blur-sm border border-red-500/20">
              <i class="fab fa-laravel text-white text-2xl"></i>
            </div>
            <div
              class="absolute inset-0 bg-gradient-to-br from-red-500/30 to-red-600/30 rounded-xl blur-xl"></div>
          </div>
          <div>
            <h1 class="text-2xl font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Laravel</h1>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">The PHP Framework for Web Artisans</p>
          </div>
        </div>

        <div
          class="bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl p-6 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]">
          <div class="flex items-center space-x-3">
            <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
            <span class="text-[#1b1b18] dark:text-[#EDEDEC] font-medium">Environment Ready</span>
            <span class="text-[#706f6c] dark:text-[#A1A09A]">•</span>
            <span class="text-[#706f6c] dark:text-[#A1A09A]"
              >PHP
              <?= phpversion() ?></span
            >
          </div>
        </div>
      </header>

      <div class="grid xl:grid-cols-2 gap-8 mb-12">
        <!-- Environment Info -->
        <div
          class="bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl overflow-hidden shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]">
          <div class="px-6 py-5 border-b border-[#19140035] dark:border-[#3E3E3A]">
            <h3 class="text-base font-medium text-[#1b1b18] dark:text-[#EDEDEC] flex items-center">
              <i class="fas fa-server text-[#706f6c] dark:text-[#A1A09A] mr-3"></i>
              System Information
            </h3>
          </div>
          <div class="p-6">
            <div class="space-y-4">
              <div class="flex justify-between items-center py-2">
                <span class="text-[#706f6c] dark:text-[#A1A09A] font-medium">PHP Version</span>
                <code class="text-[#1b1b18] dark:text-[#EDEDEC] bg-[#f8f8f8] dark:bg-[#3E3E3A] px-3 py-1 rounded-lg text-sm font-mono"
                  ><?= phpversion() ?></code
                >
              </div>
              <div class="flex justify-between items-center py-2">
                <span class="text-[#706f6c] dark:text-[#A1A09A] font-medium">Web Server</span>
                <code class="text-[#1b1b18] dark:text-[#EDEDEC] bg-[#f8f8f8] dark:bg-[#3E3E3A] px-3 py-1 rounded-lg text-sm font-mono"
                  ><?= $_SERVER['SERVER_SOFTWARE'] ?></code
                >
              </div>
              <div class="flex justify-between items-center py-2">
                <span class="text-[#706f6c] dark:text-[#A1A09A] font-medium">Protocol</span>
                <code class="text-[#1b1b18] dark:text-[#EDEDEC] bg-[#f8f8f8] dark:bg-[#3E3E3A] px-3 py-1 rounded-lg text-sm font-mono"
                  ><?= $_SERVER['SERVER_PROTOCOL'] ?></code
                >
              </div>
              <div class="pt-2 border-t border-[#19140035] dark:border-[#3E3E3A]">
                <span class="text-[#706f6c] dark:text-[#A1A09A] font-medium block mb-2">Document Root</span>
                <code
                  class="text-[#1b1b18] dark:text-[#EDEDEC] bg-[#f8f8f8] dark:bg-[#3E3E3A] px-3 py-2 rounded-lg text-xs font-mono block break-all"
                  ><?= $_SERVER['DOCUMENT_ROOT'] ?></code
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Database Connection -->
        <div
          class="bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl overflow-hidden shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]">
          <div class="px-6 py-5 border-b border-[#19140035] dark:border-[#3E3E3A]">
            <h3 class="text-base font-medium text-[#1b1b18] dark:text-[#EDEDEC] flex items-center">
              <i class="fas fa-database text-[#706f6c] dark:text-[#A1A09A] mr-3"></i>
              Database Status
            </h3>
          </div>
          <div class="p-6">
            <?php
                    $config = [
                        'host' =>
            getenv('DB_HOST') ?: 'localhost', 'dbname' => getenv('DB_DATABASE') ?: 'laravel',
            'username' => getenv('DB_USERNAME') ?: 'root', 'password' => getenv('DB_PASSWORD') ?:
            'root_password', ]; $connected = false; $error = null; $mysqlVersion = null; try { $dsn
            = "mysql:host={$config['host']};dbname={$config['dbname']}"; $pdo = new PDO($dsn,
            $config['username'], $config['password'], [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]); $connected = true; $mysqlVersion = $pdo->query('SELECT version()')->fetchColumn(); }
            catch (PDOException $e) { $error = $e->getMessage(); } ?>

            <?php if ($connected): ?>
            <div class="flex items-center space-x-3 mb-6">
              <div
                class="w-3 h-3 bg-emerald-400 rounded-full shadow-lg shadow-emerald-400/50"></div>
              <span class="text-emerald-400 font-medium">Connected</span>
            </div>
            <div class="space-y-4">
              <div class="flex justify-between items-center py-2">
                <span class="text-[#706f6c] dark:text-[#A1A09A] font-medium">Database</span>
                <code class="text-[#1b1b18] dark:text-[#EDEDEC] bg-[#f8f8f8] dark:bg-[#3E3E3A] px-3 py-1 rounded-lg text-sm font-mono"
                  ><?= htmlspecialchars($config['dbname']) ?></code
                >
              </div>
              <div class="flex justify-between items-center py-2">
                <span class="text-[#706f6c] dark:text-[#A1A09A] font-medium">MySQL Version</span>
                <code class="text-[#1b1b18] dark:text-[#EDEDEC] bg-[#f8f8f8] dark:bg-[#3E3E3A] px-3 py-1 rounded-lg text-sm font-mono"
                  ><?= htmlspecialchars($mysqlVersion) ?></code
                >
              </div>
            </div>
            <?php else: ?>
            <div class="flex items-center space-x-3 mb-4">
              <div class="w-3 h-3 bg-red-400 rounded-full shadow-lg shadow-red-400/50"></div>
              <span class="text-red-400 font-medium">Connection Failed</span>
            </div>
            <div class="bg-[#fff2f2] dark:bg-[#1D0002] border border-red-500/20 rounded-xl p-4">
              <p class="text-sm text-[#1b1b18] dark:text-[#EDEDEC] font-mono"><?= htmlspecialchars($error) ?></p>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- Laravel Features -->
      <div class="mb-8">
        <h2 class="text-lg font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-8">Framework Features</h2>
        <div class="grid lg:grid-cols-3 gap-6">
          <!-- Artisan -->
          <div
            class="group bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl p-6 hover:border-[#1915014a] dark:hover:border-[#62605b] transition-all duration-300 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]">
            <div class="mb-4">
              <h3 class="text-base font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1 flex items-center">
                <i class="fas fa-terminal text-[#706f6c] dark:text-[#A1A09A] mr-3"></i>
                Artisan Console
              </h3>
              <p class="text-[#706f6c] dark:text-[#A1A09A] text-[13px] leading-[20px]">
                Powerful command-line interface for development tasks and code generation.
              </p>
            </div>
            <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
              <code class="text-emerald-400 text-sm font-mono">php artisan --version</code>
            </div>
          </div>

          <!-- Eloquent -->
          <div
            class="group bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl p-6 hover:border-[#1915014a] dark:hover:border-[#62605b] transition-all duration-300 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]">
            <div class="mb-4">
              <h3 class="text-base font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1 flex items-center">
                <i class="fas fa-layer-group text-[#706f6c] dark:text-[#A1A09A] mr-3"></i>
                Eloquent ORM
              </h3>
              <p class="text-[#706f6c] dark:text-[#A1A09A] text-[13px] leading-[20px]">
                Elegant ActiveRecord implementation for seamless database interactions.
              </p>
            </div>
            <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
              <code class="text-blue-400 text-sm font-mono">User::where('active', 1)->get()</code>
            </div>
          </div>

          <!-- Blade -->
          <div
            class="group bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl p-6 hover:border-[#1915014a] dark:hover:border-[#62605b] transition-all duration-300 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]">
            <div class="mb-4">
              <h3 class="text-base font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1 flex items-center">
                <i class="fas fa-code text-[#706f6c] dark:text-[#A1A09A] mr-3"></i>
                Blade Templates
              </h3>
              <p class="text-[#706f6c] dark:text-[#A1A09A] text-[13px] leading-[20px]">
                Simple yet powerful templating engine compiled to optimized PHP.
              </p>
            </div>
            <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
              <code class="text-yellow-400 text-sm font-mono">@@extends('layouts.app')</code>
            </div>
          </div>
        </div>
      </div>

      <!-- Development Commands -->
      <div
        class="bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl overflow-hidden shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] mb-12">
        <div class="px-6 py-5 border-b border-[#19140035] dark:border-[#3E3E3A]">
          <h3 class="text-base font-medium text-[#1b1b18] dark:text-[#EDEDEC] flex items-center">
            <i class="fas fa-rocket text-[#706f6c] dark:text-[#A1A09A] mr-3"></i>
            Development Toolkit
          </h3>
        </div>
        <div class="p-6">
          <div class="grid lg:grid-cols-2 gap-8">
            <div>
              <h4 class="text-[#1b1b18] dark:text-[#EDEDEC] font-medium mb-4 flex items-center">
                <i class="fab fa-docker mr-3 text-blue-400"></i>
                Container Environment
              </h4>
              <div class="space-y-4">
                <div>
                  <span class="text-[#706f6c] dark:text-[#A1A09A] text-sm block mb-2">Database Migrations</span>
                  <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
                    <code class="text-emerald-400 text-sm font-mono"
                      >docker-compose exec app php artisan migrate</code
                    >
                  </div>
                </div>
                <div>
                  <span class="text-[#706f6c] dark:text-[#A1A09A] text-sm block mb-2">Application Key</span>
                  <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
                    <code class="text-emerald-400 text-sm font-mono"
                      >docker-compose exec app php artisan key:generate</code
                    >
                  </div>
                </div>
                <div>
                  <span class="text-[#706f6c] dark:text-[#A1A09A] text-sm block mb-2">Install Dependencies</span>
                  <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
                    <code class="text-emerald-400 text-sm font-mono"
                      >docker-compose exec app composer install</code
                    >
                  </div>
                </div>
              </div>
            </div>

            <div>
              <h4 class="text-[#1b1b18] dark:text-[#EDEDEC] font-medium mb-4 flex items-center">
                <i class="fas fa-tools mr-3 text-amber-400"></i>
                Code Generation
              </h4>
              <div class="space-y-4">
                <div>
                  <span class="text-[#706f6c] dark:text-[#A1A09A] text-sm block mb-2">Create Controller</span>
                  <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
                    <code class="text-blue-400 text-sm font-mono"
                      >php artisan make:controller UserController</code
                    >
                  </div>
                </div>
                <div>
                  <span class="text-[#706f6c] dark:text-[#A1A09A] text-sm block mb-2">Create Model with Migration</span>
                  <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
                    <code class="text-blue-400 text-sm font-mono"
                      >php artisan make:model User -m</code
                    >
                  </div>
                </div>
                <div>
                  <span class="text-[#706f6c] dark:text-[#A1A09A] text-sm block mb-2">Development Server</span>
                  <div class="bg-[#f8f8f8] dark:bg-[#3E3E3A] border border-[#19140035] dark:border-[#62605b] rounded-xl p-3">
                    <code class="text-blue-400 text-sm font-mono">php artisan serve</code>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Resources -->
      <div class="grid md:grid-cols-3 gap-6 mb-12">
        <a
          href="https://laravel.com/docs"
          class="group bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl p-6 hover:border-[#1915014a] dark:hover:border-[#62605b] transition-all duration-300 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] hover:-translate-y-1">
          <div class="flex items-center space-x-3 mb-3">
            <div
              class="w-8 h-8 bg-[#f8f8f8] dark:bg-[#3E3E3A] rounded-lg flex items-center justify-center group-hover:bg-red-500/20 transition-all duration-300">
              <i
                class="fas fa-book text-[#706f6c] dark:text-[#A1A09A] group-hover:text-red-400 transition-colors duration-300"></i>
            </div>
            <h3 class="text-[#1b1b18] dark:text-[#EDEDEC] font-medium">Documentation</h3>
          </div>
          <p class="text-[#706f6c] dark:text-[#A1A09A] text-[13px] leading-[20px]">
            Comprehensive framework guides and API references for Laravel development.
          </p>
        </a>

        <a
          href="https://laracasts.com"
          class="group bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl p-6 hover:border-[#1915014a] dark:hover:border-[#62605b] transition-all duration-300 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] hover:-translate-y-1">
          <div class="flex items-center space-x-3 mb-3">
            <div
              class="w-8 h-8 bg-[#f8f8f8] dark:bg-[#3E3E3A] rounded-lg flex items-center justify-center group-hover:bg-red-500/20 transition-all duration-300">
              <i
                class="fas fa-play-circle text-[#706f6c] dark:text-[#A1A09A] group-hover:text-red-400 transition-colors duration-300"></i>
            </div>
            <h3 class="text-[#1b1b18] dark:text-[#EDEDEC] font-medium">Laracasts</h3>
          </div>
          <p class="text-[#706f6c] dark:text-[#A1A09A] text-[13px] leading-[20px]">
            Premium video tutorials covering Laravel, PHP, and modern web development.
          </p>
        </a>

        <a
          href="http://localhost:8081"
          class="group bg-white dark:bg-[#161615] border border-[#19140035] dark:border-[#3E3E3A] rounded-2xl p-6 hover:border-[#1915014a] dark:hover:border-[#62605b] transition-all duration-300 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] hover:-translate-y-1">
          <div class="flex items-center space-x-3 mb-3">
            <div
              class="w-8 h-8 bg-[#f8f8f8] dark:bg-[#3E3E3A] rounded-lg flex items-center justify-center group-hover:bg-red-500/20 transition-all duration-300">
              <i
                class="fas fa-database text-[#706f6c] dark:text-[#A1A09A] group-hover:text-red-400 transition-colors duration-300"></i>
            </div>
            <h3 class="text-[#1b1b18] dark:text-[#EDEDEC] font-medium">phpMyAdmin</h3>
          </div>
          <p class="text-[#706f6c] dark:text-[#A1A09A] text-[13px] leading-[20px]">
            Web-based MySQL administration tool for database management and queries.
          </p>
        </a>
      </div>

      <!-- Footer -->
      <footer class="pt-8 border-t border-[#19140035] dark:border-[#3E3E3A]">
        <div class="flex flex-col lg:flex-row justify-between items-center">
          <div class="flex items-center space-x-4 mb-4 lg:mb-0">
            <div
              class="w-6 h-6 bg-gradient-to-br from-red-500/80 to-red-600/80 rounded-lg flex items-center justify-center">
              <i class="fab fa-laravel text-white text-xs"></i>
            </div>
            <span class="text-[#706f6c] dark:text-[#A1A09A] font-light"
              >©
              <?= date('Y') ?>
              Laravel Framework</span
            >
          </div>
          <div class="text-[#706f6c] dark:text-[#A1A09A] text-sm font-light">
            Crafted for developers who value elegance
          </div>
        </div>
      </footer>
    </div>

    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            fontFamily: {
              sans: ["Instrument Sans", "system-ui", "sans-serif"],
            },
            colors: {
              zinc: {
                950: "#09090b",
              },
            },
            animation: {
              "fade-in": "fadeIn 0.5s ease-in-out",
              "slide-up": "slideUp 0.3s ease-out",
            },
            keyframes: {
              fadeIn: {
                "0%": { opacity: "0" },
                "100%": { opacity: "1" },
              },
              slideUp: {
                "0%": { transform: "translateY(10px)", opacity: "0" },
                "100%": { transform: "translateY(0)", opacity: "1" },
              },
            },
          },
        },
      };

      // Enhanced interactions
      document.addEventListener("DOMContentLoaded", function () {
        // Smooth reveal animation for cards
        const cards = document.querySelectorAll('[class*="bg-white"], [class*="dark:bg-[#161615]"]');
        cards.forEach((card, index) => {
          card.style.opacity = "0";
          card.style.transform = "translateY(20px)";

          setTimeout(() => {
            card.style.transition = "all 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
          }, index * 100);
        });

        // Enhanced hover effects for resource links
        const resourceLinks = document.querySelectorAll(
          'a[href*="laravel.com"], a[href*="laracasts.com"], a[href*="localhost:8081"]'
        );
        resourceLinks.forEach((link) => {
          link.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-4px) scale(1.02)";
            this.style.boxShadow =
              "0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.1)";
          });

          link.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0) scale(1)";
            this.style.boxShadow =
              "0px 0px 1px 0px rgba(0,0,0,0.03), 0px 1px 2px 0px rgba(0,0,0,0.06)";
          });
        });

        // Code block copy functionality
        const codeBlocks = document.querySelectorAll("code");
        codeBlocks.forEach((block) => {
          if (block.textContent.length > 20) {
            // Only add to longer code blocks
            block.style.cursor = "pointer";
            block.title = "Click to copy";

            block.addEventListener("click", function () {
              navigator.clipboard.writeText(this.textContent).then(() => {
                const originalBg = this.style.backgroundColor;
                this.style.backgroundColor = "rgba(34, 197, 94, 0.2)";
                this.style.transition = "background-color 0.2s ease";

                setTimeout(() => {
                  this.style.backgroundColor = originalBg;
                }, 500);
              });
            });
          }
        });

        // Subtle parallax effect for background
        window.addEventListener("scroll", function () {
          const scrolled = window.pageYOffset;
          const background = document.querySelector(".fixed.inset-0.bg-gradient-to-br");
          if (background) {
            background.style.transform = `translateY(${scrolled * 0.1}px)`;
          }
        });
      });
    </script>
  </body>
</html>
