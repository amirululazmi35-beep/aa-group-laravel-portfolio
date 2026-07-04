@extends('layouts.portfolio')

@section('title', __('site.nav.projects'))

@section('content')
<section class="max-w-6xl mx-auto px-6 py-28 space-y-12 reveal-fade">
    <!-- Header Block -->
    <div class="text-center max-w-xl mx-auto space-y-3">
        <span class="section-label font-bold">
            {{ __('site.projects_page.label') }}
        </span>
        <h1 class="font-serif text-4xl sm:text-5xl font-light text-text-primary uppercase tracking-widest leading-tight">{{ __('site.projects_page.title') }}</h1>
        <p class="text-text-secondary text-xs md:text-sm font-sans leading-relaxed">{{ __('site.projects_page.desc') }}</p>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-4">
        <!-- Project 1 (AA Store Premium) -->
        <div id="store" class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card scroll-mt-28 reveal-scale luxury-shine" data-delay="100">
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-luxury-bg/50 border-b border-surface-soft/60 flex flex-col">
                <!-- Simulated Browser Bar -->
                <div class="browser-header select-none">
                    <div class="browser-dot bg-[#ff5f56]/80"></div>
                    <div class="browser-dot bg-[#ffbd2e]/80"></div>
                    <div class="browser-dot bg-[#27c93f]/80"></div>
                    <span class="text-[8px] uppercase tracking-widest text-text-secondary/55 font-mono ml-4">
                        store.app
                    </span>
                </div>

                <div class="relative flex-grow w-full overflow-hidden">
                    <div class="absolute inset-0 bg-grid-tech bg-luxury-bg/95 flex flex-col items-center justify-center p-5 text-center overflow-hidden">
                        <span class="font-serif text-8xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-gold-primary">
                            AA
                        </span>
                        <div class="border border-border-gold w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                            <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-gold-primary">{{ __('site.home.projects.items.store_label') }}</span>
                            <span class="font-serif text-sm tracking-wider text-text-primary uppercase max-w-[200px] leading-tight mb-2">AA Store Premium</span>
                            <div class="w-6 h-[1px] bg-gold-primary/30 my-2"></div>
                            <span class="text-[7px] uppercase tracking-widest text-text-secondary/50 font-semibold select-none">PROTOTYPE MODULE</span>
                        </div>
                    </div>
                </div>
                <!-- Status Badge overlay -->
                <div class="absolute top-12 left-4 z-10">
                    <span class="px-2.5 py-0.5 rounded text-[9px] font-bold uppercase tracking-widest bg-gold-primary text-black border border-gold-primary/20">Live</span>
                </div>
            </div>

            <div class="p-6 md:p-8 flex-grow flex flex-col justify-between space-y-6">
                <div class="space-y-3">
                    <span class="text-[9px] uppercase tracking-widest font-bold text-gold-primary">{{ __('site.home.projects.items.store_label') }}</span>
                    <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                        AA Store Premium
                    </h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        {{ __('site.home.projects.items.store_desc') }}
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Node</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Laravel</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Tailwind</span>
                </div>
            </div>
        </div>

        <!-- Project 2 (AA Group Portfolio Website) -->
        <div class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card reveal-scale" data-delay="200">
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-luxury-bg/50 border-b border-surface-soft/60 flex flex-col">
                <!-- Simulated Browser Bar -->
                <div class="browser-header select-none">
                    <div class="browser-dot bg-[#ff5f56]/80"></div>
                    <div class="browser-dot bg-[#ffbd2e]/80"></div>
                    <div class="browser-dot bg-[#27c93f]/80"></div>
                    <span class="text-[8px] uppercase tracking-widest text-text-secondary/55 font-mono ml-4">
                        portfolio.app
                    </span>
                </div>

                <div class="relative flex-grow w-full overflow-hidden">
                    <div class="absolute inset-0 bg-grid-tech bg-luxury-bg/95 flex flex-col items-center justify-center p-5 text-center overflow-hidden">
                        <span class="font-serif text-8xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-gold-primary">
                            GP
                        </span>
                        <div class="border border-border-gold w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                            <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-gold-primary">{{ __('site.home.projects.items.portfolio_label') }}</span>
                            <span class="font-serif text-sm tracking-wider text-text-primary uppercase max-w-[200px] leading-tight mb-2">AA Group Portfolio Website</span>
                            <div class="w-6 h-[1px] bg-gold-primary/30 my-2"></div>
                            <span class="text-[7px] uppercase tracking-widest text-text-secondary/50 font-semibold select-none">PROTOTYPE MODULE</span>
                        </div>
                    </div>
                </div>
                <!-- Status Badge overlay -->
                <div class="absolute top-12 left-4 z-10">
                    <span class="px-2.5 py-0.5 rounded text-[9px] font-bold uppercase tracking-widest bg-gold-primary text-black border border-gold-primary/20">Live</span>
                </div>
            </div>

            <div class="p-6 md:p-8 flex-grow flex flex-col justify-between space-y-6">
                <div class="space-y-3">
                    <span class="text-[9px] uppercase tracking-widest font-bold text-gold-primary">{{ __('site.home.projects.items.portfolio_label') }}</span>
                    <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                        AA Group Portfolio Website
                    </h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        {{ __('site.home.projects.items.portfolio_desc') }}
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Laravel</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Tailwind CSS v4</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Blade</span>
                </div>
            </div>
        </div>

        <!-- Project 3 (Telegram Sales Bot) -->
        <div class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card reveal-scale luxury-shine" data-delay="300">
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-luxury-bg/50 border-b border-surface-soft/60 flex flex-col">
                <!-- Simulated Browser Bar -->
                <div class="browser-header select-none">
                    <div class="browser-dot bg-[#ff5f56]/80"></div>
                    <div class="browser-dot bg-[#ffbd2e]/80"></div>
                    <div class="browser-dot bg-[#27c93f]/80"></div>
                    <span class="text-[8px] uppercase tracking-widest text-text-secondary/55 font-mono ml-4">
                        bot-sales.app
                    </span>
                </div>

                <div class="relative flex-grow w-full overflow-hidden">
                    <div class="absolute inset-0 bg-grid-tech bg-luxury-bg/95 flex flex-col items-center justify-center p-5 text-center overflow-hidden">
                        <span class="font-serif text-8xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-blue-accent">
                            BM
                        </span>
                        <div class="border border-border-blue w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                            <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-blue-accent">{{ __('site.home.projects.items.bot_label') }}</span>
                            <span class="font-serif text-sm tracking-wider text-text-primary uppercase max-w-[200px] leading-tight mb-2">BLACKMARKET Telegram Bot</span>
                            <div class="w-6 h-[1px] bg-blue-accent/30 my-2"></div>
                            <span class="text-[7px] uppercase tracking-widest text-text-secondary/50 font-semibold select-none">PROTOTYPE MODULE</span>
                        </div>
                    </div>
                </div>
                <!-- Status Badge overlay -->
                <div class="absolute top-12 left-4 z-10">
                    <span class="px-2.5 py-0.5 rounded text-[9px] font-bold uppercase tracking-widest bg-gold-primary text-black border border-gold-primary/20">Live</span>
                </div>
            </div>

            <div class="p-6 md:p-8 flex-grow flex flex-col justify-between space-y-6">
                <div class="space-y-3">
                    <span class="text-[9px] uppercase tracking-widest font-bold text-blue-accent">{{ __('site.home.projects.items.bot_label') }}</span>
                    <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                        BLACKMARKET Bot
                    </h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        {{ __('site.home.projects.items.bot_desc') }}
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Python</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Telebot API</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Webhooks</span>
                </div>
            </div>
        </div>

        <!-- Project 4 (Design & Branding Work) -->
        <div class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card reveal-scale" data-delay="400">
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-luxury-bg/50 border-b border-surface-soft/60 flex flex-col">
                <!-- Simulated Browser Bar -->
                <div class="browser-header select-none">
                    <div class="browser-dot bg-[#ff5f56]/80"></div>
                    <div class="browser-dot bg-[#ffbd2e]/80"></div>
                    <div class="browser-dot bg-[#27c93f]/80"></div>
                    <span class="text-[8px] uppercase tracking-widest text-text-secondary/55 font-mono ml-4">
                        design.app
                    </span>
                </div>

                <div class="relative flex-grow w-full overflow-hidden">
                    <div class="absolute inset-0 bg-grid-tech bg-luxury-bg/95 flex flex-col items-center justify-center p-5 text-center overflow-hidden">
                        <span class="font-serif text-8xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-gold-primary">
                            DB
                        </span>
                        <div class="border border-border-gold w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                            <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-gold-primary">{{ __('site.home.projects.items.design_label') }}</span>
                            <span class="font-serif text-sm tracking-wider text-text-primary uppercase max-w-[200px] leading-tight mb-2">Design &amp; Branding</span>
                            <div class="w-6 h-[1px] bg-gold-primary/30 my-2"></div>
                            <span class="text-[7px] uppercase tracking-widest text-text-secondary/50 font-semibold select-none">PROTOTYPE MODULE</span>
                        </div>
                    </div>
                </div>
                <!-- Status Badge overlay -->
                <div class="absolute top-12 left-4 z-10">
                    <span class="px-2.5 py-0.5 rounded text-[9px] font-bold uppercase tracking-widest bg-gold-primary text-black border border-gold-primary/20">Live</span>
                </div>
            </div>

            <div class="p-6 md:p-8 flex-grow flex flex-col justify-between space-y-6">
                <div class="space-y-3">
                    <span class="text-[9px] uppercase tracking-widest font-bold text-gold-primary">{{ __('site.home.projects.items.design_label') }}</span>
                    <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                        Design &amp; Branding Work
                    </h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        {{ __('site.home.projects.items.design_desc') }}
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Figma</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Vector Layouts</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Assets</span>
                </div>
            </div>
        </div>

        <!-- Project 5 (AI Solutions Experiments) -->
        <div class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card reveal-scale luxury-shine" data-delay="500">
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-luxury-bg/50 border-b border-surface-soft/60 flex flex-col">
                <!-- Simulated Browser Bar -->
                <div class="browser-header select-none">
                    <div class="browser-dot bg-[#ff5f56]/80"></div>
                    <div class="browser-dot bg-[#ffbd2e]/80"></div>
                    <div class="browser-dot bg-[#27c93f]/80"></div>
                    <span class="text-[8px] uppercase tracking-widest text-text-secondary/55 font-mono ml-4">
                        ai-labs.app
                    </span>
                </div>

                <div class="relative flex-grow w-full overflow-hidden">
                    <div class="absolute inset-0 bg-grid-tech bg-luxury-bg/95 flex flex-col items-center justify-center p-5 text-center overflow-hidden">
                        <span class="font-serif text-8xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-blue-accent">
                            AI
                        </span>
                        <div class="border border-border-blue w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                            <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-blue-accent">{{ __('site.home.projects.items.ai_label') }}</span>
                            <span class="font-serif text-sm tracking-wider text-text-primary uppercase max-w-[200px] leading-tight mb-2">AI Solutions Experiments</span>
                            <div class="w-6 h-[1px] bg-blue-accent/30 my-2"></div>
                            <span class="text-[7px] uppercase tracking-widest text-text-secondary/50 font-semibold select-none">PROTOTYPE MODULE</span>
                        </div>
                    </div>
                </div>
                <!-- Status Badge overlay -->
                <div class="absolute top-12 left-4 z-10">
                    <span class="px-2.5 py-0.5 rounded text-[9px] font-bold uppercase tracking-widest bg-blue-accent/20 text-blue-accent border border-blue-accent/20">Research</span>
                </div>
            </div>

            <div class="p-6 md:p-8 flex-grow flex flex-col justify-between space-y-6">
                <div class="space-y-3">
                    <span class="text-[9px] uppercase tracking-widest font-bold text-blue-accent">{{ __('site.home.projects.items.ai_label') }}</span>
                    <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                        AI Solutions Experiments
                    </h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        {{ __('site.home.projects.items.ai_desc') }}
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Python</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Gemini API</span>
                    <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">JSON Wrappers</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
