<?php
// Header configuration
$site = [
    'phone'      => '+91 960 700 1170',
    'login_url'  => '/login',
];

// Each menu opens a horizontal mega menu of service cards
$menu = [
    'WordPress' => [
        ['icon' => 'wordpress', 'label' => 'WordPress Hosting',   'desc' => 'Fast, secure hosting optimised for WordPress sites.',  'url' => '/wordpress-hosting'],
        ['icon' => 'rocket',    'label' => 'Managed WordPress',   'desc' => 'We handle updates, backups and security for you.',    'url' => '/managed-wordpress'],
        ['icon' => 'cart',      'label' => 'WooCommerce Hosting', 'desc' => 'Power your online store with optimised performance.', 'url' => '/woocommerce-hosting'],
    ],
    'Domain & Hosting' => [
        ['icon' => 'globe',     'label' => 'Domain Registration', 'desc' => 'Find and register the perfect domain name.',          'url' => '/domains'],
        ['icon' => 'transfer',  'label' => 'Domain Transfer',     'desc' => 'Move your domain to us easily with free extras.',     'url' => '/domain-transfer'],
        ['icon' => 'server',    'label' => 'Shared Hosting',      'desc' => 'Affordable hosting for blogs and small businesses.',  'url' => '/shared-hosting'],
        ['icon' => 'users',     'label' => 'Reseller Hosting',    'desc' => 'Start your own hosting business with WHM/cPanel.',   'url' => '/reseller-hosting'],
    ],
    'VPS & Dedicated' => [
        ['icon' => 'cpu',       'label' => 'VPS Hosting',         'desc' => 'Dedicated resources with full root access.',          'url' => '/vps-hosting'],
        ['icon' => 'cloud',     'label' => 'Cloud VPS',           'desc' => 'Scalable cloud servers on SSD infrastructure.',       'url' => '/cloud-vps'],
        ['icon' => 'database',  'label' => 'Dedicated Servers',   'desc' => 'Bare-metal servers for maximum performance.',         'url' => '/dedicated-servers'],
    ],
    'WebSuite' => [
        ['icon' => 'mail',      'label' => 'Business Email',      'desc' => 'Professional email on your own domain.',              'url' => '/business-email'],
        ['icon' => 'lock',      'label' => 'SSL Certificates',    'desc' => 'Secure your website and boost customer trust.',       'url' => '/ssl'],
        ['icon' => 'layout',    'label' => 'Website Builder',     'desc' => 'Build a website in minutes with drag & drop.',        'url' => '/website-builder'],
    ],
];

// Inline SVG icon paths (24x24, stroke-based)
$icons = [
    'wordpress' => '<circle cx="12" cy="12" r="9"/><path d="M5 8l4 11 3-8 3 8 4-11M4 8h4M14 8h4"/>',
    'rocket'    => '<path d="M5 15c-1.5 1.5-2 5-2 5s3.5-.5 5-2M14 4c3-1 6-1 6-1s0 3-1 6l-7 7-5-5 7-7z"/><circle cx="15" cy="9" r="1.5"/>',
    'cart'      => '<circle cx="9" cy="20" r="1.5"/><circle cx="18" cy="20" r="1.5"/><path d="M2 3h3l2.5 12h11.5l2-8H6.2"/>',
    'globe'     => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9S9.5 5.5 12 3z"/>',
    'transfer'  => '<path d="M4 8h14l-4-4M20 16H6l4 4"/>',
    'server'    => '<rect x="3" y="4" width="18" height="7" rx="2"/><rect x="3" y="13" width="18" height="7" rx="2"/><path d="M7 7.5h.01M7 16.5h.01"/>',
    'users'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6M16 4.5a3.5 3.5 0 0 1 0 7M18 14c2.4.6 4 2.8 4 6"/>',
    'cpu'       => '<rect x="6" y="6" width="12" height="12" rx="2"/><rect x="9.5" y="9.5" width="5" height="5"/><path d="M9 2v4M15 2v4M9 18v4M15 18v4M2 9h4M2 15h4M18 9h4M18 15h4"/>',
    'cloud'     => '<path d="M7 18a5 5 0 0 1-.5-10A6 6 0 0 1 18 9a4.5 4.5 0 0 1-.5 9H7z"/>',
    'database'  => '<ellipse cx="12" cy="5.5" rx="8" ry="3"/><path d="M4 5.5v13c0 1.7 3.6 3 8 3s8-1.3 8-3v-13M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/>',
    'mail'      => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
    'lock'      => '<rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3M12 14.5v2.5"/>',
    'layout'    => '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M9 9v11"/>',
];

$phoneHref = 'tel:' . preg_replace('/[^0-9+]/', '', $site['phone']);
?>
<header class="hc-header" id="hcHeader">
    <div class="hc-container">
        <a href="/" class="hc-logo" aria-label="host.co.in home">
            <span class="hc-logo__text">host.<span class="hc-logo__co">co<svg class="hc-logo__swoosh" viewBox="0 0 40 12" aria-hidden="true"><path d="M2 3 C 10 13, 28 13, 38 2" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/></svg></span>.in</span>
        </a>

        <nav class="hc-nav" id="hcNav" aria-label="Main navigation">
            <ul class="hc-menu">
                <?php foreach ($menu as $title => $items): ?>
                <li class="hc-menu__item hc-has-dropdown">
                    <button type="button" class="hc-menu__link" aria-expanded="false">
                        <?= htmlspecialchars($title) ?>
                        <svg class="hc-caret" viewBox="0 0 10 6" aria-hidden="true"><path d="M1 1l4 4 4-4" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <div class="hc-mega">
                        <ul class="hc-mega__grid">
                            <?php foreach ($items as $item): ?>
                            <li>
                                <a href="<?= htmlspecialchars($item['url']) ?>" class="hc-service">
                                    <span class="hc-service__icon">
                                        <svg viewBox="0 0 24 24" aria-hidden="true"><?= $icons[$item['icon']] ?? '' ?></svg>
                                    </span>
                                    <span class="hc-service__body">
                                        <span class="hc-service__title"><?= htmlspecialchars($item['label']) ?></span>
                                        <span class="hc-service__desc"><?= htmlspecialchars($item['desc']) ?></span>
                                    </span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
                <?php endforeach; ?>
                <li class="hc-menu__item">
                    <a href="<?= $phoneHref ?>" class="hc-menu__link hc-phone">
                        <svg class="hc-phone__icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1A17 17 0 0 1 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1z"/><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M15 3.5a6 6 0 0 1 5.5 5.5M15 7a2.5 2.5 0 0 1 2 2"/></svg>
                        <?= htmlspecialchars($site['phone']) ?>
                    </a>
                </li>
            </ul>
            <a href="<?= htmlspecialchars($site['login_url']) ?>" class="hc-btn hc-btn--mobile">Login</a>
        </nav>

        <a href="<?= htmlspecialchars($site['login_url']) ?>" class="hc-btn hc-btn--desktop">Login</a>

        <button type="button" class="hc-burger" id="hcBurger" aria-label="Open menu" aria-expanded="false" aria-controls="hcNav">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
