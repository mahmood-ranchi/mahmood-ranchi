<?php

declare(strict_types=1);

$site = require __DIR__ . '/../config/site.php';
$navigation = require __DIR__ . '/../data/navigation.php';
require __DIR__ . '/../includes/helpers.php';

$pageTitle = 'About | ' . $site['short_name'];
$pageDescription = 'Learn about Pankhi Defense Private Limited, our mission, vision, engineering approach, project experience and commitment to quality.';
$activePage = 'about';
$pageStylesheet = 'assets/css/about.css';

require __DIR__ . '/../includes/layout/header.php';
?>

<section class="about-hero command-grid" aria-labelledby="about-hero-title">
    <div class="about-hero__glow" aria-hidden="true"></div>
    <div class="container-wide about-hero__inner">
        <div class="about-hero__copy flow">
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <a href="<?= escape(site_path()) ?>">Home</a><span aria-hidden="true">/</span><span aria-current="page">About</span>
            </nav>
            <span class="status-label">About Pankhi Defense</span>
            <h1 id="about-hero-title">Technology engineered <span>for the mission.</span></h1>
            <p class="lede">Integrated defence technology—from requirement analysis to operational deployment.</p>
        </div>
        <div class="about-hero__visual" aria-hidden="true">
            <svg class="mission-map" viewBox="0 0 620 460" role="img" aria-label="Tactical mission map showing linked operational points">
                <path class="mission-map__terrain" d="M20 315L102 276 163 295 230 220 287 241 343 156 423 186 470 115 599 76M38 382L132 346 214 371 312 302 392 330 464 267 588 292"/>
                <path class="mission-map__route" d="M87 332L183 267 294 286 389 204 514 139"/>
                <circle class="mission-map__range" cx="294" cy="286" r="130"/>
                <circle class="mission-map__range mission-map__range--inner" cx="294" cy="286" r="72"/>
                <g class="mission-map__point"><circle cx="87" cy="332" r="8"/><text x="102" y="326">BASE / 01</text></g>
                <g class="mission-map__point"><circle cx="183" cy="267" r="8"/><text x="198" y="261">LINK / 02</text></g>
                <g class="mission-map__point mission-map__point--active"><circle cx="294" cy="286" r="11"/><text x="310" y="280">MISSION / 03</text></g>
                <g class="mission-map__point"><circle cx="389" cy="204" r="8"/><text x="404" y="198">RELAY / 04</text></g>
                <g class="mission-map__point"><circle cx="514" cy="139" r="8"/><text x="529" y="133">OBJECTIVE</text></g>
            </svg>
            <div class="mission-map__coordinates">26.8467° N&nbsp;&nbsp;80.9462° E</div>
            <div class="about-hero__readout">
                <span>Primary objective</span>
                <strong>Capability ready</strong>
            </div>
        </div>
    </div>
    <div class="container-wide about-hero__principles" aria-label="Company principles">
        <span>Understand</span><i></i><span>Engineer</span><i></i><span>Integrate</span><i></i><span>Deliver</span>
    </div>
</section>

<style>
    /* Equal 6/6 director columns. These rules override about.css so replacing this page is enough. */
    .directors.section {
        padding-block: clamp(2.25rem, 4vw, 3.5rem);
    }

    .directors .directors__heading {
        margin-bottom: clamp(1.25rem, 2.2vw, 2rem);
    }

    .directors .directors__grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: clamp(1rem, 1.6vw, 1.5rem);
        align-items: stretch;
    }

    .directors .director-card,
    .directors .director-card.director-card--reverse {
        display: grid;
        grid-template-columns: 13.5rem minmax(0, 1fr);
        min-height: 0;
        min-width: 0;
        height: auto;
    }

    .directors .director-card--reverse .director-card__portrait {
        order: 0;
    }

    .directors .director-card__portrait {
        min-height: 14.5rem;
        height: auto;
        overflow: hidden;
    }

    .directors .director-card__portrait img {
        inset: 0;
        max-width: none;
        object-position: center 22%;
    }

    .directors .director-card__content {
        min-width: 0;
        padding: clamp(1rem, 1.6vw, 1.35rem) clamp(1rem, 1.8vw, 1.5rem);
    }

    .directors .director-card blockquote {
        font-size: var(--font-size-sm);
        line-height: 1.6;
        margin-top: var(--space-4);
        padding-left: var(--space-4);
    }

    .directors .director-card footer {
        padding-top: var(--space-4);
    }

    @media (max-width: 74.99rem) {
        .directors .director-card,
        .directors .director-card.director-card--reverse {
            grid-template-columns: 1fr;
            grid-template-rows: auto minmax(0, 1fr);
        }

        .directors .director-card__portrait {
            aspect-ratio: 16 / 10;
            min-height: 0;
        }
    }

    @media (max-width: 47.99rem) {
        .directors .directors__grid {
            grid-template-columns: 1fr;
        }

        .directors .director-card__portrait {
            aspect-ratio: 16 / 9;
        }
    }
</style>

<section class="directors section" aria-labelledby="directors-title">
    <div class="container-wide">
        <div class="section-heading directors__heading">
            <div class="flow">
                <span class="eyebrow">Leadership perspective</span>
                <h2 id="directors-title">Messages from our directors.</h2>
            </div>
            <p class="lede">Mission-ready technology, indigenous capability and dependable long-term partnerships.</p>
        </div>
        <div class="directors__grid">
            <article class="director-card">
                <div class="director-card__portrait"><img src="<?= escape(site_path('assets/images/directors/Gaurav_Singh.webp')) ?>" alt="Gaurav Singh, Director of Pankhi Defense Private Limited" width="526" height="480"></div>
                <div class="director-card__content">
                    <span class="director-card__label">Director&rsquo;s message</span>
                    <blockquote>
                        <p>We connect emerging technology with the operational needs of India&rsquo;s defence forces. Pankhi Defense delivers secure, mission-focused capability across defence IT, drones, simulation, AR/VR, cyber security and training, in support of Aatmanirbhar Defence.</p>
                    </blockquote>
                    <footer><strong>Gaurav Singh</strong><span>Director, Pankhi Defense Private Limited</span></footer>
                </div>
            </article>
            <article class="director-card">
                <div class="director-card__portrait"><img src="<?= escape(site_path('assets/images/directors/Anju_Singh.webp')) ?>" alt="Anju Singh, Director of Pankhi Defense Private Limited" width="385" height="385"></div>
                <div class="director-card__content">
                    <span class="director-card__label">Director&rsquo;s message</span>
                    <blockquote>
                        <p>We contribute to India&rsquo;s defence preparedness with practical, indigenous solutions. Working with defence establishments, we turn technology into secure, scalable capability and aim to be a trusted partner on the path to self-reliance.</p>
                    </blockquote>
                    <footer><strong>Anju Singh</strong><span>Director, Pankhi Defense Private Limited</span></footer>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="about-intro section" aria-labelledby="about-intro-title">
    <div class="container-wide about-intro__grid">
        <div class="flow">
            <span class="eyebrow">Who we are</span>
            <h2 id="about-intro-title">One partner. Integrated capability.</h2>
        </div>
        <div class="about-intro__copy flow">
            <p>Pankhi Defense designs, integrates, deploys and supports technology solutions for India&rsquo;s defence forces and strategic government organisations.</p>
            <div class="about-intro__tags"><span>Secure infrastructure</span><span>Training systems</span><span>Simulation</span><span>Unmanned technology</span></div>
        </div>
    </div>
</section>

<section class="purpose section" aria-labelledby="purpose-title">
    <div class="container-wide">
        <span class="eyebrow">Purpose and direction</span>
        <h2 class="visually-hidden" id="purpose-title">Our mission and vision</h2>
        <div class="purpose__grid">
            <article class="purpose-card">
                <span>01 / Mission</span>
                <div class="purpose-card__icon" aria-hidden="true">◎</div>
                <h3>Strengthen capability.</h3>
                <p>Reliable, secure and innovative technology for operational and training environments.</p>
            </article>
            <article class="purpose-card purpose-card--vision">
                <span>02 / Vision</span>
                <div class="purpose-card__icon" aria-hidden="true">◇</div>
                <h3>Earn lasting trust.</h3>
                <p>An Indian technology partner for integrated, mission-relevant solutions.</p>
            </article>
        </div>
    </div>
</section>

<section class="engineering-path section" aria-labelledby="engineering-path-title">
    <div class="container-wide">
        <div class="section-heading">
            <div class="flow">
                <span class="eyebrow">Our engineering approach</span>
                <h2 id="engineering-path-title">From requirement to operational capability.</h2>
            </div>
            <p class="lede">A disciplined delivery path keeps technology selection connected to the mission, the environment and the people who will operate it.</p>
        </div>
        <ol class="engineering-path__rail">
            <?php
            $steps = [
                ['Understand', 'Analyse the requirement, users, environment and operational objective.'],
                ['Design', 'Define the architecture, specifications and implementation path.'],
                ['Integrate', 'Bring infrastructure, platforms, software and equipment together.'],
                ['Deploy', 'Install, configure, test and commission the complete environment.'],
                ['Train', 'Enable users and administrators through structured knowledge transfer.'],
                ['Support', 'Maintain continuity through documentation and post-deployment support.'],
            ];
            foreach ($steps as $index => [$title, $description]):
            ?>
                <li>
                    <span><?= ['⌖','△','⬡','⇣','◈','∞'][$index] ?> <?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= escape($title) ?></h3>
                    <p><?= escape($description) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="experience section" aria-labelledby="experience-title">
    <div class="container-wide experience__grid">
        <div class="experience__copy flow">
            <span class="eyebrow">Project experience</span>
            <h2 id="experience-title">Technology delivery across specialised environments.</h2>
            <p class="lede">Our experience spans secure digital infrastructure, training facilities and technology-enabled operational environments.</p>
            <a class="button button--secondary" href="<?= escape(site_path('pages/projects.php')) ?>">Explore Projects <span aria-hidden="true">→</span></a>
        </div>
        <div class="experience__matrix" aria-label="Project experience areas">
            <span>Defence IT infrastructure</span>
            <span>Computer training labs</span>
            <span>Drone training and UAV R&amp;D labs</span>
            <span>AR/VR and simulation centres</span>
            <span>Campus networks and data centres</span>
            <span>Cybersecurity infrastructure</span>
            <span>Digital training platforms</span>
            <span>Custom software and TMS</span>
        </div>
    </div>
</section>

<section class="quality section" aria-labelledby="quality-title">
    <div class="container-wide quality__grid">
        <div class="quality__console" aria-hidden="true">
            <div><span>DOCUMENTATION MATRIX</span><strong>CONTROLLED</strong></div>
            <ul>
                <li>technical.compliance <b>READY</b></li>
                <li>testing.commissioning <b>VERIFIED</b></li>
                <li>user.training <b>RECORDED</b></li>
                <li>project.handover <b>COMPLETE</b></li>
            </ul>
        </div>
        <div class="quality__copy flow">
            <span class="eyebrow">Quality and compliance</span>
            <h2 id="quality-title">Documented delivery. Verifiable handover.</h2>
            <p>Project documentation is aligned with applicable RFPs, tenders, technical specifications and customer requirements.</p>
            <ul class="quality__list">
                <li>Technical compliance and OEM documentation</li>
                <li>Product datasheets and warranty records</li>
                <li>Installation, testing and commissioning reports</li>
                <li>Training certificates and user manuals</li>
                <li>Project handover and maintenance documentation</li>
            </ul>
        </div>
    </div>
</section>

<section class="company-identity section" aria-labelledby="company-identity-title">
    <div class="container-wide">
        <div class="section-heading">
            <div class="flow">
                <span class="eyebrow">Company identity</span>
                <h2 id="company-identity-title">Established in India. Engineered for India&rsquo;s security.</h2>
            </div>
            <p class="lede">Corporate details presented from the Ministry of Corporate Affairs Certificate of Incorporation.</p>
        </div>
        <dl class="company-identity__grid">
            <div><dt>Legal name</dt><dd>Pankhi Defense Private Limited</dd></div>
            <div><dt>Incorporated</dt><dd>29 July 2026</dd></div>
            <div><dt>Corporate Identity Number</dt><dd>U62011UP2026PTC250760</dd></div>
            <div><dt>Registered office</dt><dd>Lucknow, Uttar Pradesh, India</dd></div>
        </dl>
    </div>
</section>

<section class="about-cta" aria-labelledby="about-cta-title">
    <div class="container-wide">
        <div class="about-cta__panel command-grid">
            <div class="flow">
                <span class="eyebrow">Your requirement. Our engineering.</span>
                <h2 id="about-cta-title">Build the capability around the mission.</h2>
                <p class="lede">From a focused technology requirement to a complete turnkey environment, let&rsquo;s define the right solution together.</p>
            </div>
            <a class="button button--primary" href="<?= escape(site_path('pages/contact.php')) ?>">Discuss a Requirement <span aria-hidden="true">→</span></a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/layout/footer.php'; ?>
