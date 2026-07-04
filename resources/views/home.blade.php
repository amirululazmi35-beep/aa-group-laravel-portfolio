@extends('layouts.portfolio')

@section('title', 'Founder & AI Integrator')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center pt-28 pb-16 overflow-hidden bg-grid-ambient bg-luxury-bg">
    <!-- Background Orbs -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-[20%] left-[8%] w-80 h-80 rounded-full bg-gold-primary/5 blur-[100px] bg-orb-1"></div>
        <div class="absolute bottom-[20%] right-[8%] w-[400px] h-[400px] rounded-full bg-blue-accent/5 blur-[120px] bg-orb-2"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 lg:px-16 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Headline and business info -->
            <div class="lg:col-span-7 flex flex-col items-start text-left space-y-6">
                <!-- Small founder badge -->
                <div class="hero-fade-in" style="transition-delay: 150ms">
                    <span class="inline-flex items-center text-[10px] md:text-xs uppercase tracking-[0.3em] text-gold-primary font-bold bg-gold-primary/5 px-3 py-1 border border-border-gold/30">
                        <svg class="w-3 h-3 mr-1.5 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 21l8.95-6.262H21V3H3v12.904h6.813z"/></svg>
                        Founder of AA Group
                    </span>
                </div>

                <!-- Main Headline -->
                <h1 id="hero-title" class="font-serif text-6xl sm:text-7xl md:text-8xl lg:text-[7.5rem] font-light text-text-primary tracking-widest uppercase leading-[0.9] select-none">
                    <span class="inline-block char-reveal" style="transition-delay: 200ms">A</span>
                    <span class="inline-block char-reveal" style="transition-delay: 350ms">M</span>
                    <span class="inline-block char-reveal" style="transition-delay: 500ms">I</span>
                    <span class="inline-block char-reveal" style="transition-delay: 650ms">R</span>
                </h1>

                <!-- Subheadline -->
                <h2 class="hero-fade-in text-xs md:text-sm uppercase tracking-[0.25em] text-gold-light font-bold" style="transition-delay: 800ms">
                    Founder of AA Group &amp; AI Integrator
                </h2>

                <!-- Description -->
                <p class="hero-fade-in max-w-xl font-sans text-sm md:text-base text-text-secondary leading-relaxed font-normal" style="transition-delay: 950ms">
                    Membangunkan ekosistem perniagaan digital melalui reka bentuk premium, pembangunan kod (Laravel &amp; Blade), integrasi automasi bot, dan pengedaran lesen digital di bawah AA Store Premium.
                </p>

                <!-- Service Chips -->
                <div class="hero-fade-in flex flex-wrap gap-2 pt-2" style="transition-delay: 1100ms">
                    <span class="tag-pill inline-flex items-center text-[9px] tracking-widest uppercase bg-surface border border-surface-soft text-text-primary px-3 py-1 font-semibold">
                        <svg class="w-3 h-3 mr-1.5 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 15h3M1 9h3M1 15h3"/></svg>
                        AI Systems
                    </span>
                    <span class="tag-pill inline-flex items-center text-[9px] tracking-widest uppercase bg-surface border border-surface-soft text-text-primary px-3 py-1 font-semibold">
                        <svg class="w-3 h-3 mr-1.5 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4H6zM3 6h18M16 10a4 4 0 01-8 0"/></svg>
                        Digital Products
                    </span>
                    <span class="tag-pill inline-flex items-center text-[9px] tracking-widest uppercase bg-surface border border-surface-soft text-text-primary px-3 py-1 font-semibold">
                        <svg class="w-3 h-3 mr-1.5 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 000 20M12 2a14.5 14.5 0 010 20M2 12h20"/></svg>
                        Website Development
                    </span>
                    <span class="tag-pill inline-flex items-center text-[9px] tracking-widest uppercase bg-surface border border-surface-soft text-text-primary px-3 py-1 font-semibold">
                        <svg class="w-3 h-3 mr-1.5 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 17l6-6-6-6M12 19h8"/></svg>
                        Automation Bots
                    </span>
                    <span class="tag-pill inline-flex items-center text-[9px] tracking-widest uppercase bg-surface border border-surface-soft text-text-primary px-3 py-1 font-semibold">
                        <svg class="w-3 h-3 mr-1.5 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        AA Store Premium
                    </span>
                </div>

                <!-- CTA Buttons -->
                <div class="hero-fade-in flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mt-4 w-full sm:w-auto" style="transition-delay: 1250ms">
                    <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold group inline-flex items-center justify-center px-6 py-3 text-[10px] font-bold uppercase tracking-widest bg-gold-primary hover:bg-gold-light text-black rounded transition-all duration-300 min-h-[48px]">
                        Inquire Services
                        <svg class="ml-2 w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    </a>
                    <a href="#projects" class="w-full sm:w-auto">
                        <button class="btn-sweep-gold w-full group inline-flex items-center justify-center px-6 py-3 text-[10px] font-bold uppercase tracking-widest border border-border-gold/40 hover:border-gold-primary text-text-primary bg-transparent rounded transition-all duration-300 min-h-[48px] cursor-pointer">
                            View Case Studies
                            <svg class="ml-2 w-3.5 h-3.5 group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                        </button>
                    </a>
                </div>

                <!-- Info Cards / Stats Blocks -->
                <div class="hero-fade-in grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 border-t border-surface-soft/60 w-full" style="transition-delay: 1400ms">
                    <div class="border-l border-border-gold/30 pl-4 py-1">
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary">Business Structure</span>
                        <span class="block text-xs font-serif font-medium text-gold-primary mt-1">Founder-led</span>
                    </div>
                    <div class="border-l border-border-gold/30 pl-4 py-1">
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary">E-Commerce</span>
                        <span class="block text-xs font-serif font-medium text-gold-primary mt-1">Digital Products</span>
                    </div>
                    <div class="border-l border-border-gold/30 pl-4 py-1">
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary">Core Operations</span>
                        <span class="block text-xs font-serif font-medium text-gold-primary mt-1">AI Workflows</span>
                    </div>
                    <div class="border-l border-border-gold/30 pl-4 py-1">
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary">Service Pipeline</span>
                        <span class="block text-xs font-serif font-medium text-gold-primary mt-1">Automation</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Founder Mockup Identity Card -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end w-full moving-glow hero-slide-in-right" style="transition-delay: 400ms">
                <div class="w-full max-w-[380px] relative border border-border-gold p-1 bg-luxury-bg shadow-[0_0_80px_rgba(200,169,106,0.06)] luxury-shine">
                    <!-- Corner Brackets -->
                    <span class="absolute top-[-1px] left-[-1px] w-3 h-3 border-t-2 border-l-2 border-gold-primary pointer-events-none"></span>
                    <span class="absolute top-[-1px] right-[-1px] w-3 h-3 border-t-2 border-r-2 border-gold-primary pointer-events-none"></span>
                    <span class="absolute bottom-[-1px] left-[-1px] w-3 h-3 border-b-2 border-l-2 border-gold-primary pointer-events-none"></span>
                    <span class="absolute bottom-[-1px] right-[-1px] w-3 h-3 border-b-2 border-r-2 border-gold-primary pointer-events-none"></span>

                    <div class="relative border border-border-gold/30 bg-surface/85 backdrop-blur-md overflow-hidden flex flex-col terminal-shimmer">
                        <!-- Mockup Header -->
                        <div class="browser-header">
                            <div class="browser-dot bg-[#ff5f56]/80"></div>
                            <div class="browser-dot bg-[#ffbd2e]/80"></div>
                            <div class="browser-dot bg-[#27c93f]/80"></div>
                            <span class="text-[9px] uppercase tracking-widest text-text-secondary/60 font-mono ml-4 select-none">aa-founder-core.json</span>
                        </div>
                        
                        <!-- Visual Details -->
                        <div class="p-6 md:p-8 space-y-6 font-mono text-xs text-text-secondary leading-relaxed bg-grid-tech">
                            <div class="space-y-2 border-b border-surface-soft/60 pb-4">
                                <span class="text-gold-primary block font-sans uppercase tracking-[0.2em] text-[9px] font-bold select-none">COGNITIVE PROFILE</span>
                                <div class="flex items-center justify-between text-text-primary text-sm font-serif tracking-widest uppercase">
                                    <span>IDENTITY:</span>
                                    <span class="text-gold-light font-bold select-all">AMIR</span>
                                </div>
                                <div class="flex items-center justify-between text-[11px]">
                                    <span>FUNCTION:</span>
                                    <span class="text-blue-accent font-semibold">ECOSYSTEM ARCHITECT</span>
                                </div>
                                <div class="flex items-center justify-between text-[11px]">
                                    <span>STATUS:</span>
                                    <span class="flex items-center gap-1.5 text-emerald-400 bg-emerald-500/5 px-2 py-0.5 border border-emerald-500/25 text-[9px] font-bold system-label-glow">
                                        <span class="status-pulse-dot"></span>
                                        ACTIVE SYSTEM
                                    </span>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <span class="text-gold-primary block font-sans uppercase tracking-[0.2em] text-[9px] font-bold select-none">DEPLOYMENT ARCHITECTURE</span>
                                <div class="bg-luxury-bg border border-surface-soft p-3 font-mono text-[10px] space-y-1.5 text-text-secondary overflow-hidden select-all">
                                    <div><span class="text-blue-accent">&gt;</span> php artisan serve</div>
                                    <div class="text-emerald-400/80">✔ Production bundle optimized</div>
                                    <div class="text-emerald-400/80">✔ Database connections online</div>
                                    <div class="text-emerald-400/80">✔ SSL secure tunnels validated</div>
                                    <div class="text-text-primary/40"><span class="text-gold-primary">HOST:</span> Local Port Gateway</div>
                                    <div><span class="text-blue-accent">&gt;</span> <span class="terminal-cursor"></span></div>
                                </div>
                            </div>

                            <div class="border-t border-surface-soft/60 pt-4 space-y-2">
                                <div class="flex items-center justify-between text-[10px]">
                                    <span>ZONE:</span>
                                    <span class="text-text-primary font-semibold">MY/KL</span>
                                </div>
                                <div class="flex items-center justify-between text-[10px]">
                                    <span>REDUNDANCY:</span>
                                    <span class="text-gold-light font-semibold">24/7 TELEGRAM BOT</span>
                                </div>
                                
                                <!-- Founder Signature detail area -->
                                <div class="border-t border-surface-soft/60 pt-4 flex items-center justify-between">
                                    <span class="text-[8px] uppercase tracking-widest text-text-secondary/50 font-sans font-bold">FOUNDER SIGNATURE:</span>
                                    <span class="founder-signature text-sm font-serif select-none">Amir</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<div class="animated-divider"></div>

<!-- Introduction Section -->
<section id="about" class="bg-surface/10 py-20 reveal-fade">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 space-y-12">
        <!-- Section Heading -->
        <div class="text-left space-y-3">
            <span class="section-label">THE FOUNDER</span>
            <h2 class="font-serif text-3xl md:text-4xl font-light text-text-primary uppercase tracking-wider">
                Amir | Strategic Visionary
            </h2>
            <p class="text-text-secondary text-xs md:text-sm font-sans max-w-xl">
                Pioneering new systems at the intersection of design, frontend code, and artificial intelligence.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-stretch">
            <!-- Left Side: Bento Blocks -->
            <div class="lg:col-span-7 flex flex-col justify-between space-y-6">
                <!-- Main Statement Box -->
                <div class="p-6 sm:p-8 bg-surface-soft/40 border border-border-gold/15 relative overflow-hidden flex flex-col justify-center luxury-card reveal-left">
                    <span class="absolute top-0 right-0 w-24 h-24 rounded-full bg-gold-primary/5 blur-2xl"></span>
                    <h3 class="font-serif text-xl sm:text-2xl md:text-3xl font-light text-text-primary leading-tight mb-4">
                        Membina aset digital bermula dari bawah pada umur 20 tahun.
                    </h3>
                    <p class="font-sans text-xs sm:text-sm text-text-secondary leading-relaxed font-normal">
                        Gabungan kepakaran visual reka bentuk UI (Figma) dengan pelaksanaan kod pengaturcaraan membolehkan Amir mengendalikan keseluruhan kitaran hayat produk digital secara autonomi.
                    </p>
                </div>

                <!-- Mission & Focus split blocks -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="p-6 bg-surface border border-surface-soft flex flex-col space-y-3 justify-between luxury-card luxury-card-hover reveal-up" data-delay="100">
                        <div class="space-y-2">
                            <div class="flex items-center space-x-2 text-gold-primary">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.907c.961 0 1.36 1.246.6 1.79l-3.97 2.883a1 1 0 00-.364 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.971-2.883a1 1 0 00-1.176 0l-3.97 2.883c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.364-1.118L2.98 9.72c-.76-.544-.36-1.79.6-1.79h4.907a1 1 0 00.95-.69l1.519-4.674z"/></svg>
                                <span class="text-[9px] uppercase tracking-widest font-bold font-sans">Syarikat Misi</span>
                            </div>
                            <h4 class="font-serif text-sm text-text-primary font-medium">Digital Autonomy</h4>
                            <p class="font-sans text-[11px] text-text-secondary leading-relaxed">
                                Membangunkan AA Group menjadi sebuah ekosistem perniagaan digital yang kukuh, menguntungkan, dan mampu berkembang secara sistematik.
                            </p>
                        </div>
                    </div>

                    <div class="p-6 bg-surface border border-surface-soft flex flex-col space-y-3 justify-between luxury-card luxury-card-blue reveal-up" data-delay="250">
                        <div class="space-y-2">
                            <div class="flex items-center space-x-2 text-blue-accent">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M16.26 16.26l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
                                <span class="text-[9px] uppercase tracking-widest font-bold font-sans">Sistem Nilai</span>
                            </div>
                            <h4 class="font-serif text-sm text-text-primary font-medium">Premium Execution</h4>
                            <p class="font-sans text-[11px] text-text-secondary leading-relaxed">
                                Mengutamakan kualiti visual mewah (luxury theme), struktur kod modular, integrasi API automasi pintar, serta kepuasan pengguna maksima.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Custom stats panel in thin columns -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-6 border-t border-surface-soft">
                    <div>
                        <span class="block text-2xl md:text-3xl font-serif text-gold-primary font-medium" data-count-target="20">0</span>
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary mt-1">Age</span>
                    </div>
                    <div>
                        <span class="block text-2xl md:text-3xl font-serif text-gold-primary font-medium" data-count-target="6">0</span>
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary mt-1">Core Expertise</span>
                    </div>
                    <div>
                        <span class="block text-2xl md:text-3xl font-serif text-gold-primary font-medium" data-count-target="100%">0%</span>
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary mt-1">Autonomy</span>
                    </div>
                    <div>
                        <span class="block text-2xl md:text-3xl font-serif text-gold-primary font-medium">LIVE</span>
                        <span class="block text-[8px] uppercase tracking-widest text-text-secondary mt-1">Ecosystem Status</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Profile Card Mockup -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end reveal-scale" data-delay="200">
                <div class="w-full max-w-[360px] relative border border-border-gold p-1 bg-luxury-bg shadow-[0_0_80px_rgba(200,169,106,0.06)]">
                    <span class="absolute top-[-1px] left-[-1px] w-3 h-3 border-t-2 border-l-2 border-gold-primary pointer-events-none"></span>
                    <span class="absolute top-[-1px] right-[-1px] w-3 h-3 border-t-2 border-r-2 border-gold-primary pointer-events-none"></span>
                    <span class="absolute bottom-[-1px] left-[-1px] w-3 h-3 border-b-2 border-l-2 border-gold-primary pointer-events-none"></span>
                    <span class="absolute bottom-[-1px] right-[-1px] w-3 h-3 border-b-2 border-r-2 border-gold-primary pointer-events-none"></span>

                    <div class="relative border border-border-gold/30 bg-surface/50 w-full h-full p-3">
                        <div class="relative aspect-[3/4] w-full bg-luxury-bg border-none overflow-hidden group">
                            <!-- Fallback Mockup Graphics -->
                            <div class="absolute inset-0 bg-grid-ambient flex flex-col items-center justify-center p-8 bg-surface-soft/20 text-center overflow-hidden">
                                <span class="font-serif text-[12rem] text-gold-primary/5 select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light">A</span>
                                
                                <div class="border border-border-gold/15 w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                                    <span class="font-serif text-3xl tracking-[0.2em] text-gold-primary mb-2 select-none">AMIR</span>
                                    <span class="text-[8px] uppercase tracking-[0.25em] text-text-secondary font-bold">FOUNDER PROFILE</span>
                                    <div class="w-8 h-[1px] bg-gold-primary/30 my-4"></div>
                                    <p class="text-[10px] text-text-secondary/60 leading-relaxed max-w-[180px]">
                                        AA Group Holding Digital System Ecosystem
                                    </p>
                                </div>
                            </div>
                            <!-- Title Plate Overlay at the bottom -->
                            <div class="absolute bottom-4 left-4 right-4 bg-luxury-bg/90 backdrop-blur-sm border border-border-gold/30 p-4 text-center">
                                <span class="block font-serif text-lg tracking-widest text-text-primary uppercase">AMIR</span>
                                <span class="block text-[9px] uppercase tracking-[0.2em] text-gold-primary mt-1">FOUNDER OF AA GROUP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="animated-divider"></div>

<!-- Company Ecosystem Branches Section -->
<section id="aagroup" class="bg-surface/30 py-20 reveal-fade bg-grid-ambient">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 space-y-12">
        <div class="text-left space-y-3">
            <span class="section-label">THE CORPORATE IDENTITY</span>
            <h2 class="font-serif text-3xl md:text-4xl font-light text-text-primary uppercase tracking-wider">
                AA Group Digital Ecosystem
            </h2>
            <p class="text-text-secondary text-xs md:text-sm font-sans max-w-xl">
                Developing a unified digital network that connects premium e-commerce, custom developer tools, and automated system channels.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left Column: Vision Statement -->
            <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-28 reveal-left">
                <span class="text-[10px] uppercase tracking-[0.25em] text-blue-accent font-bold">// THE ECOSYSTEM PLAN</span>
                <h3 class="font-serif text-3xl font-light text-text-primary leading-tight">
                    Connecting retail products with custom services under a unified brand.
                </h3>
                <p class="font-sans text-sm text-text-secondary leading-relaxed font-normal">
                    AA Group ialah ekosistem perniagaan digital bersepadu. Kami menggabungkan saluran jualan runcit produk (AA Store Premium) dengan penawaran khidmat pembangunan sistem berteknologi tinggi untuk membolehkan perniagaan beroperasi secara optimum.
                </p>
                <div class="h-[1px] bg-border-blue/35 w-full pt-2"></div>
                <div class="flex items-center space-x-2 text-blue-accent text-xs uppercase tracking-widest font-semibold">
                    <span>Ecosystem Alpha version 1.2</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </div>
            </div>

            <!-- Right Column: Branches Grid -->
            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Branch 1 -->
                <div class="p-6 flex flex-col justify-between aspect-[4/3] bg-surface/50 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_30px_rgba(47,128,237,0.08)] transition-all duration-500 group luxury-card reveal-up" data-delay="100">
                    <div class="flex justify-between items-start mb-4">
                        <span class="block text-[9px] uppercase tracking-widest text-text-secondary font-bold font-sans">01 / RETAIL</span>
                        <div class="w-8 h-8 flex items-center justify-center bg-luxury-bg border border-surface-soft text-text-secondary group-hover:text-blue-accent group-hover:border-blue-accent/30 transition-all duration-300">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4H6zM3 6h18M16 10a4 4 0 01-8 0"/></svg>
                        </div>
                    </div>
                    <h4 class="font-serif text-xl font-light text-text-primary mb-3 group-hover:text-blue-accent transition-colors duration-300">
                        AA Store Premium
                    </h4>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        Direct retail channels for premium software licenses, streaming logins, and advanced productivity keys.
                    </p>
                </div>

                <!-- Branch 2 -->
                <div class="p-6 flex flex-col justify-between aspect-[4/3] bg-surface/50 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_30px_rgba(47,128,237,0.08)] transition-all duration-500 group luxury-card reveal-up" data-delay="200">
                    <div class="flex justify-between items-start mb-4">
                        <span class="block text-[9px] uppercase tracking-widest text-text-secondary font-bold font-sans">02 / SOLUTIONS</span>
                        <div class="w-8 h-8 flex items-center justify-center bg-luxury-bg border border-surface-soft text-text-secondary group-hover:text-blue-accent group-hover:border-blue-accent/30 transition-all duration-300">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 000 20M12 2a14.5 14.5 0 010 20M2 12h20"/></svg>
                        </div>
                    </div>
                    <h4 class="font-serif text-xl font-light text-text-primary mb-3 group-hover:text-blue-accent transition-colors duration-300">
                        Website Development
                    </h4>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        Fast-loading custom frontend development tailored for businesses looking to expand their corporate footprint.
                    </p>
                </div>

                <!-- Branch 3 -->
                <div class="p-6 flex flex-col justify-between aspect-[4/3] bg-surface/50 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_30px_rgba(47,128,237,0.08)] transition-all duration-500 group luxury-card reveal-up" data-delay="300">
                    <div class="flex justify-between items-start mb-4">
                        <span class="block text-[9px] uppercase tracking-widest text-text-secondary font-bold font-sans">03 / CREATIVE</span>
                        <div class="w-8 h-8 flex items-center justify-center bg-luxury-bg border border-surface-soft text-text-secondary group-hover:text-blue-accent group-hover:border-blue-accent/30 transition-all duration-300">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122A3 3 0 0010.5 21c.966 0 1.838-.46 2.39-1.173m-3.36-3.705A3.978 3.978 0 019 15c0-1.892 1.33-3.474 3.125-3.875M12 3a9 9 0 100 18 9 9 0 000-18z"/></svg>
                        </div>
                    </div>
                    <h4 class="font-serif text-xl font-light text-text-primary mb-3 group-hover:text-blue-accent transition-colors duration-300">
                        Design &amp; Branding
                    </h4>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        Premium typography guidelines, vector assets, and bespoke UX designs that establish visual gravity.
                    </p>
                </div>

                <!-- Branch 4 -->
                <div class="p-6 flex flex-col justify-between aspect-[4/3] bg-surface/50 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_30px_rgba(47,128,237,0.08)] transition-all duration-500 group luxury-card reveal-up" data-delay="400">
                    <div class="flex justify-between items-start mb-4">
                        <span class="block text-[9px] uppercase tracking-widest text-text-secondary font-bold font-sans">04 / INTELLIGENCE</span>
                        <div class="w-8 h-8 flex items-center justify-center bg-luxury-bg border border-surface-soft text-text-secondary group-hover:text-blue-accent group-hover:border-blue-accent/30 transition-all duration-300">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9.813 15.904L9 21l8.95-6.262H21V3H3v12.904h6.813z"/></svg>
                        </div>
                    </div>
                    <h4 class="font-serif text-xl font-light text-text-primary mb-3 group-hover:text-blue-accent transition-colors duration-300">
                        AI Solutions
                    </h4>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                        API integrations, customized language model prompts, and automation agents that increase administrative efficiency.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="animated-divider"></div>

<!-- Skills Section -->
<section id="skills" class="bg-grid-ambient py-20 reveal-fade">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 space-y-12">
        <div class="text-center max-w-xl mx-auto space-y-3">
            <span class="section-label">EXPERTISE</span>
            <h2 class="font-serif text-3xl font-light text-text-primary uppercase tracking-wider">Capabilities &amp; Skills</h2>
            <p class="text-text-secondary text-xs md:text-sm">A comprehensive toolkit built to design, build, automate, and monetize online products.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Skill card 1 -->
            <div class="p-8 flex flex-col justify-between min-h-[320px] bg-surface/50 border border-surface-soft hover:border-gold-primary/30 hover:shadow-[0_0_35px_rgba(200,169,106,0.06)] transition-all duration-500 group luxury-card reveal-blur" data-delay="100">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="font-serif text-3xl text-gold-primary/40 font-extralight tracking-widest group-hover:text-gold-primary transition-colors duration-300">01</div>
                        <div class="w-9 h-9 flex items-center justify-center bg-luxury-bg border border-surface-soft text-gold-primary group-hover:text-gold-light group-hover:border-gold-primary/30 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                    </div>
                    <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300">UX &amp; UI Design</h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                        Merekabentuk visual korporat yang mewah, wireframe modular, flow pengguna intuitif, serta susun atur grid yang seimbang menggunakan Figma.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Figma</span>
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Layout System</span>
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Branding</span>
                </div>
            </div>

            <!-- Skill card 2 -->
            <div class="p-8 flex flex-col justify-between min-h-[320px] bg-surface/50 border border-surface-soft hover:border-gold-primary/30 hover:shadow-[0_0_35px_rgba(200,169,106,0.06)] transition-all duration-500 group luxury-card reveal-blur" data-delay="250">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="font-serif text-3xl text-gold-primary/40 font-extralight tracking-widest group-hover:text-gold-primary transition-colors duration-300">02</div>
                        <div class="w-9 h-9 flex items-center justify-center bg-luxury-bg border border-surface-soft text-gold-primary group-hover:text-gold-light group-hover:border-gold-primary/30 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                    </div>
                    <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300">Full-Stack Development</h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                        Membina aplikasi web yang pantas dan responsif menggunakan framework Laravel, Blade template logic, Tailwind CSS, dan bundler modern Vite.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">PHP / Laravel</span>
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Blade &amp; CSS</span>
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">MySQL / SQLite</span>
                </div>
            </div>

            <!-- Skill card 3 -->
            <div class="p-8 flex flex-col justify-between min-h-[320px] bg-surface/50 border border-surface-soft hover:border-gold-primary/30 hover:shadow-[0_0_35px_rgba(200,169,106,0.06)] transition-all duration-500 group luxury-card reveal-blur" data-delay="400">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="font-serif text-3xl text-gold-primary/40 font-extralight tracking-widest group-hover:text-gold-primary transition-colors duration-300">03</div>
                        <div class="w-9 h-9 flex items-center justify-center bg-luxury-bg border border-surface-soft text-gold-primary group-hover:text-gold-light group-hover:border-gold-primary/30 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 17l6-6-6-6M12 19h8"/></svg>
                        </div>
                    </div>
                    <h3 class="font-serif text-2xl font-light text-text-primary mb-3 group-hover:text-gold-light transition-colors duration-300">System Automation</h3>
                    <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal mb-6">
                        Mengintegrasikan bot Telegram dengan API, automasi pemprosesan checkout bayaran webhooks, dan prompt engineering untuk sistem AI pintar.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Telegram Bot API</span>
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Python Scripting</span>
                    <span class="tag-pill border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">AI / Webhooks</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Bento Grid -->
<section id="projects" class="border-t border-surface-soft bg-grid-ambient bg-luxury-bg py-20 reveal-fade">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 space-y-12">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
            <div class="space-y-3">
                <span class="section-label">CASE STUDIES</span>
                <h3 class="font-serif text-3xl md:text-4xl font-light text-text-primary uppercase tracking-wider">Featured Projects</h3>
                <p class="text-text-secondary text-xs md:text-sm max-w-xl">
                    A showcase of functional solutions, bot structures, design campaigns, and premium e-commerce setups built by Amir.
                </p>
            </div>
            <a href="{{ url('/projects') }}" class="text-[10px] font-bold uppercase tracking-widest text-gold-primary hover:text-gold-light inline-flex items-center gap-1.5 transition-colors">
                View All Projects &rarr;
            </a>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
            <!-- Project 1 -->
            <div class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card reveal-scale" data-delay="100">
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
                            <span class="font-serif text-8xl md:text-9xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-gold-primary">
                                AA
                            </span>
                            <div class="border border-border-gold w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                                <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-gold-primary">E-Commerce Product</span>
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
                        <span class="text-[9px] uppercase tracking-widest font-bold text-gold-primary">Digital Platform</span>
                        <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                            AA Store Premium
                        </h3>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Our digital product platform selling premium web applications, developer templates, and customization software.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Node</span>
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Laravel</span>
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2 border">Tailwind</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card reveal-scale" data-delay="250">
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-luxury-bg/50 border-b border-surface-soft/60 flex flex-col">
                    <!-- Simulated Browser Bar -->
                    <div class="browser-header select-none">
                        <div class="browser-dot bg-[#ff5f56]/80"></div>
                        <div class="browser-dot bg-[#ffbd2e]/80"></div>
                        <div class="browser-dot bg-[#27c93f]/80"></div>
                        <span class="text-[8px] uppercase tracking-widest text-text-secondary/55 font-mono ml-4">
                            bot.app
                        </span>
                    </div>

                    <div class="relative flex-grow w-full overflow-hidden">
                        <div class="absolute inset-0 bg-grid-tech bg-luxury-bg/95 flex flex-col items-center justify-center p-5 text-center overflow-hidden">
                            <span class="font-serif text-8xl md:text-9xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-blue-accent">
                                BM
                            </span>
                            <div class="border border-border-blue w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                                <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-blue-accent">Automation systems</span>
                                <span class="font-serif text-sm tracking-wider text-text-primary uppercase max-w-[200px] leading-tight mb-2">BLACKMARKET Telegram Bot</span>
                                <div class="w-6 h-[1px] bg-blue-accent/30 my-2"></div>
                                <span class="text-[7px] uppercase tracking-widest text-text-secondary/50 font-semibold select-none">PROTOTYPE MODULE</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-12 left-4 z-10">
                        <span class="px-2.5 py-0.5 rounded text-[9px] font-bold uppercase tracking-widest bg-gold-primary text-black border border-gold-primary/20">Live</span>
                    </div>
                </div>

                <div class="p-6 md:p-8 flex-grow flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-[9px] uppercase tracking-widest font-bold text-blue-accent">AI Bot</span>
                        <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                            BLACKMARKET Bot
                        </h3>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Automated messaging and script distributor bot featuring Stripe &amp; Crypto webhook processing.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2">Python</span>
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2">Telebot API</span>
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2">Webhooks</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-surface/90 flex flex-col justify-between overflow-hidden border border-surface-soft group hover:border-gold-primary/30 luxury-card reveal-scale" data-delay="400">
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-luxury-bg/50 border-b border-surface-soft/60 flex flex-col">
                    <!-- Simulated Browser Bar -->
                    <div class="browser-header select-none">
                        <div class="browser-dot bg-[#ff5f56]/80"></div>
                        <div class="browser-dot bg-[#ffbd2e]/80"></div>
                        <div class="browser-dot bg-[#27c93f]/80"></div>
                        <span class="text-[8px] uppercase tracking-widest text-text-secondary/55 font-mono ml-4">
                            brand.app
                        </span>
                    </div>

                    <div class="relative flex-grow w-full overflow-hidden">
                        <div class="absolute inset-0 bg-grid-tech bg-luxury-bg/95 flex flex-col items-center justify-center p-5 text-center overflow-hidden">
                            <span class="font-serif text-8xl md:text-9xl select-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none font-light tracking-widest opacity-[0.04] text-gold-primary">
                                DB
                            </span>
                            <div class="border border-border-gold w-full h-full flex flex-col items-center justify-center p-4 relative z-10">
                                <span class="text-[8px] uppercase tracking-[0.25em] font-bold mb-1.5 text-gold-primary">Creative Design</span>
                                <span class="font-serif text-sm tracking-wider text-text-primary uppercase max-w-[200px] leading-tight mb-2">Design &amp; Branding</span>
                                <div class="w-6 h-[1px] bg-gold-primary/30 my-2"></div>
                                <span class="text-[7px] uppercase tracking-widest text-text-secondary/50 font-semibold select-none">PROTOTYPE MODULE</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-12 left-4 z-10">
                        <span class="px-2.5 py-0.5 rounded text-[9px] font-bold uppercase tracking-widest bg-gold-primary text-black border border-gold-primary/20">Live</span>
                    </div>
                </div>

                <div class="p-6 md:p-8 flex-grow flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <span class="text-[9px] uppercase tracking-widest font-bold text-gold-primary">Branding</span>
                        <h3 class="font-serif text-2xl font-light text-text-primary group-hover:text-gold-light transition-colors duration-300">
                            Design &amp; Branding
                        </h3>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Developing consistent logos, styling guidelines, and marketing templates for modern businesses.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-1.5 pt-4 border-t border-surface-soft/40">
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2">Figma</span>
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2">Branding Pack</span>
                        <span class="tag-pill border border-surface-soft bg-luxury-bg/50 text-text-secondary text-[9px] py-0.5 px-2">Assets</span>
                    </div>
                </div>
            </div>
        </div>
    </div></section>

<div class="animated-divider"></div>

<!-- AA Store Premium Showcase (Ported) -->
<section id="store" class="bg-surface/30 bg-grid-ambient py-20 reveal-fade">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 space-y-12">
        <div class="text-center max-w-xl mx-auto space-y-3">
            <span class="section-label">RETAIL BRANCH</span>
            <h2 class="font-serif text-3xl font-light text-text-primary uppercase tracking-wider">AA Store Premium</h2>
            <p class="text-text-secondary text-xs md:text-sm">Providing professional digital assets, premium license slots, and AI utility configurations for creators.</p>
        </div>

        <div class="max-w-4xl mx-auto relative border border-border-gold p-1 bg-luxury-bg shadow-[0_0_80px_rgba(200,169,106,0.04)] reveal-scale" data-delay="150">
            <span class="absolute top-[-1px] left-[-1px] w-3 h-3 border-t-2 border-l-2 border-gold-primary pointer-events-none"></span>
            <span class="absolute top-[-1px] right-[-1px] w-3 h-3 border-t-2 border-r-2 border-gold-primary pointer-events-none"></span>
            <span class="absolute bottom-[-1px] left-[-1px] w-3 h-3 border-b-2 border-l-2 border-gold-primary pointer-events-none"></span>
            <span class="absolute bottom-[-1px] right-[-1px] w-3 h-3 border-b-2 border-r-2 border-gold-primary pointer-events-none"></span>

            <div class="relative border border-border-gold/30 bg-surface/50 w-full h-full p-6 sm:p-10 md:p-12 flex flex-col md:flex-row gap-8 items-center justify-between">
                <div class="space-y-4 max-w-xl text-center md:text-left">
                    <span class="inline-flex items-center text-[9px] uppercase tracking-widest text-gold-primary font-bold bg-gold-primary/5 px-2.5 py-1 border border-border-gold/30">
                        <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.952 11.952 0 01-7.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        Verified Reseller Status
                    </span>
                    <h3 class="font-serif text-2xl font-light text-text-primary leading-tight">
                        Ecosystem Storefront &amp; Automated Support
                    </h3>
                    <p class="font-sans text-xs md:text-sm text-text-secondary leading-relaxed">
                        Kami menyediakan pengedaran rasmi lesen perisian komersial, akaun penstriman premium, reka bentuk UX, serta skrip bot tersuai dengan jaminan sokongan pasca-pembelian.
                    </p>
                </div>
                
                <div class="flex flex-col gap-3 w-full md:w-64">
                    <a href="https://t.me/aastorepremium_bot" target="_blank" rel="noopener noreferrer" class="w-full">
                        <button class="btn-sweep-gold w-full inline-flex items-center justify-center px-4 py-3 text-[10px] font-bold uppercase tracking-widest text-black bg-gold-primary hover:bg-gold-light transition-colors duration-300 min-h-[44px] cursor-pointer">
                            Open Telegram Bot
                            <svg class="ml-2 w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        </button>
                    </a>
                    
                    <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20nak%20semak%20stok%20terkini%20AA%20Store%20Premium." target="_blank" rel="noopener noreferrer" class="w-full">
                        <button class="btn-sweep-gold w-full inline-flex items-center justify-center px-4 py-3 text-[10px] font-bold uppercase tracking-widest border border-border-gold/40 hover:border-gold-primary text-text-primary bg-transparent transition-colors duration-300 min-h-[44px] cursor-pointer">
                            Check Stock Catalog
                            <svg class="ml-2 w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="animated-divider"></div>

<!-- Methodology / Work Process Section -->
<section id="process" class="bg-grid-ambient bg-luxury-bg py-20 reveal-fade">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 space-y-12">
        <div class="text-center max-w-xl mx-auto space-y-3">
            <span class="section-label">METHODOLOGY</span>
            <h2 class="font-serif text-3xl font-light text-text-primary uppercase tracking-wider">Work Process</h2>
            <p class="text-text-secondary text-xs md:text-sm">A structured workflow designed to maintain high technical standards and ensure clear, predictable delivery.</p>
        </div>

        <div class="relative max-w-6xl mx-auto px-4">
            <!-- Connector Line -->
            <div class="hidden lg:block absolute top-[44px] left-[10%] right-[10%] h-[1px] bg-gradient-to-r from-transparent via-gold-primary/30 to-transparent z-0 select-none"></div>
            
            <!-- Steps -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 relative z-10">
                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="100">
                    <div class="flex flex-col items-center lg:items-start w-full select-none">
                        <span class="font-serif text-3xl text-gold-primary tracking-widest font-extralight">01</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-gold-primary bg-luxury-bg mt-3"></div>
                    </div>
                    <div class="p-6 bg-surface/80 flex flex-col justify-between min-h-[170px] w-full border border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card">
                        <h3 class="font-serif text-base text-text-primary font-medium mb-2">Discover</h3>
                        <p class="font-sans text-[11px] text-text-secondary leading-relaxed">
                            Mengenal pasti keperluan perniagaan, menganalisis skop pasaran, dan menetapkan rangka tindakan utama.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="200">
                    <div class="flex flex-col items-center lg:items-start w-full select-none">
                        <span class="font-serif text-3xl text-gold-primary tracking-widest font-extralight">02</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-gold-primary bg-luxury-bg mt-3"></div>
                    </div>
                    <div class="p-6 bg-surface/80 flex flex-col justify-between min-h-[170px] w-full border border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card">
                        <h3 class="font-serif text-base text-text-primary font-medium mb-2">Design</h3>
                        <p class="font-sans text-[11px] text-text-secondary leading-relaxed">
                            Mereka bentuk antaramuka visual premium (Figma) berteraskan tipografi mewah dan grid teratur.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="300">
                    <div class="flex flex-col items-center lg:items-start w-full select-none">
                        <span class="font-serif text-3xl text-gold-primary tracking-widest font-extralight">03</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-gold-primary bg-luxury-bg mt-3"></div>
                    </div>
                    <div class="p-6 bg-surface/80 flex flex-col justify-between min-h-[170px] w-full border border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card">
                        <h3 class="font-serif text-base text-text-primary font-medium mb-2">Build</h3>
                        <p class="font-sans text-[11px] text-text-secondary leading-relaxed">
                            Membangunkan kod modular responsif berprestasi tinggi menggunakan Laravel, Blade, dan Tailwind CSS.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="400">
                    <div class="flex flex-col items-center lg:items-start w-full select-none">
                        <span class="font-serif text-3xl text-gold-primary tracking-widest font-extralight">04</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-gold-primary bg-luxury-bg mt-3"></div>
                    </div>
                    <div class="p-6 bg-surface/80 flex flex-col justify-between min-h-[170px] w-full border border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card">
                        <h3 class="font-serif text-base text-text-primary font-medium mb-2">Launch</h3>
                        <p class="font-sans text-[11px] text-text-secondary leading-relaxed">
                            Melaksanakan audit kualiti akhir, integrasi server lokal, dan pelancaran sistem ke staging port portfolio.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="500">
                    <div class="flex flex-col items-center lg:items-start w-full select-none">
                        <span class="font-serif text-3xl text-gold-primary tracking-widest font-extralight">05</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-gold-primary bg-luxury-bg mt-3"></div>
                    </div>
                    <div class="p-6 bg-surface/80 flex flex-col justify-between min-h-[170px] w-full border border-surface-soft hover:border-gold-primary/30 transition-all duration-500 luxury-card">
                        <h3 class="font-serif text-base text-text-primary font-medium mb-2">Improve</h3>
                        <p class="font-sans text-[11px] text-text-secondary leading-relaxed">
                            Memantau kelancaran trafik, mengoptimumkan automasi bot, dan melaraskan sistem mengikut data pengguna.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="animated-divider"></div>

<!-- Vision Timeline Section -->
<section id="vision" class="bg-surface/30 bg-grid-tech py-20 reveal-fade">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-16 space-y-12">
        <div class="text-center max-w-xl mx-auto space-y-3">
            <span class="section-label">HORIZON</span>
            <h2 class="font-serif text-3xl font-light text-text-primary uppercase tracking-wider">Vision Timeline</h2>
            <p class="text-text-secondary text-xs md:text-sm">The strategic roadmap detailing the development and expansion plans for AA Group over the coming years.</p>
        </div>

        <div class="relative max-w-5xl mx-auto px-6">
            <!-- Line Connector -->
            <div class="hidden lg:block absolute top-[44px] left-12 right-12 h-[1px] bg-gradient-to-r from-transparent via-blue-accent/30 to-transparent z-0 select-none"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 relative z-10">
                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="100">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2026</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3 select-none"></div>
                    </div>
                    <div class="p-6 bg-surface/80 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_20px_rgba(47,128,237,0.04)] transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Build AA Store Premium</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Establishing primary cash-flow channels and automated Telegram bot systems to distribute licenses and premium keys.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="200">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2027</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3 select-none"></div>
                    </div>
                    <div class="p-6 bg-surface/80 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_20px_rgba(47,128,237,0.04)] transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Expand Digital Services</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Introducing custom Next.js/Laravel frontend development and specialized automation services for select business clients.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="300">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2028</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3 select-none"></div>
                    </div>
                    <div class="p-6 bg-surface/80 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_20px_rgba(47,128,237,0.04)] transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Build High-Performance Team</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Recruiting highly skilled designers and system developers to handle larger client scales and speed up pipeline production.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 reveal-up" data-delay="400">
                    <div class="flex flex-col items-center lg:items-start select-none">
                        <span class="font-serif text-3xl md:text-4xl text-blue-accent tracking-wider font-light">2029</span>
                        <div class="hidden lg:block w-3.5 h-3.5 rounded-full border border-blue-accent bg-luxury-bg mt-3 select-none"></div>
                    </div>
                    <div class="p-6 bg-surface/80 w-full flex-grow flex flex-col space-y-2 border border-surface-soft hover:border-blue-accent/30 hover:shadow-[0_0_20px_rgba(47,128,237,0.04)] transition-all duration-500 luxury-card">
                        <h4 class="font-serif text-base text-text-primary font-medium">Scale AA Group Ecosystem</h4>
                        <p class="font-sans text-xs text-text-secondary leading-relaxed font-normal">
                            Integrating all products, custom bot scripts, and services into a complete digital ecosystem catering to global operations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="animated-divider"></div>

<!-- Call To Action Section -->
<section class="max-w-5xl mx-auto px-6 py-20 text-center reveal-fade">
    <div class="relative border border-border-gold p-1 bg-luxury-bg shadow-[0_0_80px_rgba(200,169,106,0.06)] reveal-scale" data-delay="150">
        <!-- Corner Brackets -->
        <span class="absolute top-[-1px] left-[-1px] w-3 h-3 border-t-2 border-l-2 border-gold-primary pointer-events-none"></span>
        <span class="absolute top-[-1px] right-[-1px] w-3 h-3 border-t-2 border-r-2 border-gold-primary pointer-events-none"></span>
        <span class="absolute bottom-[-1px] left-[-1px] w-3 h-3 border-b-2 border-l-2 border-gold-primary pointer-events-none"></span>
        <span class="absolute bottom-[-1px] right-[-1px] w-3 h-3 border-b-2 border-r-2 border-gold-primary pointer-events-none"></span>

        <div class="relative border border-border-gold/30 bg-surface/50 w-full h-full p-8 md:p-12">
            <div class="relative z-10 max-w-xl mx-auto space-y-6">
                <span class="section-label">Launch Your Project</span>
                <h3 class="text-2xl md:text-3xl font-black text-white tracking-tight uppercase font-serif">Let's Collaborate on Premium Solutions</h3>
                <p class="text-text-secondary text-xs leading-relaxed">
                    Whether you need a bespoke business site, automated bot scripting, or a customized design template, I can help you architect it.
                </p>
                <div class="pt-4 flex flex-wrap gap-4 justify-center">
                    <a href="https://wa.me/601118715341?text=Hi%20Amir%2C%20saya%20berminat%20dengan%20servis%20AA%20Group." target="_blank" rel="noopener noreferrer" class="btn-sweep-gold inline-flex items-center gap-2 px-5 py-3.5 text-[10px] font-bold uppercase tracking-widest text-black bg-gold-primary hover:bg-gold-light transition-all duration-300">
                        <span>Contact via WhatsApp</span>
                    </a>
                    <a href="{{ url('/contact') }}" class="btn-sweep-gold inline-flex items-center gap-2 px-5 py-3.5 text-[10px] font-bold uppercase tracking-widest text-slate-200 bg-transparent border border-white/10 hover:border-gold-primary/30 hover:bg-gold-primary/5 transition-all duration-300">
                        <span>Email Amir</span>
                    </a>
                </div>
            </div>
            <div class="absolute -right-20 -bottom-20 h-44 w-44 rounded-full bg-gold-primary/5 blur-3xl"></div>
            <div class="absolute -left-20 -top-20 h-44 w-44 rounded-full bg-blue-accent/5 blur-3xl"></div>
        </div>
    </div>
</section>
@endsection
