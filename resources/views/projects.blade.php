<x-layout>
<!-- Projects Section - Glassmorphism Design -->
<section id="projects" class="relative py-24 overflow-hidden bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900">

  <!-- Background blobs -->
  <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>
  <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl sm:text-5xl font-bold text-white mb-4">
        My Projects
      </h2>
      <p class="text-lg text-slate-300 max-w-2xl mx-auto">
        Selected works that showcase my skills and creativity.
      </p>
    </div>

    <!-- Filter Tabs -->
    <div class="flex flex-wrap justify-center gap-3 mb-14">
      <button class="filter-btn active px-5 py-2 rounded-full text-sm font-medium bg-white/10 text-white border border-white/20 backdrop-blur-md hover:bg-white/20 transition">
        All
      </button>
      <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-white/5 text-slate-300 border border-white/10 backdrop-blur-md hover:bg-white/15 transition">
        Web App
      </button>
      <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-white/5 text-slate-300 border border-white/10 backdrop-blur-md hover:bg-white/15 transition">
        Mobile
      </button>
      <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium bg-white/5 text-slate-300 border border-white/10 backdrop-blur-md hover:bg-white/15 transition">
        Dashboard
      </button>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

      <!-- Card 1 -->
      <article class="group relative rounded-3xl overflow-hidden bg-white/5 backdrop-blur-xl border border-white/10 hover:border-white/25 transition-all duration-500 hover:-translate-y-2">
        <div class="relative h-52 overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&h=400&fit=crop"
            alt="TaskFlow"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

          <!-- Tech badges floating -->
          <div class="absolute bottom-4 left-4 flex gap-2">
            <span class="px-2.5 py-1 text-xs rounded-full bg-black/40 text-white backdrop-blur-md border border-white/10">React</span>
            <span class="px-2.5 py-1 text-xs rounded-full bg-black/40 text-white backdrop-blur-md border border-white/10">Node.js</span>
          </div>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-indigo-300 transition-colors">
            TaskFlow
          </h3>
          <p class="text-slate-400 text-sm leading-relaxed mb-5">
            Real-time project management with drag-and-drop boards and team analytics.
          </p>

          <div class="flex items-center justify-between">
            <div class="flex gap-3">
              <a href="#" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
              </a>
              <a href="#" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
              </a>
            </div>
            <span class="text-xs text-slate-500">2024</span>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="group relative rounded-3xl overflow-hidden bg-white/5 backdrop-blur-xl border border-white/10 hover:border-white/25 transition-all duration-500 hover:-translate-y-2">
        <div class="relative h-52 overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop"
            alt="Analytics Dashboard"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

          <div class="absolute bottom-4 left-4 flex gap-2">
            <span class="px-2.5 py-1 text-xs rounded-full bg-black/40 text-white backdrop-blur-md border border-white/10">Next.js</span>
            <span class="px-2.5 py-1 text-xs rounded-full bg-black/40 text-white backdrop-blur-md border border-white/10">TypeScript</span>
          </div>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-indigo-300 transition-colors">
            Analytics Dashboard
          </h3>
          <p class="text-slate-400 text-sm leading-relaxed mb-5">
            Real-time analytics with beautiful charts, filters and exportable reports.
          </p>

          <div class="flex items-center justify-between">
            <div class="flex gap-3">
              <a href="#" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
              </a>
              <a href="#" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
              </a>
            </div>
            <span class="text-xs text-slate-500">2024</span>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="group relative rounded-3xl overflow-hidden bg-white/5 backdrop-blur-xl border border-white/10 hover:border-white/25 transition-all duration-500 hover:-translate-y-2">
        <div class="relative h-52 overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop"
            alt="ShopEase"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

          <div class="absolute bottom-4 left-4 flex gap-2">
            <span class="px-2.5 py-1 text-xs rounded-full bg-black/40 text-white backdrop-blur-md border border-white/10">Flutter</span>
            <span class="px-2.5 py-1 text-xs rounded-full bg-black/40 text-white backdrop-blur-md border border-white/10">Firebase</span>
          </div>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-indigo-300 transition-colors">
            ShopEase
          </h3>
          <p class="text-slate-400 text-sm leading-relaxed mb-5">
            Cross-platform e-commerce app with cart, payments and order tracking.
          </p>

          <div class="flex items-center justify-between">
            <div class="flex gap-3">
              <a href="#" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
              </a>
              <a href="#" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
              </a>
            </div>
            <span class="text-xs text-slate-500">2023</span>
          </div>
        </div>
      </article>

    </div>

    <!-- View All -->
    <div class="mt-16 text-center">
      <a href="#" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-white text-slate-900 font-semibold hover:bg-slate-100 transition shadow-lg shadow-white/10">
        View All Projects
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>

  </div>
</section>

</x-layout>
<x-footers />
