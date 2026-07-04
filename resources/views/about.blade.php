@extends('layouts.portfolio')

@section('title', 'About Amir & AA Group')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-28 space-y-16 reveal-fade">
    <!-- Header Block -->
    <div class="space-y-4">
        <!-- Label -->
        <span class="section-label font-bold">
            Founder Identity
        </span>
        
        <!-- Title -->
        <h1 class="font-serif text-5xl sm:text-6xl font-light text-text-primary uppercase tracking-widest leading-tight">
            Amir &amp; <br class="hidden sm:inline">
            <span class="text-gold-primary font-medium">AA Group Vision</span>
        </h1>
        
        <p class="max-w-3xl text-text-secondary leading-relaxed text-sm md:text-base font-sans">
            Welcome to the official hub of AA Group. I am Amir, a digital developer, designer, and automation architect. Under the AA Group brand, my mission is to design scalable software assets, code elegant web layouts, and configure automated workflows.
        </p>
    </div>

    <!-- Executive Stats Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 py-8 border-y border-surface-soft/60">
        <div class="border-l border-border-gold/30 pl-4 py-1">
            <span class="block text-[8px] uppercase tracking-widest text-text-secondary">AGE</span>
            <span class="block text-3xl font-serif font-light text-gold-primary mt-1" data-count-target="20">0</span>
        </div>
        <div class="border-l border-border-gold/30 pl-4 py-1">
            <span class="block text-[8px] uppercase tracking-widest text-text-secondary">CORE EXPERTISE</span>
            <span class="block text-3xl font-serif font-light text-gold-primary mt-1" data-count-target="6">0</span>
        </div>
        <div class="border-l border-border-gold/30 pl-4 py-1">
            <span class="block text-[8px] uppercase tracking-widest text-text-secondary">AUTONOMY</span>
            <span class="block text-3xl font-serif font-light text-gold-primary mt-1" data-count-target="100%">0%</span>
        </div>
        <div class="border-l border-border-gold/30 pl-4 py-1">
            <span class="block text-[8px] uppercase tracking-widest text-text-secondary">ECOSYSTEM STATUS</span>
            <span class="block text-3xl font-serif font-light text-gold-primary mt-1">LIVE</span>
        </div>
    </div>

    <!-- Bio Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="space-y-6">
            <div class="p-6 bg-[#101010] border border-surface-soft rounded luxury-card luxury-card-hover reveal-left" data-delay="100">
                <h3 class="text-xs font-extrabold uppercase tracking-widest text-gold-primary font-mono">// Founder Story</h3>
                <p class="text-xs text-text-secondary mt-3 leading-relaxed font-sans">
                    Starting out as a self-taught creator, I founded AA Group with the intent of offering high-fidelity coding services and robust digital products. I specialize in designing frontend UI and writing reliable logic to power businesses in the modern digital age.
                </p>
            </div>
            <div class="p-6 bg-[#101010] border border-surface-soft rounded luxury-card luxury-card-hover reveal-left" data-delay="250">
                <h3 class="text-xs font-extrabold uppercase tracking-widest text-gold-primary font-mono">// Our Mission</h3>
                <p class="text-xs text-text-secondary mt-3 leading-relaxed font-sans">
                    To build high-value software, bots, websites, and templates that empower organizations to automate tasks, visualize metrics, and sell digital solutions online with maximum convenience.
                </p>
            </div>
        </div>

        <div class="space-y-6">
            <div class="p-6 bg-[#101010] border border-surface-soft rounded luxury-card luxury-card-blue reveal-right" data-delay="150">
                <h3 class="text-xs font-extrabold uppercase tracking-widest text-blue-accent font-mono">// Our Vision</h3>
                <p class="text-xs text-text-secondary mt-3 leading-relaxed font-sans">
                    To construct a growing digital ecosystem under the AA Group brand, merging smart AI integrations with highly aesthetic UI to lead the market in product delivery.
                </p>
            </div>
            <div class="p-6 bg-[#101010] border border-surface-soft rounded luxury-card luxury-card-blue reveal-right" data-delay="300">
                <h3 class="text-xs font-extrabold uppercase tracking-widest text-blue-accent font-mono">// Current Focus</h3>
                <p class="text-xs text-text-secondary mt-3 leading-relaxed font-sans">
                    Engineering responsive websites for local businesses, distributing premium themes through AA Store Premium, and deploying Telegram sales automation.
                </p>
            </div>
        </div>
    </div>

    <!-- Skills Section Anchor -->
    <div id="skills" class="pt-8 scroll-mt-28 space-y-6">
        <div class="border-t border-surface-soft/60 pt-12 space-y-2">
            <span class="section-label">
                Technical Stack
            </span>
            <h2 class="font-serif text-3xl font-light text-text-primary uppercase tracking-wider">Core Technologies &amp; Mastery</h2>
            <p class="text-xs text-text-secondary leading-relaxed max-w-xl font-sans">
                A system architect is defined by their tools. Below is the custom technology profile configured for the AA Group ecosystem.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">
            <!-- Skill Category 1 -->
            <div class="p-6 bg-surface border border-surface-soft rounded space-y-4 luxury-card luxury-card-hover reveal-left" data-delay="100">
                <h3 class="text-[10px] font-bold uppercase tracking-widest text-gold-primary font-mono">// Languages &amp; Frameworks</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">PHP 8.x</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Laravel 11</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">JavaScript (ES6+)</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Node.js</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Python 3</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Tailwind CSS</span>
                </div>
            </div>

            <!-- Skill Category 2 -->
            <div class="p-6 bg-surface border border-surface-soft rounded space-y-4 luxury-card luxury-card-blue reveal-right" data-delay="250">
                <h3 class="text-[10px] font-bold uppercase tracking-widest text-blue-accent font-mono">// Integrations &amp; Workflows</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Telegram Bot API</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Stripe Gateway</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Crypto Webhooks</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">OpenAI / Gemini API</span>
                    <span class="tag-pill px-2.5 py-1 text-[9px] font-mono bg-luxury-bg border border-surface-soft text-text-primary">Figma Design Work</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision Timeline Section -->
    <div class="pt-8 space-y-8">
        <div class="border-t border-surface-soft/60 pt-12 space-y-2">
            <span class="section-label">ROADMAP</span>
            <h2 class="font-serif text-3xl font-light text-text-primary uppercase tracking-wider">Vision Milestones</h2>
            <p class="text-xs text-text-secondary max-w-xl leading-relaxed font-sans">
                The strategic roadmap detailing the development and expansion plans for AA Group over the coming years.
            </p>
        </div>

        <div class="relative max-w-5xl mx-auto">
            <!-- Desktop Line Connector -->
            <div class="hidden lg:block absolute top-[44px] left-12 right-12 h-[1px] bg-gradient-to-r from-transparent via-blue-accent/30 to-transparent z-0 select-none"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 relative z-10">
                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="100">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2026</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3"></div>
                    </div>
                    <div class="p-6 bg-surface/85 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Build AA Store</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Establishing primary cash-flow channels and automated Telegram bot systems to distribute licenses.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="200">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2027</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3 select-none"></div>
                    </div>
                    <div class="p-6 bg-surface/85 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Expand Services</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Introducing custom Laravel development and specialized automation services for select business clients.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="300">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2028</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3 select-none"></div>
                    </div>
                    <div class="p-6 bg-surface/85 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Build Team</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Recruiting highly skilled designers and system developers to handle larger client scales and speed up production.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="400">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2029</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3 select-none"></div>
                    </div>
                    <div class="p-6 bg-surface/85 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Scale Ecosystem</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Integrating all products, custom bot scripts, and services into a complete digital ecosystem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Direction / Future Section -->
    <div class="pt-8 reveal-scale" data-delay="150">
        <div class="relative border border-border-gold p-1 bg-luxury-bg">
            <span class="absolute top-[-1px] left-[-1px] w-3 h-3 border-t-2 border-l-2 border-gold-primary pointer-events-none"></span>
            <span class="absolute top-[-1px] right-[-1px] w-3 h-3 border-t-2 border-r-2 border-gold-primary pointer-events-none"></span>
            <span class="absolute bottom-[-1px] left-[-1px] w-3 h-3 border-b-2 border-l-2 border-gold-primary pointer-events-none"></span>
            <span class="absolute bottom-[-1px] right-[-1px] w-3 h-3 border-b-2 border-r-2 border-gold-primary pointer-events-none"></span>

            <div class="relative border border-border-gold/30 bg-surface/50 w-full h-full p-8">
                <h3 class="font-serif text-2xl font-light text-text-primary uppercase tracking-wider">Next-Gen Digital Strategy</h3>
                <p class="text-xs text-text-secondary mt-3 leading-relaxed font-sans max-w-3xl">
                    As tech matures, AA Group is actively pivoting to AI-augmented workflows. We integrate LLMs, structured prompts, and webhook engines directly into business processes to trim hours off customer care, lead logging, and sales pipelines.
                </p>
                <div class="mt-6 flex items-center justify-between">
                    <a href="{{ url('/services') }}" class="btn-sweep-gold inline-flex items-center gap-1.5 px-4 py-2 text-[10px] font-bold uppercase tracking-widest text-black bg-gold-primary hover:bg-gold-light rounded transition-colors duration-300">
                        Explore Services
                    </a>
                    <span class="founder-signature text-base font-serif select-none">Amir</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
