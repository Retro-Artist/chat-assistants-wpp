<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" x-init="$watch('darkMode', value => { localStorage.setItem('darkMode', value); if (value) { document.documentElement.classList.add('dark'); } else { document.documentElement.classList.remove('dark'); } }); if (darkMode) document.documentElement.classList.add('dark');" :class="{'dark': darkMode === true}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OpenAI Webchat - AI-Powered Conversations</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      content: ["./resources/**/*.{html,js,php,blade.php}"],
      theme: {
        extend: {
          colors: {
            brand: {
              50: "#eff6ff",
              100: "#dbeafe",
              200: "#bfdbfe",
              300: "#93c5fd",
              400: "#60a5fa",
              500: "#3b82f6",
              600: "#2563eb",
              700: "#1d4ed8",
              800: "#1e40af",
              900: "#1e3a8a",
            },
          },
          fontSize: {
            "theme-xs": ["0.75rem", "1rem"],
            "theme-sm": ["0.875rem", "1.25rem"],
            "theme-base": ["1rem", "1.5rem"],
            "theme-lg": ["1.125rem", "1.75rem"],
            "theme-xl": ["1.25rem", "1.75rem"],
            "title-sm": ["1.5rem", "2rem"],
            "title-md": ["1.875rem", "2.25rem"],
            "title-lg": ["2.25rem", "2.5rem"],
            "title-xl": ["3rem", "1"],
            "title-2xl": ["3.75rem", "1"],
          },
          boxShadow: {
            "theme-xs": "0 1px 2px 0 rgb(0 0 0 / 0.05)",
            "theme-sm": "0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)",
            "theme-md": "0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)",
            "theme-lg": "0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)",
            "theme-xl": "0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)",
          },
        },
      },
      darkMode: "class",
    };
  </script>

  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
  <!-- Navigation -->
  <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-sm border-b border-gray-200 dark:bg-gray-900/80 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 rounded-lg bg-brand-500 flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
          </div>
          <span class="text-xl font-bold text-gray-900 dark:text-white">OpenAI Webchat</span>
        </div>

        <!-- Right Side -->
        <div class="flex items-center gap-4">
          <!-- Dark Mode Toggle -->
          <button
            @click="darkMode = !darkMode"
            class="rounded-lg bg-gray-100 p-2 text-gray-600 hover:bg-gray-200 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 transition-colors"
            title="Toggle dark mode">
            <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
            </svg>
            <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
          </button>

          <!-- Auth Buttons -->
          <div class="flex items-center gap-3">
            <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200 transition-colors">
              Sign In
            </a>
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white shadow-theme-xs hover:bg-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 transition-colors dark:ring-offset-gray-900">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative overflow-hidden bg-gradient-to-br from-brand-600 via-brand-700 to-indigo-800 dark:from-brand-700 dark:via-brand-800 dark:to-indigo-900">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSI0Ii8+PC9nPjwvZz48L3N2Zz4=')] opacity-20"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16 lg:pt-32 lg:pb-24">
      <div class="text-center">
        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl lg:text-7xl">
          <span class="block">AI-Powered</span>
          <span class="block text-brand-200">Conversations</span>
        </h1>
        <p class="mt-6 max-w-3xl mx-auto text-lg sm:text-xl text-brand-100 leading-relaxed">
          Create dynamic agents, use powerful tools, and engage in meaningful conversations.
        </p>

        <!-- Hero CTA -->
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ route('register') }}" class="group inline-flex items-center justify-center rounded-lg bg-brand-600 px-6 py-3 text-base font-semibold text-white shadow-theme-sm hover:bg-brand-500 hover:shadow-theme-md focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 transition-all duration-200">
            Get Started Free
            <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
          <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-6 py-3 text-base font-semibold text-gray-900 shadow-theme-sm hover:bg-gray-50 hover:shadow-theme-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-700 transition-all duration-200">
            Sign In
          </a>
        </div>

        <!-- Hero Stats -->
        <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-3 lg:grid-cols-3">
          <div class="flex flex-col items-center">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-100 dark:bg-brand-900/20">
              <svg class="h-6 w-6 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <div class="mt-4 text-center">
              <div class="text-2xl font-bold text-white">Lightning Fast</div>
              <div class="text-brand-200">Real-time responses</div>
            </div>
          </div>

          <div class="flex flex-col items-center">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-100 dark:bg-brand-900/20">
              <svg class="h-6 w-6 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
            </div>
            <div class="mt-4 text-center">
              <div class="text-2xl font-bold text-white">Smart Agents</div>
              <div class="text-brand-200">Customizable AI assistants</div>
            </div>
          </div>

          <div class="flex flex-col items-center">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-100 dark:bg-brand-900/20">
              <svg class="h-6 w-6 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
              </svg>
            </div>
            <div class="mt-4 text-center">
              <div class="text-2xl font-bold text-white">Secure & Private</div>
              <div class="text-brand-200">Enterprise-grade security</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">
          Everything you need for AI conversations
        </h2>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
          Powerful features that make AI conversations simple and effective.
        </p>
      </div>

      <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Feature 1 -->
        <div class="relative group">
          <div class="absolute -inset-0.5 bg-gradient-to-r from-brand-600 to-indigo-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
          <div class="relative p-6 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="w-10 h-10 rounded-lg bg-brand-100 dark:bg-brand-900/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
              </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900 dark:text-white">Smart Conversations</h3>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
              Engage in natural, contextual conversations with advanced AI that understands your needs.
            </p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="relative group">
          <div class="absolute -inset-0.5 bg-gradient-to-r from-brand-600 to-indigo-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
          <div class="relative p-6 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="w-10 h-10 rounded-lg bg-brand-100 dark:bg-brand-900/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900 dark:text-white">Custom Agents</h3>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
              Create and customize AI agents tailored to your specific tasks and requirements.
            </p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="relative group">
          <div class="absolute -inset-0.5 bg-gradient-to-r from-brand-600 to-indigo-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
          <div class="relative p-6 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="w-10 h-10 rounded-lg bg-brand-100 dark:bg-brand-900/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900 dark:text-white">Real-time Responses</h3>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
              Get instant responses with streaming capabilities for a seamless conversation experience.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-brand-600 dark:bg-brand-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-white sm:text-4xl">
          Ready to start your AI journey?
        </h2>
        <p class="mt-4 text-lg text-brand-100">
          Join thousands of users already using our platform.
        </p>
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-3 text-base font-semibold text-brand-600 shadow-theme-sm hover:bg-gray-50 transition-colors">
            Get Started Free
            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
          <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-lg border-2 border-white px-6 py-3 text-base font-semibold text-white hover:bg-white hover:text-brand-600 transition-colors">
            Sign In
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="flex flex-col items-center justify-center text-center">
        <!-- Logo -->
        <div class="flex items-center gap-3 mb-4">
          <div class="w-8 h-8 rounded-lg bg-brand-500 flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
          </div>
          <span class="text-xl font-bold text-gray-900 dark:text-white">OpenAI Webchat</span>
        </div>

        <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-md">
          AI-powered conversations made simple. Built with clarity over complexity.
        </p>

        <!-- Tech Stack -->
        <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-8">
          <span>Powered by</span>
          <div class="flex items-center gap-2">
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-xs font-medium">Laravel 12</span>
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-xs font-medium">NeuronAI</span>
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-xs font-medium">PHP 8.4</span>
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-xs font-medium">Docker</span>
          </div>
        </div>

        <!-- Copyright -->
        <div class="text-sm text-gray-500 dark:text-gray-400">
          <p>&copy; {{ date('Y') }} OpenAI Webchat. Built with Laravel and NeuronAI.</p>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
