@extends('layouts.portfolio')

@section('title', __('site.nav.contact'))

@section('content')
<section class="max-w-5xl mx-auto px-6 py-28 text-center space-y-12 reveal-fade">
    <!-- Header Block -->
    <div>
        <!-- Label -->
        <span class="section-label mb-6 font-bold">
            {{ __('site.contact_page.label') }}
        </span>
        
        <!-- Title -->
        <h1 class="font-serif text-4xl sm:text-5xl font-light text-text-primary uppercase tracking-widest leading-none">
            {!! __('site.contact_page.title') !!}
        </h1>
        
        <p class="mt-6 text-text-secondary leading-relaxed text-xs sm:text-sm max-w-xl mx-auto font-sans">
            {{ __('site.contact_page.desc') }}
        </p>
    </div>

    <!-- Communication CTAs -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 max-w-5xl mx-auto text-left pt-4 items-stretch">
        
        <!-- Left Column: Direct channels and text -->
        <div class="lg:col-span-5 flex flex-col justify-between space-y-6 reveal-left" data-delay="100">
            <div class="space-y-4">
                <span class="text-[10px] uppercase tracking-[0.25em] text-gold-primary font-bold font-sans">{{ __('site.contact_page.channels') }}</span>
                <h3 class="font-serif text-3xl font-light text-text-primary leading-tight">
                    {{ __('site.contact_page.headline') }}
                </h3>
                <p class="font-sans text-xs sm:text-sm text-text-secondary leading-relaxed font-normal">
                    {{ __('site.contact_page.desc_channels') }}
                </p>
            </div>
            
            <div class="space-y-4 pt-6 border-t border-surface-soft/60">
                <div class="flex items-center space-x-3 text-xs text-text-secondary font-sans hover:text-text-primary transition-colors">
                    <svg class="w-4 h-4 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <a href="mailto:aagroupholding@gmail.com" class="font-medium">aagroupholding@gmail.com</a>
                </div>
                <div class="flex items-center space-x-3 text-xs text-text-secondary font-sans select-none">
                    <svg class="w-4 h-4 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>{{ __('site.contact_page.address') }}</span>
                </div>
            </div>
        </div>

        <!-- Right Column: Interactive Inquiry Path Block -->
        <div class="lg:col-span-7 flex reveal-right" data-delay="250">
            <div class="w-full relative border border-border-gold p-1 bg-luxury-bg shadow-[0_0_60px_rgba(200,169,106,0.04)]">
                <span class="absolute top-[-1px] left-[-1px] w-3 h-3 border-t-2 border-l-2 border-gold-primary pointer-events-none"></span>
                <span class="absolute top-[-1px] right-[-1px] w-3 h-3 border-t-2 border-r-2 border-gold-primary pointer-events-none"></span>
                <span class="absolute bottom-[-1px] left-[-1px] w-3 h-3 border-b-2 border-l-2 border-gold-primary pointer-events-none"></span>
                <span class="absolute bottom-[-1px] right-[-1px] w-3 h-3 border-b-2 border-r-2 border-gold-primary pointer-events-none"></span>

                <div class="relative border border-border-gold/30 bg-surface/50 w-full h-full p-6 sm:p-8 space-y-6 flex flex-col justify-between luxury-card">
                    <div class="space-y-4">
                        <h4 class="font-serif text-lg font-light text-text-primary flex items-center gap-2">
                            <svg class="w-4 h-4 text-gold-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.3-6.3l-.7.7M6.7 17.3l-.7.7m12.6 0l-.7-.7M6.7 6.7l-.7-.7M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
                            {{ __('site.contact_page.select_category') }}
                        </h4>
                        
                        <!-- Inquiry Pills Selector -->
                        <div class="flex flex-wrap gap-2 pt-2" id="inquiry-selector">
                            <button data-type="general" data-desc="{{ __('site.contact_page.categories.general_desc') }}" data-msg="{{ __('site.contact_page.categories.general_msg') }}" class="inquiry-btn px-3 py-2 text-[9px] uppercase tracking-widest font-semibold border transition-all duration-300 bg-gold-primary/10 border-gold-primary text-gold-primary cursor-pointer">
                                {{ __('site.contact_page.categories.general') }}
                            </button>
                            <button data-type="website" data-desc="{{ __('site.contact_page.categories.web_desc') }}" class="inquiry-btn px-3 py-2 text-[9px] uppercase tracking-widest font-semibold border transition-all duration-300 bg-surface/50 border-surface-soft text-text-secondary hover:text-text-primary hover:border-gold-primary/30 cursor-pointer" data-msg="{{ __('site.contact_page.categories.web_msg') }}">
                                {{ __('site.contact_page.categories.web') }}
                            </button>
                            <button data-type="design" data-desc="{{ __('site.contact_page.categories.design_desc') }}" class="inquiry-btn px-3 py-2 text-[9px] uppercase tracking-widest font-semibold border transition-all duration-300 bg-surface/50 border-surface-soft text-text-secondary hover:text-text-primary hover:border-gold-primary/30 cursor-pointer" data-msg="{{ __('site.contact_page.categories.design_msg') }}">
                                {!! __('site.contact_page.categories.design') !!}
                            </button>
                            <button data-type="ai" data-desc="{{ __('site.contact_page.categories.ai_desc') }}" class="inquiry-btn px-3 py-2 text-[9px] uppercase tracking-widest font-semibold border transition-all duration-300 bg-surface/50 border-surface-soft text-text-secondary hover:text-text-primary hover:border-gold-primary/30 cursor-pointer" data-msg="{{ __('site.contact_page.categories.ai_msg') }}">
                                {{ __('site.contact_page.categories.ai') }}
                            </button>
                            <button data-type="collaboration" data-desc="{{ __('site.contact_page.categories.collaboration_desc') }}" class="inquiry-btn px-3 py-2 text-[9px] uppercase tracking-widest font-semibold border transition-all duration-300 bg-surface/50 border-surface-soft text-text-secondary hover:text-text-primary hover:border-gold-primary/30 cursor-pointer" data-msg="{{ __('site.contact_page.categories.collaboration_msg') }}">
                                {{ __('site.contact_page.categories.collaboration') }}
                            </button>
                        </div>

                        <!-- Dynamic Description of Selected Inquiry -->
                        <p class="font-sans text-[11px] text-text-secondary italic min-h-[16px] pt-1" id="inquiry-desc">
                            * {{ __('site.contact_page.categories.general_desc') }}
                        </p>
                    </div>

                    <div class="space-y-4 pt-6 border-t border-surface-soft/60">
                        <!-- Main Redirect WhatsApp CTA -->
                        <a id="whatsapp-link" href="https://wa.me/601118715341?text={{ rawurlencode(__('site.contact_page.categories.general_msg')) }}" target="_blank" rel="noopener noreferrer" class="block w-full">
                            <button class="btn-sweep-gold w-full inline-flex items-center justify-center py-4 text-[10px] tracking-widest font-bold uppercase text-black bg-gold-primary hover:bg-gold-light transition-all duration-300 min-h-[50px] cursor-pointer">
                                <svg class="mr-2.5 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                {{ __('site.buttons.send_whatsapp') }}
                            </button>
                        </a>

                        <div class="flex justify-between items-center text-[8px] uppercase tracking-widest text-text-secondary/60 pt-2 select-none font-mono">
                            <span>Direct response via Wa.me</span>
                            <span class="flex items-center text-blue-accent font-bold">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                ONLINE SYSTEM
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Social Links -->
    <div class="border-t border-surface-soft/60 pt-12 max-w-xl mx-auto space-y-4 reveal-scale" data-delay="200">
        <h4 class="text-[10px] font-bold uppercase tracking-widest text-text-secondary select-none font-mono">// Find Us Online</h4>
        <div class="flex justify-center gap-6">
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="text-[10px] font-bold uppercase tracking-widest text-text-secondary hover:text-gold-primary transition-colors">GitHub</a>
            <span class="text-surface-soft font-mono text-xs">&bull;</span>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="text-[10px] font-bold uppercase tracking-widest text-text-secondary hover:text-gold-primary transition-colors">LinkedIn</a>
            <span class="text-surface-soft font-mono text-xs">&bull;</span>
            <a href="https://www.tiktok.com/@aagrupholding?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer" class="text-[10px] font-bold uppercase tracking-widest text-text-secondary hover:text-gold-primary transition-colors">TikTok</a>
        </div>
    </div>
</section>

<!-- Script to handle dynamic inquiry selectors -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.inquiry-btn');
        const descText = document.getElementById('inquiry-desc');
        const waLink = document.getElementById('whatsapp-link');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Deactivate all
                buttons.forEach(b => {
                    b.classList.remove('bg-gold-primary/10', 'border-gold-primary', 'text-gold-primary');
                    b.classList.add('bg-surface/50', 'border-surface-soft', 'text-text-secondary', 'hover:text-text-primary', 'hover:border-gold-primary/30');
                });

                // Activate clicked
                btn.classList.remove('bg-surface/50', 'border-surface-soft', 'text-text-secondary', 'hover:text-text-primary', 'hover:border-gold-primary/30');
                btn.classList.add('bg-gold-primary/10', 'border-gold-primary', 'text-gold-primary');

                // Update text & link
                const desc = btn.getAttribute('data-desc');
                const msg = btn.getAttribute('data-msg');
                
                descText.textContent = '* ' + desc;
                
                const encodedMsg = encodeURIComponent(msg);
                waLink.setAttribute('href', `https://wa.me/601118715341?text=${encodedMsg}`);
            });
        });
    });
</script>
@endsection
