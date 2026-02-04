<?php
/**
 * Front-page template – ACV Unity & Development homepage.
 * Content is intentionally hardcoded for the showcase layout;
 * editable copy lives in the static HTML version (index.html).
 *
 * @package acv-unity
 */

get_header();
?>

<!-- ═══ HERO ═══ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-deco hero-deco-1"></div>
  <div class="hero-deco hero-deco-2"></div>
  <div class="hero-deco hero-deco-3"></div>
  <div class="hero-content">
    <p class="hero-arabic">انجمن فرهنگی رشد و همبستگی افغان های شهر لایدن</p>
    <h1 class="hero-title">ACV Unity<br>&amp; <em>Development</em></h1>
    <div class="hero-divider"></div>
    <p class="hero-sub">Verbinding &middot; Cultuur &middot; Integratie</p>
    <div class="hero-actions">
      <?php $over = get_page_by_path('over'); ?>
      <a href="<?php echo $over ? esc_url( get_permalink($over->ID) ) : '#'; ?>" class="btn-hero-primary"><?php _e('Ontdek meer','acv-unity'); ?></a>
      <a href="#lid" class="btn-hero-outline"><?php _e('Wordt lid','acv-unity'); ?></a>
    </div>
  </div>
  <div class="hero-scroll">
    <div class="hero-scroll-line"></div>
    <span><?php _e('Scrollen','acv-unity'); ?></span>
  </div>
</section>

<!-- ═══ PILLARS ═══ -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label"><?php _e('Onze missie','acv-unity'); ?></span>
      <h2 class="section-title"><?php _e('Waar we voor staan','acv-unity'); ?></h2>
      <p class="section-subtitle"><?php _e('Drie pijlers die de kern van ons werk vormen voor de Afghan gemeenschap in Leiden.','acv-unity'); ?></p>
    </div>
    <div class="pillars-grid">
      <div class="pillar-card animate-on-scroll">
        <div class="pillar-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="var(--clr-primary-lt)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
        </div>
        <h3><?php _e('Cultuur','acv-unity'); ?></h3>
        <p><?php _e('We bewaren en vieren Afghan tradities door culturele evenementen, ontmoetingsruimtes en de viering van belangrijke feestdagen.','acv-unity'); ?></p>
      </div>
      <div class="pillar-card animate-on-scroll" style="transition-delay:.12s">
        <div class="pillar-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="var(--clr-primary-lt)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-1H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-1h7z"/></svg>
        </div>
        <h3><?php _e('Onderwijs','acv-unity'); ?></h3>
        <p><?php _e('Taalcursussen in Dari en Pashto, Nederlandse taalbegeleiding en culturele educatie voor de jeugd van onze gemeenschap.','acv-unity'); ?></p>
      </div>
      <div class="pillar-card animate-on-scroll" style="transition-delay:.24s">
        <div class="pillar-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="var(--clr-primary-lt)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3><?php _e('Sociale Integratie','acv-unity'); ?></h3>
        <p><?php _e('We helpen Afghan bewoners actief te participeren in de Nederlandse samenleving en te groeien tot zelfverzekerde burgers.','acv-unity'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ STATS ═══ -->
<section class="stats-bar">
  <div class="container">
    <div class="stats-grid">
      <div class="stat animate-on-scroll"><span class="stat-number" data-target="12" data-suffix="+">12+</span><span class="stat-label"><?php _e('Jaar actief','acv-unity'); ?></span></div>
      <div class="stat animate-on-scroll" style="transition-delay:.1s"><span class="stat-number">100%</span><span class="stat-label"><?php _e('Vrijwilligers','acv-unity'); ?></span></div>
      <div class="stat animate-on-scroll" style="transition-delay:.2s"><span class="stat-number" data-target="3" data-suffix="">3</span><span class="stat-label"><?php _e('Talen','acv-unity'); ?></span></div>
      <div class="stat animate-on-scroll" style="transition-delay:.3s"><span class="stat-number">ANBI</span><span class="stat-label"><?php _e('Erkend','acv-unity'); ?></span></div>
    </div>
  </div>
</section>

<!-- ═══ ABOUT PREVIEW ═══ -->
<section class="section">
  <div class="container">
    <div class="about-grid">
      <div class="about-text animate-on-scroll">
        <span class="section-label"><?php _e('Over ons','acv-unity'); ?></span>
        <h2 class="section-title" style="text-align:left"><?php _e('Een gemeenschap,<br>samen opbouwen','acv-unity'); ?></h2>
        <p><?php _e('De Afghaanse Culturele Vereniging Unity & Development is opgericht in 2012 om de Afghan gemeenschap in Leiden te ondersteunen. We zijn een ANBI-erkende vereniging die volledig draait op vrijwilligers.','acv-unity'); ?></p>
        <p><?php _e('Onze organisatie richt zich op het verbinden van Afghan bewoners ongeacht hun etnische achtergrond, taal of herkomst – en championneren wij gezamenlijk belang en rechten.','acv-unity'); ?></p>
        <?php $over = get_page_by_path('over'); ?>
        <a href="<?php echo $over ? esc_url( get_permalink($over->ID) ) : '#'; ?>" class="btn btn-outline"><?php _e('Meer lezen','acv-unity'); ?></a>
      </div>
      <div class="about-visual animate-on-scroll" style="transition-delay:.15s">
        <div class="about-img-wrap">
          <svg viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.35)" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
        </div>
        <div class="about-badge"><span class="about-badge-year">2012</span><span class="about-badge-text"><?php _e('Opgericht','acv-unity'); ?></span></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ 10 REASONS ═══ -->
<section class="section reasons-section" id="lid">
  <div class="container">
    <div class="section-header">
      <span class="section-label"><?php _e('Lidmaatschap','acv-unity'); ?></span>
      <h2 class="section-title"><?php _e('10 redenen om lid te worden','acv-unity'); ?></h2>
      <p class="section-subtitle"><?php _e('Ontdek waarom Afghan inwoners van Leiden deel uitmaken van onze gemeenschap.','acv-unity'); ?></p>
    </div>
    <div class="reasons-grid">
      <?php
      $reasons = array(
          __('U zich nuttig kunt maken in de maatschappij','acv-unity'),
          __('Er een ontmoetingsruimte beschikbaar is','acv-unity'),
          __('Er voor rouwdienst ruimte beschikbaar is','acv-unity'),
          __('Uw kinderen onderwijs in Nederlandse taal en wiskunde genieten','acv-unity'),
          __('Uw kinderen van hun moedertaal kunnen genieten','acv-unity'),
          __('Uw kinderen bekend raken met de topografie en geschiedenis van Afghanistan','acv-unity'),
          __('U een gezonde ontmoetingsruimte kunt hebben','acv-unity'),
          __('U kunt bijdragen aan de samenleving door eenheid en ontwikkeling','acv-unity'),
          __('U zelfverzekerde en trots kinderen kunt voortbrengen in de maatschappij','acv-unity'),
          __('U kunt zichzelf zijn en meedoen aan emancipatie en participatie','acv-unity'),
      );
      foreach ( $reasons as $i => $reason ) {
          $delay = $i * 0.06;
      ?>
      <div class="reason-item animate-on-scroll" style="transition-delay:<?php echo $delay; ?>s">
        <div class="reason-header">
          <div class="reason-num"><?php echo $i + 1; ?></div>
          <span class="reason-text"><?php echo esc_html( $reason ); ?></span>
        </div>
      </div>
      <?php } ?>
    </div>
    <div style="text-align:center;margin-top:48px">
      <?php $contact = get_page_by_path('contact'); ?>
      <a href="<?php echo $contact ? esc_url( get_permalink($contact->ID) ) : '#'; ?>" class="btn btn-primary"><?php _e('Wordt lid','acv-unity'); ?></a>
    </div>
  </div>
</section>

<!-- ═══ BOARD PREVIEW ═══ -->
<section class="section" style="background:var(--clr-bg-alt)">
  <div class="container">
    <div class="section-header">
      <span class="section-label"><?php _e('Bestuur','acv-unity'); ?></span>
      <h2 class="section-title"><?php _e('Onze leiders','acv-unity'); ?></h2>
      <p class="section-subtitle"><?php _e('Alle werkzaamheden bij ACV worden uitgevoerd door vrijwilligers.','acv-unity'); ?></p>
    </div>
    <div class="board-grid">
      <?php
      $board = array(
          array('name'=>'Masoud Niazi',        'role'=>__('Voorzitter','acv-unity')),
          array('name'=>'Sher Majdod',         'role'=>__('Penningmeester','acv-unity')),
          array('name'=>'Ahmadneda Ghafooryan','role'=>__('Secretaris','acv-unity')),
      );
      foreach ( $board as $idx => $member ) {
          $delay = $idx * 0.12;
      ?>
      <div class="board-card animate-on-scroll" style="transition-delay:<?php echo $delay; ?>s">
        <div class="board-photo"><div class="board-avatar"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="8" r="4"/></svg></div></div>
        <div class="board-info"><h3><?php echo esc_html($member['name']); ?></h3><span class="board-role"><?php echo esc_html($member['role']); ?></span></div>
      </div>
      <?php } ?>
    </div>
    <div style="text-align:center;margin-top:44px">
      <?php $bestuur = get_page_by_path('bestuur'); ?>
      <a href="<?php echo $bestuur ? esc_url( get_permalink($bestuur->ID) ) : '#'; ?>" class="btn btn-outline"><?php _e('Volledig bestuur','acv-unity'); ?></a>
    </div>
  </div>
</section>

<!-- ═══ GALLERY PREVIEW ═══ -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-label"><?php _e('Galerij','acv-unity'); ?></span>
      <h2 class="section-title"><?php _e('Momenten uit onze gemeenschap','acv-unity'); ?></h2>
    </div>
    <div class="gallery-grid">
      <?php
      $gallery = array(
          array('label'=>__('Eid al-Fitr 2023','acv-unity'),    'grad'=>'#d97706,#f59e0b'),
          array('label'=>__('World Cleanup Day','acv-unity'),    'grad'=>'#16a34a,#4ade80'),
          array('label'=>__('Volleybal Toernooi','acv-unity'),   'grad'=>'#2563eb,#60a5fa'),
          array('label'=>__('Jongeren Programma','acv-unity'),   'grad'=>'#7c3aed,#a78bfa'),
          array('label'=>__('Nowruz Viering','acv-unity'),       'grad'=>'#dc2626,#fb7185'),
          array('label'=>__('Nederlandse Taalles','acv-unity'),  'grad'=>'#0891b2,#67e8f9'),
          array('label'=>__('Gemeenschap Avond','acv-unity'),    'grad'=>'#4f46e5,#818cf8'),
          array('label'=>__('Vrijwilliger Dag','acv-unity'),     'grad'=>'#059669,#34d399'),
      );
      foreach ( $gallery as $i => $item ) {
          $delay = $i * 0.08;
      ?>
      <div class="gallery-item animate-on-scroll" style="transition-delay:<?php echo $delay; ?>s">
        <div class="gallery-placeholder" style="background:linear-gradient(145deg,<?php echo esc_attr($item['grad']); ?>)"></div>
        <div class="gallery-overlay"><span class="gallery-label"><?php echo esc_html($item['label']); ?></span></div>
      </div>
      <?php } ?>
    </div>
    <div style="text-align:center;margin-top:44px">
      <?php $galerij = get_page_by_path('galerij'); ?>
      <a href="<?php echo $galerij ? esc_url( get_permalink($galerij->ID) ) : '#'; ?>" class="btn btn-outline"><?php _e('Bekijk galerij','acv-unity'); ?></a>
    </div>
  </div>
</section>

<!-- ═══ CTA BANNER ═══ -->
<div class="cta-wrap">
  <div class="container">
    <div class="cta-banner">
      <h2><?php _e('Sluit aan bij onze gemeenschap','acv-unity'); ?></h2>
      <p><?php _e('Wordt lid van ACV Unity &amp; Development en draag bij aan de verbinding, cultuur en integratie van Afghan bewoners in Leiden.','acv-unity'); ?></p>
      <?php $contact = get_page_by_path('contact'); ?>
      <a href="<?php echo $contact ? esc_url( get_permalink($contact->ID) ) : '#'; ?>" class="btn-cta"><?php _e('Neem contact op','acv-unity'); ?></a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
