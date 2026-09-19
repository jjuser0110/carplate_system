<!DOCTYPE html>
<html lang="en" id="htmlRoot">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Plate For Sale Malaysia | {{ config('app.name') }} – Buy &amp; Sell 车牌</title>
<meta name="description" content="Search car plate / carplate number for sale in Malaysia — VIP, repeating digit &amp; lucky plate no. 车牌买卖，直接联系车主. Buy &amp; sell direct owner, WhatsApp us now.">
<meta name="keywords" content="car plate, carplate, car plate malaysia, number plate, plate no, vip car plate, 车牌, 车牌买卖, 马来西亚车牌, plat nombor, plat nombor malaysia">
<meta name="robots" content="index, follow">
<meta name="author" content="{{ config('app.name') }}">

<link rel="canonical" href="{{ url('/') }}">

<!-- Open Graph (Facebook / WhatsApp link previews) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="Car Plate For Sale Malaysia | {{ config('app.name') }}">
<meta property="og:description" content="Search car plate / carplate number for sale in Malaysia — VIP, repeating digit &amp; lucky plate no. Buy &amp; sell direct owner. 车牌买卖.">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:image" content="{{ asset('images/JS.png') }}">
<meta property="og:locale" content="en_MY">
<meta property="og:locale:alternate" content="zh_CN">
<meta property="og:locale:alternate" content="ms_MY">

<!-- Twitter / X card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Car Plate For Sale Malaysia | {{ config('app.name') }}">
<meta name="twitter:description" content="Search car plate / carplate number for sale in Malaysia — VIP, repeating digit &amp; lucky plate no. 车牌买卖.">
<meta name="twitter:image" content="{{ asset('images/JS.png') }}">
<link rel="icon" type="image/png" href="{{ asset('images/logoonly.png') }}">

<!-- Structured data (schema.org) — filled in by JS from /api/settings + /api/carplates -->
<script type="application/ld+json" id="structuredData"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Noto+Sans:wght@400;500;600;700&family=Noto+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

<style>
:root{
  --ink:#1c1f22;
  --black:#0b0b0c;
  --black-2:#141517;
  --panel:#1a1b1e;
  --plate-white:#f8f7f2;
  --gold:#d4af37;
  --gold-light:#f0d998;
  --gold-dark:#a8842a;
  --radius-plate:10px;
  --shadow-soft:0 10px 30px rgba(0,0,0,.16);
  --shadow-gold:0 16px 40px rgba(212,175,55,.18);
}
*{box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{
  font-family:'Noto Sans','Noto Sans SC',sans-serif;
  color:var(--ink);
  background:var(--plate-white);
  -webkit-font-smoothing:antialiased;
}
.font-plate{font-family:'Oswald','Noto Sans SC',sans-serif;letter-spacing:.03em;}
a{text-decoration:none;}
.text-gold{color:var(--gold);}
.bg-black{background:var(--black);}

.gold-divider{
  height:4px;
  background-image:repeating-linear-gradient(90deg,var(--gold) 0 26px, transparent 26px 48px);
  opacity:.85;
}

/* ---------- header ---------- */
.site-header{
  background:var(--black);
  position:sticky;top:0;z-index:1000;
  border-bottom:1px solid rgba(212,175,55,.18);
}
.brand{
  font-family:'Oswald',sans-serif;
  font-weight:700;
  color:var(--plate-white);
  letter-spacing:.04em;
  display:flex;flex-direction:column;line-height:1.05;
}
.brand .brand-top{font-size:1.15rem;}
.brand .brand-bottom{font-size:.68rem;color:rgba(212,175,55,.75);letter-spacing:.16em;font-weight:600;}
.brand .dot{color:var(--gold);}
.site-header .nav-link{color:rgba(255,255,255,.78)!important;font-weight:500;padding:.5rem .9rem!important;}
.site-header .nav-link:hover{color:var(--gold)!important;}
.lang-switch{display:flex;border:1px solid rgba(212,175,55,.35);border-radius:999px;overflow:hidden;}
.lang-switch button{background:transparent;border:none;color:rgba(255,255,255,.6);font-size:.78rem;font-weight:600;padding:.35rem .7rem;cursor:pointer;transition:.15s;}
.lang-switch button.active{background:var(--gold);color:var(--black);}

/* ---------- hero (video / image only) ---------- */
.hero-banner{
  position:relative;
  min-height:440px;
  display:flex;align-items:flex-end;
  overflow:hidden;
  background:var(--black);
}
@media(max-width:767px){.hero-banner{min-height:400px;}}
.hero-media{
  position:absolute;inset:0;
  background:url('{{ asset('images/banner.png') }}') center/cover no-repeat, linear-gradient(135deg, #0b0b0c 0%, #1c1c1c 55%, #0b0b0c 100%);
}
.hero-media video{width:100%;height:100%;object-fit:cover;display:block;}
.hero-overlay{position:absolute;inset:0;background:linear-gradient(180deg, rgba(0,0,0,.05) 0%, rgba(0,0,0,.45) 60%, rgba(0,0,0,.88) 100%);}
.hero-content{position:relative;z-index:2;padding-top:4.5rem;padding-bottom:7.5rem;color:#fff;width:100%;}
@media(max-width:767px){.hero-content{padding-top:2.6rem;padding-bottom:5.2rem;}}
.hero-eyebrow{color:var(--gold);font-weight:700;letter-spacing:.14em;font-size:.78rem;text-transform:uppercase;}
.hero-content h1{
  font-family:'Oswald',sans-serif;font-weight:700;
  font-size:clamp(2.1rem,5vw,3.4rem);line-height:1.08;margin:.5rem 0 1rem;
  text-shadow:0 2px 12px rgba(0,0,0,.5);
}
.hero-content p.lead{color:rgba(255,255,255,.78);max-width:520px;font-size:1.05rem;text-shadow:0 1px 8px rgba(0,0,0,.5);}
.direct-owner-badge{
  display:inline-flex;align-items:center;gap:.4rem;
  background:rgba(212,175,55,.16);
  border:1px solid rgba(212,175,55,.45);
  color:var(--gold);font-weight:600;font-size:.85rem;
  border-radius:999px;padding:.35rem .9rem;margin-bottom:1rem;
  backdrop-filter:blur(2px);
}

/* ---------- search + results (one section, overlapping the hero) ---------- */
.search-results-section{padding-bottom:4rem;}
@media(max-width:767px){.search-results-section{padding-bottom:6.5rem;}}
.search-card{
  background:var(--black-2);
  border:1px solid rgba(212,175,55,.32);
  border-radius:22px;
  padding:1.7rem 1.6rem;
  margin-top:-72px;
  position:relative;z-index:5;
  box-shadow:var(--shadow-gold), 0 20px 50px rgba(0,0,0,.35);
}
@media(max-width:767px){.search-card{margin-top:-46px;padding:1.1rem;}}

.plate-search-row{display:flex;gap:.6rem;}
@media(max-width:575px){.plate-search-row{flex-direction:column;}}
.plate-search-plate{
  flex:1;background:var(--plate-white);
  border:3px solid var(--black);
  border-radius:var(--radius-plate);
  display:flex;align-items:center;padding:.35rem .9rem;
  box-shadow:inset 0 2px 0 rgba(255,255,255,.6), inset 0 -3px 6px rgba(0,0,0,.12);
}
.plate-bolt{width:8px;height:8px;border-radius:50%;background:radial-gradient(circle at 35% 35%, #8b8f94, #4a4d50);flex:0 0 auto;}
.plate-search-input{
  border:none;outline:none;background:transparent;flex:1;
  font-family:'Oswald',sans-serif;font-weight:600;font-size:1.3rem;letter-spacing:.08em;
  color:var(--black);padding:.4rem .7rem;min-width:0;
}
.plate-search-input::placeholder{color:#9aa0a6;letter-spacing:.08em;}
.btn-search{
  background:linear-gradient(135deg,var(--gold-light),var(--gold) 60%,var(--gold-dark));
  border:none;border-radius:var(--radius-plate);padding:0 1.5rem;
  font-weight:700;color:var(--black);display:flex;align-items:center;gap:.4rem;
  transition:.15s;
}
.btn-search:hover{filter:brightness(1.06);}

.filter-chips{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:1.1rem;}
.chip{
  border:1px solid rgba(212,175,55,.4);background:transparent;color:rgba(255,255,255,.8);
  border-radius:999px;padding:.4rem 1rem;font-size:.83rem;font-weight:600;cursor:pointer;transition:.15s;
}
.chip.active,.chip:hover{background:var(--gold);color:var(--black);border-color:var(--gold);}

.results-header{display:flex;flex-wrap:wrap;justify-content:space-between;align-items:end;gap:.6rem;margin:2.2rem 0 1.2rem;}
.section-eyebrow{color:var(--gold-dark);font-weight:700;letter-spacing:.14em;font-size:.75rem;text-transform:uppercase;}
.section-title{font-family:'Oswald',sans-serif;font-weight:700;font-size:clamp(1.6rem,3vw,2.2rem);color:var(--ink);margin-bottom:.2rem;}
.section-sub{color:#666;max-width:560px;}
.results-meta{color:#777;font-size:.9rem;}

/* ---------- plate cards ---------- */
.plate-card{
  background:#fff;border:1px solid #ecebe6;border-radius:16px;
  padding:1.1rem;height:100%;min-height:352px;
  display:flex;flex-direction:column;gap:.7rem;
  position:relative;overflow:hidden;
  transition:.2s;
}
.plate-card::before{
  content:"";position:absolute;top:0;left:0;right:0;height:4px;
  background:linear-gradient(90deg,var(--gold-light),var(--gold),var(--gold-dark));
  opacity:.0;transition:.2s;
}
.plate-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-soft);border-color:rgba(212,175,55,.5);}
.plate-card:hover::before{opacity:1;}

.car-plate-visual{
  height:130px;background:linear-gradient(180deg,#eef0f2,#e3e6e9);border-radius:10px;
  display:flex;align-items:center;justify-content:center;flex:0 0 130px;
  position:relative;overflow:hidden;
}
.car-plate-visual svg{width:100%;height:100%;}
.car-photo{width:100%;height:100%;object-fit:contain;display:block;}
.plate-overlay-text{
  position:absolute;
  left:50%;
  top:78%;
  transform:translate(-50%,-50%);
  background:#f8f7f2;
  border:1.5px solid #101214;
  border-radius:3px;
  padding:.1em .45em;
  box-shadow:inset 0 1px 0 rgba(255,255,255,.7), inset 0 -2px 3px rgba(0,0,0,.10), 0 2px 4px rgba(0,0,0,.25);
  font-family:'Oswald',sans-serif;
  font-weight:700;
  letter-spacing:.06em;
  color:#101214;
  white-space:nowrap;
  pointer-events:none;
  line-height:1.3;
}

.plate-tags{display:flex;flex-wrap:wrap;gap:.4rem;min-height:26px;align-content:flex-start;}
.tag{
  display:inline-flex;align-items:center;gap:.3rem;
  font-size:.68rem;font-weight:700;letter-spacing:.03em;text-transform:uppercase;
  border-radius:999px;padding:.24rem .6rem .24rem .5rem;
  border:1px solid rgba(168,132,42,.45);color:var(--gold-dark);background:rgba(212,175,55,.08);
}
.tag.tag-vip{background:linear-gradient(135deg,var(--gold-light),var(--gold));color:var(--black);border-color:transparent;}

.plate-price{font-family:'Oswald',sans-serif;font-weight:700;font-size:1.2rem;color:var(--gold-dark);}
.plate-price .rm{font-size:.72rem;color:#a99a6b;font-weight:600;margin-right:.2rem;}

.btn-enquire{
  margin-top:auto;
  background:var(--black);
  border:1px solid rgba(212,175,55,.4);
  color:var(--gold);font-weight:700;font-size:.86rem;
  border-radius:999px;padding:.4rem .9rem .4rem .4rem;
  display:flex;align-items:center;gap:.6rem;transition:.2s;
}
.wa-icon-badge{
  width:30px;height:30px;border-radius:50%;background:#25D366;color:#fff;
  display:flex;align-items:center;justify-content:center;font-size:1rem;flex:0 0 auto;
}
.wa-arrow{margin-left:auto;opacity:.55;transition:.2s;}
.btn-enquire:hover{background:var(--gold);color:var(--black);border-color:var(--gold);}
.btn-enquire:hover .wa-arrow{transform:translateX(3px);opacity:1;color:var(--black);}

/* ---------- pagination ---------- */
.plate-pagination{
  display:flex;flex-wrap:wrap;justify-content:center;align-items:center;
  gap:.4rem;margin-top:2.2rem;
}
.page-btn{
  min-width:40px;height:40px;padding:0 .6rem;
  border:1px solid #ecebe6;background:#fff;color:var(--ink);
  border-radius:10px;font-weight:700;font-family:'Oswald',sans-serif;
  display:flex;align-items:center;justify-content:center;gap:.3rem;
  cursor:pointer;transition:.15s;font-size:.95rem;
}
.page-btn:hover:not(:disabled){border-color:var(--gold);color:var(--gold-dark);}
.page-btn.active{background:var(--black);border-color:var(--black);color:var(--gold);}
.page-btn:disabled{opacity:.4;cursor:not-allowed;}
.page-ellipsis{color:#999;padding:0 .3rem;font-weight:700;}

/* ---------- videos ---------- */
.section{padding:4rem 0;}
.video-card{background:var(--panel);border-radius:16px;overflow:hidden;color:var(--plate-white);height:100%;}
.video-thumb{aspect-ratio:9/12;position:relative;display:flex;align-items:center;justify-content:center;}
.video-thumb .play{
  width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,.92);
  display:flex;align-items:center;justify-content:center;color:var(--black);font-size:1.4rem;
  box-shadow:0 6px 16px rgba(0,0,0,.35);
}
.video-thumb .platform-tag{
  position:absolute;top:.7rem;left:.7rem;font-size:.68rem;font-weight:700;letter-spacing:.03em;text-transform:uppercase;
  background:rgba(0,0,0,.5);padding:.25rem .55rem;border-radius:6px;
}
.video-body{padding:.9rem 1rem 1.1rem;}
.video-body h6{font-weight:600;font-size:.92rem;margin-bottom:.6rem;line-height:1.35;}
.video-body a{color:var(--gold);font-weight:600;font-size:.85rem;}
.follow-row{display:flex;gap:.7rem;flex-wrap:wrap;}
.btn-follow{border-radius:999px;padding:.55rem 1.2rem;font-weight:700;font-size:.9rem;display:inline-flex;align-items:center;gap:.5rem;}
.btn-fb{background:#1877F2;color:#fff;}
.btn-ig{background:linear-gradient(45deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);color:#fff;}

/* ---------- about ---------- */
.about-wrap{background:#fff;border:1px solid #ecebe6;border-radius:20px;padding:2.2rem;position:relative;}
.about-wrap::before{content:"";position:absolute;top:0;left:2.2rem;right:2.2rem;height:3px;background:linear-gradient(90deg,var(--gold-light),var(--gold),var(--gold-dark));border-radius:0 0 4px 4px;}
.profile-photo-placeholder{
  width:100%;aspect-ratio:1/1;border-radius:16px;
  background:url('{{ asset('images/office.jpeg') }}') center/cover no-repeat, linear-gradient(135deg, #0b0b0c 0%, #1c1c1c 55%, #0b0b0c 100%);
  display:flex;align-items:center;justify-content:center;color:rgba(212,175,55,.4);font-size:3rem;
  border:1px solid rgba(212,175,55,.25);
}
.stat-box{text-align:center;padding:.8rem;}
.stat-box .num{font-family:'Oswald',sans-serif;font-weight:700;font-size:1.7rem;color:var(--gold-dark);}
.stat-box .lbl{font-size:.78rem;color:#777;text-transform:uppercase;letter-spacing:.05em;}
.reg-number-light{font-size:.78rem;color:#9a978d;margin-top:.8rem;}

/* ---------- contact ---------- */
.contact-card{background:var(--black);color:var(--plate-white);border-radius:20px;padding:2.2rem;height:100%;border:1px solid rgba(212,175,55,.2);}
.contact-row{display:flex;gap:.9rem;margin-bottom:1.3rem;align-items:flex-start;}
.contact-row .icon{width:42px;height:42px;border-radius:10px;background:rgba(212,175,55,.14);color:var(--gold);display:flex;align-items:center;justify-content:center;flex:0 0 auto;}
.contact-row h6{font-weight:700;font-size:.8rem;letter-spacing:.04em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:.15rem;}
.contact-row p{margin:0;color:var(--plate-white);}
.map-frame{border-radius:16px;overflow:hidden;border:1px solid #ecebe6;}
.map-frame iframe{width:100%;height:100%;min-height:280px;border:0;display:block;}
.btn-contact-cta{
  background:var(--gold);color:var(--black);font-weight:700;border:none;
  border-radius:999px;padding:.7rem;display:flex;align-items:center;justify-content:center;gap:.5rem;transition:.2s;
}
.btn-contact-cta:hover{background:var(--gold-light);color:var(--black);}

/* ---------- footer ---------- */
.site-footer{background:var(--black-2);color:rgba(255,255,255,.6);padding:2.2rem 0;font-size:.88rem;border-top:1px solid rgba(212,175,55,.15);}
.site-footer a{color:rgba(255,255,255,.7);}
.site-footer a:hover{color:var(--gold);}
.footer-brand{display:flex;flex-direction:column;line-height:1.1;}
.footer-brand .brand-top{font-family:'Oswald',sans-serif;font-weight:700;font-size:1.15rem;color:#fff;letter-spacing:.04em;}
.footer-brand .brand-bottom{font-size:.68rem;color:rgba(212,175,55,.7);letter-spacing:.14em;font-weight:600;}
.reg-number{font-size:.78rem;color:rgba(255,255,255,.45);}

/* ---------- floating whatsapp ---------- */
.wa-float{
  position:fixed;right:1.1rem;bottom:1.1rem;z-index:1100;
  background:var(--black);border:2px solid var(--gold);
  color:#25D366;width:58px;height:58px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;font-size:1.7rem;
  box-shadow:0 8px 24px rgba(0,0,0,.35);animation:wa-pulse 2.6s infinite;
}
.wa-float:hover{color:#25D366;}
@media(max-width:575px){
  .wa-float{
    width:50px;height:50px;font-size:1.4rem;
    right:.7rem;
    bottom:calc(.7rem + env(safe-area-inset-bottom, 0px));
  }
}
@keyframes wa-pulse{
  0%{box-shadow:0 8px 24px rgba(0,0,0,.32),0 0 0 0 rgba(212,175,55,.45);}
  70%{box-shadow:0 8px 24px rgba(0,0,0,.32),0 0 0 14px rgba(212,175,55,0);}
  100%{box-shadow:0 8px 24px rgba(0,0,0,.32),0 0 0 0 rgba(212,175,55,0);}
}
@media (prefers-reduced-motion: reduce){.wa-float{animation:none;}}
:focus-visible{outline:3px solid var(--gold);outline-offset:2px;}
</style>
</head>
<body>

<!-- ================= HEADER ================= -->
<header class="site-header">
  <nav class="navbar navbar-expand-lg navbar-dark py-2">
    <div class="container">
      <a class="brand" href="#top">
        <img src="{{ asset('images/JS.png') }}" height="50" alt="{{ config('app.name') }}">
      </a>
      <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
        <i class="bi bi-list text-white fs-2"></i>
      </button>
      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav mx-auto my-3 my-lg-0 gap-lg-2">
          <li class="nav-item"><a class="nav-link" href="#search" data-i18n="nav_search">Search Plates</a></li>
          <li class="nav-item"><a class="nav-link" href="#videos" data-i18n="nav_videos">Videos</a></li>
          <li class="nav-item"><a class="nav-link" href="#about" data-i18n="nav_about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact" data-i18n="nav_contact">Contact</a></li>
        </ul>
        <div class="lang-switch mx-auto mx-lg-0">
          <button data-lang="en" class="active">EN</button>
          <button data-lang="zh">中文</button>
          <button data-lang="ms">BM</button>
        </div>
      </div>
    </div>
  </nav>
</header>
<div class="gold-divider"></div>

<!-- ================= HERO (video / image only) ================= -->
<section class="hero-banner" id="top">
  <div class="hero-media"></div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <div class="hero-eyebrow" data-i18n="hero_eyebrow">Malaysia's Car Plate Specialist</div>
    <h1 data-i18n="hero_title">Find A Car Plate Number<br>That Speaks For You</h1>
    <div class="direct-owner-badge"><i class="bi bi-patch-check-fill"></i> <span data-i18n="hero_direct_owner">Buy &amp; Sell — Direct Owner</span></div>
    <p class="lead" data-i18n="hero_subtitle">Search any car plate / plate no — VIP, repeating-digit and lucky number plates in Malaysia. Message us on WhatsApp in one click.</p>
    <p class="visually-hidden">{{ config('app.name') }} — carplate, car plate Malaysia, 车牌买卖, plat nombor Malaysia, plate no search.</p>
  </div>
</section>

<!-- ================= SEARCH + RESULTS (one section, overlapping hero) ================= -->
<section class="search-results-section" id="search">
  <div class="container">
    <div class="search-card">
      <div class="plate-search-row">
        <div class="plate-search-plate">
          <span class="plate-bolt"></span>
          <input type="text" id="searchInput" class="plate-search-input" placeholder="ABC 1234" data-i18n-placeholder="hero_search_placeholder" autocomplete="off">
          <span class="plate-bolt"></span>
        </div>
        <button class="btn-search" id="searchBtn"><i class="bi bi-search"></i><span data-i18n="hero_search_btn">Search</span></button>
      </div>
      <div class="filter-chips mt-2" id="categoryChips">
      </div>
    </div>

    <div class="results-header">
      <div>
        <div class="section-eyebrow" data-i18n="results_eyebrow">Available Now</div>
        <h2 class="section-title" data-i18n="results_title">Plate Search Results</h2>
      </div>
      <div class="results-meta" id="resultsCount"></div>
    </div>
    <div class="row g-3" id="plateGrid"></div>
    <div id="emptyState" class="text-center py-5 d-none">
      <i class="bi bi-search fs-1 text-muted"></i>
      <p class="mt-3 text-muted" data-i18n="results_empty">No plates match your search. Try another number or WhatsApp us — we may have it in our private list.</p>
    </div>
    <nav class="plate-pagination" id="platePagination" aria-label="Plate results pages"></nav>
  </div>
</section>

<!-- ================= VIDEOS ================= -->
<section class="section bg-black" id="videos">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
      <div>
        <div class="section-eyebrow" style="color:var(--gold);" data-i18n="videos_eyebrow">From Our Channels</div>
        <h2 class="section-title text-white" data-i18n="videos_title">Latest Videos &amp; Car Plate Knowledge</h2>
        <p class="mb-0" style="color:rgba(255,255,255,.6);max-width:560px;" data-i18n="videos_subtitle">Tips on choosing, transferring and renewing your plate — posted regularly on Facebook and Instagram.</p>
      </div>
      <div class="follow-row">
      <a id="videosFacebookLink"
        href="#"
        target="_blank"
        rel="noopener"
        class="btn-follow btn-fb">
        <i class="bi bi-facebook"></i>
        <span data-i18n="videos_follow_fb">Follow on Facebook</span>
      </a>

      <a id="videosInstagramLink"
        href="#"
        target="_blank"
        rel="noopener"
        class="btn-follow btn-ig">
        <i class="bi bi-instagram"></i>
        <span data-i18n="videos_follow_ig">Follow on Instagram</span>
      </a>
      </div>
    </div>
    <div class="row g-3" id="videoGrid"></div>
  </div>
</section>

<!-- ================= ABOUT / PROFILE ================= -->
<section class="section" id="about">
  <div class="container">
    <div class="about-wrap">
      <div class="row g-4 align-items-center">
        <div class="col-md-4">
          <div class="profile-photo-placeholder"><i class="bi bi-person"></i></div>
        </div>
        <div class="col-md-8">
          <div class="section-eyebrow" data-i18n="about_eyebrow">Your Trusted Dealer</div>
          <h2 class="section-title" id="aboutTitle"></h2>
          <p class="text-muted" data-i18n="about_bio">Buy and sell direct from the owner — no middleman. Over the years I've helped car owners across Malaysia find, buy and transfer number plates safely, from simple repeat digits to premium VIP numbers. Every transaction is handled personally, with full JPJ transfer support.</p>
          <p class="reg-number-light mb-0 d-none" id="aboutSsm"></p>
          <div class="row text-center mt-4 g-2">
            <div class="col-4 d-none">
              <div class="stat-box"><div class="num" id="statYears"></div><div class="lbl" data-i18n="about_years_label">Years Experience</div></div>
            </div>
            <div class="col-4 d-none">
              <div class="stat-box"><div class="num" id="statPlates"></div><div class="lbl" data-i18n="about_plates_sold_label">Plates Sold</div></div>
            </div>
            <div class="col-4 d-none">
              <div class="stat-box"><div class="num" id="statJpj"></div><div class="lbl" data-i18n="about_experience_label">JPJ Transfer Handled</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= CONTACT ================= -->
<section class="section pt-0" id="contact">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-5">
        <div class="contact-card">
          <div class="section-eyebrow" style="color:var(--gold);" data-i18n="contact_eyebrow">Get In Touch</div>
          <h2 class="section-title text-white mb-4" data-i18n="contact_title">Contact Us</h2>

          <div class="contact-row">
            <div class="icon"><i class="bi bi-telephone-fill"></i></div>
            <div>
              <h6 data-i18n="contact_phone_label">Phone</h6>
              <p id="contactPhoneText"></p>
            </div>
          </div>
          <div class="contact-row">
            <div class="icon"><i class="bi bi-whatsapp"></i></div>
            <div>
              <h6 data-i18n="contact_whatsapp_label">WhatsApp</h6>
              <p><a id="contactWaLink" href="#" target="_blank" rel="noopener"></a></p>
            </div>
          </div>
          <div class="contact-row">
            <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
            <div>
              <h6 data-i18n="contact_address_label">Address</h6>
              <p id="contactAddressText"></p>
            </div>
          </div>
          <div class="contact-row mb-0">
            <div class="icon"><i class="bi bi-clock-fill"></i></div>
            <div>
              <h6 data-i18n="contact_hours_label">Business Hours</h6>
              <p id="contactHoursText"></p>
            </div>
          </div>

          <a id="contactCtaBtn" href="#" target="_blank" rel="noopener" class="btn-contact-cta w-100 mt-4">
            <i class="bi bi-whatsapp fs-5"></i> <span data-i18n="contact_cta">Chat With Us Now</span>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="map-frame h-100">
          <!-- src is set from the address in /api/settings -->
          <iframe id="mapFrame" title="Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="site-footer">
  <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
    <div>
      <div class="footer-brand">
        <img src="{{ asset('images/JS.png') }}" width="150" alt="{{ config('app.name') }}">
      </div>
      <p class="mb-0 mt-1" data-i18n="footer_tagline">Buy &amp; sell car number plates, direct from owner.</p>
      <p class="reg-number mb-0 mt-1 d-none" id="footerSsm"></p>
    </div>
    <div class="d-flex gap-3">
    <a id="footerFacebookLink"
      href="#"
      target="_blank"
      rel="noopener">
      <i class="bi bi-facebook fs-5"></i>
    </a>
    <a id="footerInstagramLink"
      href="#"
      target="_blank"
      rel="noopener">
      <i class="bi bi-instagram fs-5"></i>
    </a>
      <a href="#" id="footerWaLink" target="_blank" rel="noopener"><i class="bi bi-whatsapp fs-5"></i></a>
    </div>
    <div class="small" id="footerRights"></div>
  </div>
</footer>

<!-- ================= FLOATING WHATSAPP ================= -->
<a href="#" id="waFloat" class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script>
/* =====================================================================
   CONFIG — non-business constants only.
   Business details (phone, WhatsApp, address, hours, social links,
   owner name, SSM no., stats) come from /api/settings.
   Site name comes from APP_NAME in .env (config('app.name')).
   ===================================================================== */
const APP_NAME = @json(config('app.name'));

const CONFIG = {
  carPlatePhoto: "{{ asset('images/car-front.png') }}",
  budgetLimit: 5000,      // "Under RM…" filter threshold
  countryCode: "MY"       // used in structured data
};

// Keys read from GET /api/settings  ->  result.data
const SETTING_KEYS = [
  'phone', 'whatsapp', 'address', 'business_hours',
  'facebook', 'instagram',
  'owner_name', 'ssm_reg_no',
  'years_experience', 'plates_sold', 'jpj_rate'
];

let SITE_SETTINGS = Object.fromEntries(SETTING_KEYS.map(k => [k, '']));

async function loadSettings() {
  try {
    const response = await fetch('/api/settings');

    if (!response.ok) {
      throw new Error('Failed to load settings');
    }

    const result = await response.json();

    if (result.success && result.data) {
      SITE_SETTINGS = Object.fromEntries(
        SETTING_KEYS.map(k => [k, result.data[k] ?? ''])
      );
    }
  } catch (error) {
    console.error('Failed to load settings:', error);
  }
}

/* =====================================================================
   PAGINATION SETTINGS
   ===================================================================== */
const PLATES_PER_PAGE = 12;
let currentPage = 1;

/* =====================================================================
   PLATE INVENTORY
   ===================================================================== */
let PLATES = [];

/* =====================================================================
   LOAD CARPLATES FROM LARAVEL API
   ===================================================================== */
async function loadCarplates() {
  try {
    const response = await fetch('/api/carplates');

    if (!response.ok) {
      throw new Error('Failed to load carplates');
    }

    const result = await response.json();

    PLATES = (result.data || []).map(carplate => {
      const tags = [];

      (carplate.tags || []).forEach(tag => {
        const name = String(tag.name || '').toLowerCase();

        // Supports separate tags and combined tags such as
        // "Popular + Repeating" from the current backend data.
        if (name.includes('popular')) {
          tags.push('popular');
        }

        if (name.includes('repeat')) {
          tags.push('repeat');
        }

        if (name.includes('vip')) {
          tags.push('vip');
        }

        // Also keep any other backend tag as a usable filter.
        const parts = name.split(/\s*(?:\+|&|,|\/|\|)\s*/);
        parts.forEach(part => {
          const slug = part.trim()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '');

          if (slug && !['popular', 'repeat', 'repeating', 'vip'].includes(slug)) {
            tags.push(slug);
          }
        });
      });

      return {
        id: carplate.id,
        number: carplate.plate,
        price: Number(carplate.amount) || 0,
        image: carplate.image || null,
        tags: [...new Set(tags)],
        category: carplate.category || null
      };
    });

    applySearchAndFilter();

  } catch (error) {
    console.error('Failed to load carplates:', error);

    const grid = document.getElementById('plateGrid');
    const count = document.getElementById('resultsCount');

    if (grid) {
      grid.innerHTML = '';
    }

    if (count) {
      count.textContent = tr('results_error');
    }
  }
}

/* =====================================================================
   FEEDS — loaded from Laravel /api/feeds
   ===================================================================== */
let FEEDS = [];

async function loadFeeds() {
  try {
    const response = await fetch('/api/feeds');

    if (!response.ok) {
      throw new Error('Failed to load feeds');
    }

    const result = await response.json();

    if (result.success && Array.isArray(result.data)) {
      FEEDS = result.data;
    } else {
      FEEDS = [];
    }
  } catch (error) {
    console.error('Failed to load feeds:', error);
    FEEDS = [];
  }

  renderFeeds();
}

function getFeedPlatform(url) {
  const value = String(url || '').toLowerCase();

  if (value.includes('instagram')) {
    return 'instagram';
  }

  if (value.includes('facebook') || value.includes('fb.com')) {
    return 'facebook';
  }

  return 'facebook';
}

function escapeHtml(value) {
  return String(value ?? '')
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#039;');
}

let BACKEND_CATEGORIES = [];
async function loadCategories() {
  try {
    const response = await fetch('/api/categories');

    if (!response.ok) {
      throw new Error('Failed to load categories');
    }

    const result = await response.json();

    if (result.success && Array.isArray(result.data)) {
      BACKEND_CATEGORIES = result.data;
    } else {
      BACKEND_CATEGORIES = [];
    }

  } catch (error) {
    console.error('Failed to load categories:', error);
    BACKEND_CATEGORIES = [];
  }

  renderCategoryFilters();
}
/* tag -> icon + display key */
const TAG_META = {
  popular:{icon:"bi-fire", key:"filter_popular"},
  repeat:{icon:"bi-arrow-repeat", key:"filter_repeating"},
  vip:{icon:"bi-gem", key:"filter_vip"},
  budget:{icon:"bi-tag", key:"filter_budget"},
};

let BACKEND_TAGS = [];

/* =====================================================================
   LOAD TAGS FROM LARAVEL API
   ===================================================================== */
async function loadTags() {
  try {
    const response = await fetch('/api/tags');

    if (!response.ok) {
      throw new Error('Failed to load tags');
    }

    const result = await response.json();

    if (result.success && Array.isArray(result.data)) {
      BACKEND_TAGS = result.data;
      renderTagFilters();
    }
  } catch (error) {
    console.error('Failed to load tags:', error);
  }
}

/* =====================================================================
   RENDER FILTER BUTTONS FROM BACKEND TAGS
   ===================================================================== */
function slugifyTag(value) {
  return String(value || '')
    .toLowerCase()
    .trim()
    .replace(/[^a-z0-9]+/g, '-')
    .replace(/^-+|-+$/g, '');
}

function getTagParts(tagName) {
  return String(tagName || '')
    .split(/\s*(?:\+|&|,|\/|\|)\s*/)
    .map(part => part.trim())
    .filter(Boolean);
}

function getTagFilterKey(name) {
  const lower = String(name || '').toLowerCase();

  if (lower.includes('popular')) return 'popular';
  if (lower.includes('repeat')) return 'repeat';
  if (lower.includes('vip')) return 'vip';

  return slugifyTag(name);
}

function renderTagFilters() {
  const container = document.getElementById('filterChips');
  if (!container) return;

  const current = currentFilter();

  container.innerHTML = '';

  const allButton = document.createElement('button');
  allButton.className = 'chip' + (current === 'all' ? ' active' : '');
  allButton.dataset.filter = 'all';
  allButton.dataset.i18n = 'filter_all';
  allButton.textContent = tr('filter_all');
  container.appendChild(allButton);

  const added = new Set();

  BACKEND_TAGS.forEach(tag => {
    getTagParts(tag.name).forEach(part => {
      const filterKey = getTagFilterKey(part);
      if (!filterKey || filterKey === 'budget' || added.has(filterKey)) return;

      added.add(filterKey);

      const meta = TAG_META[filterKey] || { icon: 'bi-tag', key: null };

      const button = document.createElement('button');
      button.className = 'chip' + (current === filterKey ? ' active' : '');
      button.dataset.filter = filterKey;

      if (meta.key) {
        button.dataset.i18n = meta.key;
        button.textContent = tr(meta.key) || part;
      } else {
        button.textContent = part;
      }

      container.appendChild(button);
    });
  });

  const budgetButton = document.createElement('button');
  budgetButton.className = 'chip' + (current === 'budget' ? ' active' : '');
  budgetButton.dataset.filter = 'budget';
  budgetButton.dataset.i18n = 'filter_budget';
  budgetButton.textContent = tr('filter_budget');
  container.appendChild(budgetButton);
}

/* =====================================================================
   TRANSLATIONS
   Placeholders: {limit} = CONFIG.budgetLimit, {year} = current year,
   {site} = APP_NAME
   ===================================================================== */
const I18N = {
  en:{
    nav_search:"Search Plates", nav_videos:"Videos", nav_about:"About", nav_contact:"Contact",
    hero_eyebrow:"Malaysia's Car Plate Specialist",
    hero_title:"Find A Car Plate Number<br>That Speaks For You",
    hero_direct_owner:"Buy &amp; Sell — Direct Owner",
    hero_subtitle:"Search any car plate / plate no — VIP, repeating-digit and lucky number plates in Malaysia. Message us on WhatsApp in one click.",
    hero_search_placeholder:"e.g. ABC 1234",
    hero_search_btn:"Search",
    filter_all:"All", filter_popular:"Popular", filter_repeating:"Repeating", filter_vip:"VIP", filter_budget:"Under RM{limit}",
    filter_all_categories:"All Categories",
    results_eyebrow:"Available Now", results_title:"Car Plate Search Results",
    results_count:(n)=> n + (n===1 ? " plate found" : " plates found"),
    results_empty:"No plates match your search. Try another number or WhatsApp us — we may have it in our private list.",
    results_error:"Unable to load plates",
    card_enquire:"WhatsApp",
    videos_eyebrow:"From Our Channels", videos_title:"Latest Videos & Car Plate Knowledge",
    videos_subtitle:"Tips on choosing, transferring and renewing your plate — posted regularly on Facebook and Instagram.",
    videos_watch:"Watch on", videos_follow_fb:"Follow on Facebook", videos_follow_ig:"Follow on Instagram",
    feeds_empty:"No feeds available.",
    about_eyebrow:"Your Trusted Dealer", about_role:"Owner",
    about_bio:"Buy and sell direct from the owner — no middleman. Over the years I've helped car owners across Malaysia find, buy and transfer number plates safely, from simple repeat digits to premium VIP numbers. Every transaction is handled personally, with full JPJ transfer support.",
    about_years_label:"Years Experience", about_plates_sold_label:"Plates Sold", about_experience_label:"JPJ Transfer Handled",
    contact_eyebrow:"Get In Touch", contact_title:"Contact Us",
    contact_phone_label:"Phone", contact_whatsapp_label:"WhatsApp", contact_address_label:"Address",
    contact_hours_label:"Business Hours",
    contact_cta:"Chat With Us Now",
    footer_tagline:"Buy & sell car number plates, direct from owner.", footer_rights:"© {year} {site}. All rights reserved.",
    wa_enquiry_prefix:"Hi, I am interested in",
    wa_generic_message:"Hi, I would like to enquire about a car plate number.",
    page_prev:"Prev", page_next:"Next",
  },
  zh:{
    nav_search:"车牌搜索", nav_videos:"视频", nav_about:"关于我们", nav_contact:"联系方式",
    hero_eyebrow:"马来西亚车牌专家 Carplate Malaysia",
    hero_title:"找到属于您的<br>专属车牌号码 Car Plate",
    hero_direct_owner:"车牌买卖，直接对接车主",
    hero_subtitle:"搜索车牌号码 / plate no — VIP车牌、重复数字车牌及幸运号码车牌。一键WhatsApp联系我们。",
    hero_search_placeholder:"例如 ABC 1234",
    hero_search_btn:"搜索",
    filter_all:"全部", filter_popular:"热门", filter_repeating:"重复数字", filter_vip:"VIP / 靓号", filter_budget:"RM{limit}以下",
    filter_all_categories:"全部分类",
    results_eyebrow:"现有库存", results_title:"车牌搜索结果",
    results_count:(n)=> "找到 " + n + " 个车牌",
    results_empty:"没有符合的车牌。请尝试其他号码，或直接WhatsApp联系我们，我们可能有更多未公开的车牌。",
    results_error:"无法加载车牌",
    card_enquire:"WhatsApp",
    videos_eyebrow:"社交媒体动态", videos_title:"最新视频与车牌知识",
    videos_subtitle:"关于选号、过户与更新车牌的小知识，定期发布于Facebook与Instagram。",
    videos_watch:"观看于", videos_follow_fb:"关注 Facebook", videos_follow_ig:"关注 Instagram",
    feeds_empty:"暂无动态。",
    about_eyebrow:"值得信赖的车牌商", about_role:"创办人",
    about_bio:"车主直接买卖，没有中间人。多年来，我协助全马来西亚的车主安全地寻找、购买及过户车牌——从简单的重复数字到高端VIP靓号。每一笔交易都由我亲自处理，并提供完整的陆路交通局（JPJ）过户服务。",
    about_years_label:"年经验", about_plates_sold_label:"成交车牌数", about_experience_label:"JPJ过户处理率",
    contact_eyebrow:"联系我们", contact_title:"联系方式",
    contact_phone_label:"电话", contact_whatsapp_label:"WhatsApp", contact_address_label:"地址",
    contact_hours_label:"营业时间",
    contact_cta:"立即WhatsApp联系",
    footer_tagline:"车主直接买卖车牌，无中间人。", footer_rights:"© {year} {site}. 版权所有。",
    wa_enquiry_prefix:"我对以下车牌感兴趣：",
    wa_generic_message:"您好，我想咨询关于车牌号码的事宜。",
    page_prev:"上一页", page_next:"下一页",
  },
  ms:{
    nav_search:"Cari Plat", nav_videos:"Video", nav_about:"Tentang Kami", nav_contact:"Hubungi",
    hero_eyebrow:"Pakar Plat Nombor / Car Plate Malaysia",
    hero_title:"Cari Nombor Plat Kereta<br>Yang Mewakili Anda",
    hero_direct_owner:"Beli &amp; Jual — Terus Daripada Pemilik",
    hero_subtitle:"Cari plat nombor / plate no — plat VIP, nombor berulang dan nombor bertuah di Malaysia. Hubungi kami terus melalui WhatsApp.",
    hero_search_placeholder:"cth. ABC 1234",
    hero_search_btn:"Cari",
    filter_all:"Semua", filter_popular:"Popular", filter_repeating:"Nombor Berulang", filter_vip:"VIP / Nombor Rendah", filter_budget:"Bawah RM{limit}",
    filter_all_categories:"Semua Kategori",
    results_eyebrow:"Tersedia Sekarang", results_title:"Keputusan Carian Plat",
    results_count:(n)=> n + (n===1 ? " plat dijumpai" : " plat dijumpai"),
    results_empty:"Tiada plat sepadan dengan carian anda. Cuba nombor lain atau WhatsApp kami — mungkin kami ada dalam senarai peribadi.",
    results_error:"Tidak dapat memuatkan plat",
    card_enquire:"WhatsApp",
    videos_eyebrow:"Dari Media Sosial Kami", videos_title:"Video Terkini & Pengetahuan Plat Kereta",
    videos_subtitle:"Tip memilih, memindah milik dan memperbaharui plat anda — dikongsi secara berkala di Facebook dan Instagram.",
    videos_watch:"Tonton di", videos_follow_fb:"Ikuti di Facebook", videos_follow_ig:"Ikuti di Instagram",
    feeds_empty:"Tiada suapan tersedia.",
    about_eyebrow:"Peniaga Yang Dipercayai", about_role:"Pemilik",
    about_bio:"Beli dan jual terus daripada pemilik — tiada orang tengah. Selama bertahun-tahun saya telah membantu pemilik kereta di seluruh Malaysia mencari, membeli dan memindah milik plat nombor dengan selamat — dari nombor berulang mudah hingga nombor VIP premium. Setiap urusan dikendalikan sendiri, dengan sokongan penuh pindah milik JPJ.",
    about_years_label:"Tahun Pengalaman", about_plates_sold_label:"Plat Terjual", about_experience_label:"Pindah Milik JPJ Dikendalikan",
    contact_eyebrow:"Hubungi Kami", contact_title:"Hubungi Kami",
    contact_phone_label:"Telefon", contact_whatsapp_label:"WhatsApp", contact_address_label:"Alamat",
    contact_hours_label:"Waktu Perniagaan",
    contact_cta:"Chat Dengan Kami Sekarang",
    footer_tagline:"Beli & jual plat nombor, terus daripada pemilik.", footer_rights:"© {year} {site}. Hak cipta terpelihara.",
    wa_enquiry_prefix:"Hai, saya berminat dengan",
    wa_generic_message:"Hai, saya ingin bertanya tentang plat nombor kereta.",
    page_prev:"Sebelum", page_next:"Seterus",
  }
};

let currentLang = "en";

/* translation helper — returns a string and fills {limit} / {year} / {site} */
function tr(key, lang = currentLang){
  const value = I18N[lang]?.[key];
  if(typeof value !== "string") return "";
  return value
    .replace("{limit}", () => CONFIG.budgetLimit.toLocaleString())
    .replace("{year}", () => String(new Date().getFullYear()))
    .replace("{site}", () => APP_NAME);
}

/* ---------- render plate grid ---------- */
function escapeXml(s){
  return s.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;");
}
function plateFontSize(number){
  const len = number.replace(/\s+/g,"").length;
  if(len <= 5) return 16;
  if(len <= 7) return 13;
  return 10.5;
}
function carFrontSVG(number){
  const fs = plateFontSize(number);
  return `
  <svg viewBox="0 0 220 150" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Car plate for sale, plate no ${escapeXml(number)}, ${escapeXml(APP_NAME)}">
    <path d="M18,112 Q18,68 42,52 Q64,36 110,34 Q156,36 178,52 Q202,68 202,112 L202,122 Q202,130 194,130 L168,130 Q160,130 160,122 L160,114 L60,114 L60,122 Q60,130 52,130 L26,130 Q18,130 18,122 Z" fill="#2c2f34" stroke="#101214" stroke-width="2"/>
    <ellipse cx="47" cy="68" rx="15" ry="9" fill="#f5ecc9" opacity=".92"/>
    <ellipse cx="173" cy="68" rx="15" ry="9" fill="#f5ecc9" opacity=".92"/>
    <rect x="80" y="62" width="60" height="22" rx="4" fill="#101214"/>
    <line x1="86" y1="69" x2="134" y2="69" stroke="#43474d" stroke-width="2"/>
    <line x1="86" y1="77" x2="134" y2="77" stroke="#43474d" stroke-width="2"/>
    <rect x="28" y="93" width="164" height="5" fill="#d4af37" opacity=".85"/>
    <rect x="28" y="98" width="164" height="11" rx="4" fill="#1a1c1f"/>
    <rect x="66" y="97" width="88" height="28" rx="4" fill="#f8f7f2" stroke="#101214" stroke-width="2.5"/>
    <text x="110" y="117" text-anchor="middle" font-family="Oswald, sans-serif" font-weight="700" font-size="${fs}" letter-spacing="1" fill="#101214">${escapeXml(number)}</text>
  </svg>`;
}

function tagHtml(tag){
  const meta = TAG_META[tag] || {icon:"bi-tag", key:null};
  const label = meta.key ? tr(meta.key) : tag;
  const cls = tag === "vip" ? "tag tag-vip" : "tag";
  return `<span class="${cls}"><i class="bi ${meta.icon}"></i>${label}</span>`;
}

function carVisualHtml(number, imageUrl){
  const safeNum = escapeXml(number);
  const jsSafeNum = number.replace(/\\/g,"\\\\").replace(/'/g,"\\'");
  const src = imageUrl || CONFIG.carPlatePhoto;
  return `
    <img src="${src}" alt="Car plate ${safeNum}" class="car-photo"
         onerror="this.parentElement.innerHTML = carFrontSVG('${jsSafeNum}')">
    <div class="plate-overlay-text" style="font-size:${plateFontSize(number)}px">${safeNum}</div>`;
}
function waLinkForPlate(number){
  const message = `${tr('wa_enquiry_prefix')} ${number}`;

  const whatsappNumber = String(SITE_SETTINGS.whatsapp || '')
    .replace(/^https?:\/\/wa\.me\//i, '')
    .replace(/\D/g, '');

  return whatsappNumber
    ? `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`
    : '#';
}
/* ---------- pagination state ---------- */
let filteredPlates = PLATES.slice();

function renderPlates(list){
  filteredPlates = list;
  const totalPages = Math.max(1, Math.ceil(list.length / PLATES_PER_PAGE));
  if(currentPage > totalPages) currentPage = totalPages;
  if(currentPage < 1) currentPage = 1;

  const grid = document.getElementById("plateGrid");
  const empty = document.getElementById("emptyState");
  const count = document.getElementById("resultsCount");
  grid.innerHTML = "";
  count.textContent = I18N[currentLang].results_count(list.length);

  if(list.length === 0){
    empty.classList.remove("d-none");
    renderPagination(0, 1);
    return;
  }
  empty.classList.add("d-none");

  const start = (currentPage - 1) * PLATES_PER_PAGE;
  const pageItems = list.slice(start, start + PLATES_PER_PAGE);

  pageItems.forEach(p=>{
    const col = document.createElement("div");
    col.className = "col-6 col-md-4 col-lg-3";
    col.innerHTML = `
      <div class="plate-card">
        <div class="car-plate-visual">${carVisualHtml(p.number, p.image)}</div>
        <div class="plate-tags">${p.tags.map(tagHtml).join("")}</div>
        <div class="plate-price"><span class="rm">RM</span>${p.price.toLocaleString()}</div>
        <a class="btn-enquire" href="${waLinkForPlate(p.number)}" target="_blank" rel="noopener">
          <span class="wa-icon-badge"><i class="bi bi-whatsapp"></i></span>
          <span>${I18N[currentLang].card_enquire}</span>
          <i class="bi bi-arrow-right wa-arrow"></i>
        </a>
      </div>`;
    grid.appendChild(col);
  });

  renderPagination(list.length, totalPages);
}

function renderPagination(totalItems, totalPages){
  const nav = document.getElementById("platePagination");
  nav.innerHTML = "";
  if(totalItems === 0 || totalPages <= 1) return;

  const t = I18N[currentLang];

  const makeBtn = (label, page, opts={}) => {
    const btn = document.createElement("button");
    btn.className = "page-btn" + (opts.active ? " active" : "");
    btn.innerHTML = label;
    btn.disabled = !!opts.disabled;
    btn.addEventListener("click", ()=>{
      if(opts.disabled) return;
      currentPage = page;
      renderPlates(filteredPlates);
      document.getElementById("search").scrollIntoView({behavior:"smooth", block:"start"});
    });
    return btn;
  };

  nav.appendChild(makeBtn(`<i class="bi bi-chevron-left"></i> ${t.page_prev}`, currentPage - 1, {disabled: currentPage === 1}));

  const addEllipsis = () => {
    const span = document.createElement("span");
    span.className = "page-ellipsis";
    span.textContent = "…";
    nav.appendChild(span);
  };

  const pages = [];
  for(let i=1;i<=totalPages;i++){
    if(i === 1 || i === totalPages || Math.abs(i - currentPage) <= 1){
      pages.push(i);
    }
  }
  let lastShown = 0;
  pages.forEach(p=>{
    if(lastShown && p - lastShown > 1) addEllipsis();
    nav.appendChild(makeBtn(String(p), p, {active: p === currentPage}));
    lastShown = p;
  });

  nav.appendChild(makeBtn(`${t.page_next} <i class="bi bi-chevron-right"></i>`, currentPage + 1, {disabled: currentPage === totalPages}));
}

function currentFilter() {

// Tag / budget filter
const activeFilter = document.querySelector(
  '#filterChips .chip.active[data-filter]'
);

if (activeFilter) {
  return activeFilter.dataset.filter || 'all';
}

// Category filter
const activeCategory = document.querySelector(
  '#categoryChips .chip.active[data-category]'
);

if (activeCategory) {
  return activeCategory.dataset.category === 'all'
    ? 'all'
    : `category-${activeCategory.dataset.category}`;
}

return 'all';
}

function applySearchAndFilter() {
  const q = document
    .getElementById("searchInput")
    .value
    .trim()
    .toUpperCase()
    .replace(/\s+/g, "");

  const filter = currentFilter();

  let list = PLATES.slice();

  // Tag / budget filters
  if (filter !== "all" && !filter.startsWith("category-")) {

    if (filter === "budget") {
      list = list.filter(p => Number(p.price) < CONFIG.budgetLimit);
    } else {
      list = list.filter(p => p.tags.includes(filter));
    }
  }

  // Category filter
  if (filter.startsWith("category-")) {
    const categoryId = Number(
      filter.replace("category-", "")
    );

    list = list.filter(p =>
      Number(p.category?.id) === categoryId
    );
  }

  // Search
  if (q) {
    list = list.filter(p =>
      p.number
        .replace(/\s+/g, "")
        .toUpperCase()
        .includes(q)
    );
  }

  currentPage = 1;

  filteredPlates = list;

  renderPlates(list);
}
/* ---------- render feeds ---------- */
function renderFeeds(){
  const grid = document.getElementById("videoGrid");
  if (!grid) return;

  grid.innerHTML = "";

  if (!FEEDS.length) {
    grid.innerHTML = `
      <div class="col-12">
        <div class="text-center text-white-50 py-4">
          ${tr('feeds_empty')}
        </div>
      </div>`;
    return;
  }

  FEEDS.forEach(feed => {
    const platform = getFeedPlatform(feed.url);
    const icon = platform === "facebook" ? "bi-facebook" : "bi-instagram";
    const platformLabel = platform === "facebook" ? "Facebook" : "Instagram";
    const url = escapeHtml(feed.url || '#');
    const title = escapeHtml(feed.title || '');
    const description = escapeHtml(feed.description || '');

    const background = feed.cover_photo
  ? `background-image:linear-gradient(135deg,rgba(42,45,49,.35),rgba(11,11,12,.55)),url('${String(feed.cover_photo).replace(/'/g, "\\'")}');background-size:cover;background-position:center;`
  : `background:linear-gradient(135deg,#2a2d31,#0b0b0c);`;

    const col = document.createElement("div");
    col.className = "col-6 col-md-3";

    col.innerHTML = `
      <div class="video-card">
        <a href="${url}" target="_blank" rel="noopener" class="text-decoration-none text-white">
          <div class="video-thumb" style="${background}">
            <span class="platform-tag"><i class="bi ${icon}"></i> ${platformLabel}</span>
            <span class="play"><i class="bi bi-play-fill"></i></span>
          </div>
          <div class="video-body">
            <h6>${title}</h6>
            ${description ? `<p class="mb-2">${description}</p>` : ''}
            <span>${I18N[currentLang].videos_watch} ${platformLabel} <i class="bi bi-box-arrow-up-right"></i></span>
          </div>
        </a>
      </div>`;

    grid.appendChild(col);
  });
}
function renderCategoryFilters() {
  const container = document.getElementById('categoryChips');

  if (!container) return;

  const current = currentFilter();

  container.innerHTML = '';

  const allButton = document.createElement('button');
  allButton.className = 'chip' + (current === 'all' ? ' active' : '');
  allButton.dataset.category = 'all';
  allButton.textContent = tr('filter_all_categories');

  container.appendChild(allButton);

  BACKEND_CATEGORIES.forEach(category => {
    const button = document.createElement('button');

    button.className =
      'chip' +
      (current === `category-${category.id}` ? ' active' : '');

    button.dataset.category = category.id;
    button.textContent = category.name;

    container.appendChild(button);
  });
}
/* ---------- language switching ---------- */
function applyLanguage(lang){
  currentLang = lang;
  document.getElementById("htmlRoot").lang = lang;

  document.querySelectorAll("[data-i18n]").forEach(el=>{
    const key = el.getAttribute("data-i18n");
    if(typeof I18N[lang][key] === "string"){
      el.innerHTML = tr(key, lang);
    }
  });
  document.querySelectorAll("[data-i18n-placeholder]").forEach(el=>{
    const key = el.getAttribute("data-i18n-placeholder");
    if(I18N[lang][key]) el.placeholder = I18N[lang][key];
  });

  document.querySelectorAll(".lang-switch button").forEach(b=>{
    b.classList.toggle("active", b.dataset.lang === lang);
  });

  renderTagFilters();
  renderCategoryFilters();
  applySearchAndFilter();
  renderFeeds();
  updateContactAndFloatLinks();
}

/* ---------- small helpers for settings-driven content ---------- */
function setStat(id, value){
  const el = document.getElementById(id);
  if(!el) return;
  const v = String(value ?? '').trim();
  el.textContent = v;
  const col = el.closest('.col-4');
  if(col) col.classList.toggle('d-none', !v);
}

function setRegNo(){
  const v = String(SITE_SETTINGS.ssm_reg_no || '').trim();
  ['aboutSsm', 'footerSsm'].forEach(id=>{
    const el = document.getElementById(id);
    if(!el) return;
    el.textContent = v ? `SSM Reg. No. ${v}` : '';
    el.classList.toggle('d-none', !v);
  });
}

/* ---------- structured data (schema.org), built from live data ---------- */
function updateStructuredData(){
  const el = document.getElementById('structuredData');
  if(!el) return;

  const data = {
    "@context": "https://schema.org",
    "@type": "AutomotiveBusiness",
    "name": APP_NAME,
    "description": document.querySelector('meta[name="description"]')?.content || '',
    "url": location.origin + '/',
    "image": document.querySelector('meta[property="og:image"]')?.content || '',
    "areaServed": CONFIG.countryCode
  };

  if(SITE_SETTINGS.phone){
    data.telephone = SITE_SETTINGS.phone;
  }

  if(SITE_SETTINGS.address){
    data.address = {
      "@type": "PostalAddress",
      "streetAddress": SITE_SETTINGS.address,
      "addressCountry": CONFIG.countryCode
    };
  }

  const sameAs = [SITE_SETTINGS.facebook, SITE_SETTINGS.instagram].filter(Boolean);
  if(sameAs.length){
    data.sameAs = sameAs;
  }

  const prices = PLATES.map(p => p.price).filter(p => p > 0);
  if(prices.length){
    data.priceRange = `RM${Math.min(...prices).toLocaleString('en-US')} - RM${Math.max(...prices).toLocaleString('en-US')}`;
  }

  el.textContent = JSON.stringify(data);
}

/* ---------- contact + floating whatsapp links ---------- */
function updateContactAndFloatLinks(){
  const genericMsg = I18N[currentLang].wa_generic_message;

  // WhatsApp
  const whatsappNumber = String(SITE_SETTINGS.whatsapp || '')
    .replace(/^https?:\/\/wa\.me\//i, '')
    .replace(/\D/g, '');

  const waLink = whatsappNumber
    ? `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(genericMsg)}`
    : '#';

  const businessHours = document.getElementById("contactHoursText");
  if (businessHours) {
    businessHours.textContent = SITE_SETTINGS.business_hours || '';
  }

  document.getElementById("waFloat").href = waLink;
  document.getElementById("footerWaLink").href = waLink;
  document.getElementById("contactWaLink").href = waLink;
  document.getElementById("contactCtaBtn").href = waLink;

  // Phone
  document.getElementById("contactPhoneText").textContent =
    SITE_SETTINGS.phone || '';

  document.getElementById("contactWaLink").textContent =
    SITE_SETTINGS.phone || '';

  // Address
  document.getElementById("contactAddressText").textContent =
    SITE_SETTINGS.address || '';

  // Map (only reload the iframe when the address actually changes)
  const mapFrame = document.getElementById("mapFrame");
  if (mapFrame && SITE_SETTINGS.address) {
    const mapSrc = "https://maps.google.com/maps?q="
      + encodeURIComponent(SITE_SETTINGS.address)
      + "&z=15&output=embed";

    if (mapFrame.getAttribute("src") !== mapSrc) {
      mapFrame.setAttribute("src", mapSrc);
    }
  }

  // Facebook
  const facebookLink = SITE_SETTINGS.facebook || '#';
  // Videos Facebook button
  const videosFacebook = document.getElementById("videosFacebookLink");

  if (videosFacebook) {
    videosFacebook.href = SITE_SETTINGS.facebook || '#';
  }

  // Videos Instagram button
  const videosInstagram = document.getElementById("videosInstagramLink");

  if (videosInstagram) {
    videosInstagram.href = SITE_SETTINGS.instagram || '#';
  }
  const footerFacebook = document.getElementById("footerFacebookLink");

  if (footerFacebook) {
    footerFacebook.href = facebookLink;
  }

  // Instagram
  const instagramLink = SITE_SETTINGS.instagram || '#';

  const footerInstagram = document.getElementById("footerInstagramLink");

  if (footerInstagram) {
    footerInstagram.href = instagramLink;
  }

  // About / owner
  const aboutTitle = document.getElementById("aboutTitle");
  if (aboutTitle) {
    const ownerLine = [SITE_SETTINGS.owner_name, tr('about_role')]
      .filter(Boolean)
      .join(' — ');

    aboutTitle.textContent = [ownerLine, APP_NAME].filter(Boolean).join(', ');
  }

  setStat("statYears", SITE_SETTINGS.years_experience);
  setStat("statPlates", SITE_SETTINGS.plates_sold);
  setStat("statJpj", SITE_SETTINGS.jpj_rate);
  setRegNo();

  // Footer copyright
  const footerRights = document.getElementById("footerRights");
  if (footerRights) {
    footerRights.textContent = tr('footer_rights');
  }
}

/* ---------- event wiring ---------- */
document.getElementById("searchBtn").addEventListener("click", applySearchAndFilter);
document.getElementById("searchInput").addEventListener("input", applySearchAndFilter);
document.getElementById("searchInput").addEventListener("keydown", e=>{ if(e.key==="Enter") applySearchAndFilter(); });

document.addEventListener("click", function (e) {

const btn = e.target.closest("#filterChips .chip, #categoryChips .chip");

if (!btn) return;

document
  .querySelectorAll("#filterChips .chip, #categoryChips .chip")
  .forEach(c => c.classList.remove("active"));

btn.classList.add("active");

applySearchAndFilter();

});

document.querySelectorAll(".lang-switch button").forEach(b=>{
  b.addEventListener("click", ()=> applyLanguage(b.dataset.lang));
});

/* ---------- init ---------- */
async function initializePage(){
  applyLanguage("en");

  await loadSettings();
  await loadCategories();
  await loadTags();
  await loadCarplates();
  await loadFeeds();

  applyLanguage(currentLang);
  updateStructuredData();
}

initializePage();
</script>
</body>
</html>