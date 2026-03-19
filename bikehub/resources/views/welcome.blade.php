<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeHub — Find Your Perfect Ride</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *{margin:0;padding:0;box-sizing:border-box}
        :root{--bg:#0d0d0d;--surface:#161616;--accent:#e8ff00;--text:#f0f0f0;--muted:#666;--border:#2a2a2a}
        body{background:var(--bg);color:var(--text);font-family:'DM Sans',sans-serif}
        nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:1.2rem 2.5rem;background:rgba(13,13,13,0.9);backdrop-filter:blur(12px);border-bottom:1px solid var(--border)}
        .logo{font-family:'Bebas Neue',sans-serif;font-size:1.8rem}.logo span{color:var(--accent)}
        .nav-links{display:flex;gap:2rem;align-items:center}
        .nav-links a{color:var(--muted);text-decoration:none;font-size:.9rem;transition:color .2s}.nav-links a:hover{color:var(--text)}
        .nav-cta{background:var(--accent)!important;color:#000!important;padding:.5rem 1.2rem;border-radius:4px;font-weight:600!important}
        .hero{min-height:100vh;display:flex;flex-direction:column;justify-content:center;padding:8rem 2.5rem 4rem;position:relative;overflow:hidden}
        .hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 70% 50%,rgba(232,255,0,.06),transparent 60%);pointer-events:none}
        .hero-tag{display:inline-block;background:rgba(232,255,0,.1);color:var(--accent);font-size:.75rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;padding:.4rem .9rem;border-radius:2px;border:1px solid rgba(232,255,0,.2);margin-bottom:1.5rem}
        h1{font-family:'Bebas Neue',sans-serif;font-size:clamp(3.5rem,8vw,7rem);line-height:.95;margin-bottom:1.5rem}
        h1 span{color:var(--accent);display:block}
        .hero-sub{font-size:1.05rem;color:#999;line-height:1.7;max-width:500px;margin-bottom:2.5rem;font-weight:300}
        .hero-actions{display:flex;gap:1rem;flex-wrap:wrap}
        .btn-primary{background:var(--accent);color:#000;padding:.85rem 2rem;border-radius:4px;font-weight:600;text-decoration:none;transition:all .2s;border:2px solid var(--accent)}
        .btn-primary:hover{background:transparent;color:var(--accent)}
        .btn-secondary{background:transparent;color:var(--text);padding:.85rem 2rem;border-radius:4px;font-weight:500;text-decoration:none;transition:all .2s;border:2px solid var(--border)}
        .btn-secondary:hover{border-color:var(--text)}
        .stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--border);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
        .stat-item{background:var(--bg);padding:2rem;text-align:center}
        .stat-num{font-family:'Bebas Neue',sans-serif;font-size:3rem;color:var(--accent);display:block}
        .stat-label{color:var(--muted);font-size:.85rem}
        .section{padding:6rem 2.5rem}
        .section-label{font-size:.75rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--accent);margin-bottom:1rem}
        .section-title{font-family:'Bebas Neue',sans-serif;font-size:clamp(2.5rem,4vw,3.5rem);line-height:1;margin-bottom:1rem}
        .features-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1px;background:var(--border);margin-top:3rem;border:1px solid var(--border)}
        .feature-card{background:var(--bg);padding:2rem;transition:background .3s;position:relative;overflow:hidden}
        .feature-card:hover{background:var(--surface)}
        .feature-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;background:var(--accent);transform:scaleX(0);transition:transform .3s;transform-origin:left}
        .feature-card:hover::after{transform:scaleX(1)}
        .feature-icon{font-size:1.5rem;margin-bottom:1rem}
        .feature-title{font-weight:600;margin-bottom:.5rem}
        .feature-desc{color:var(--muted);font-size:.9rem;line-height:1.6}
        .cta-section{padding:8rem 2.5rem;text-align:center;position:relative;overflow:hidden}
        .cta-section::before{content:'';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:600px;height:600px;background:radial-gradient(circle,rgba(232,255,0,.05),transparent 70%);pointer-events:none}
        .cta-section h2{font-family:'Bebas Neue',sans-serif;font-size:clamp(3rem,5vw,5rem);line-height:.95;margin-bottom:1.5rem}
        .cta-section h2 span{color:var(--accent)}
        .cta-section p{color:var(--muted);margin-bottom:2.5rem}
        .cta-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
        footer{padding:2rem 2.5rem;border-top:1px solid var(--border);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem}
        footer p{color:var(--muted);font-size:.85rem}
        .footer-links{display:flex;gap:1.5rem}
        .footer-links a{color:var(--muted);text-decoration:none;font-size:.85rem}.footer-links a:hover{color:var(--text)}
        @media(max-width:768px){.nav-links{display:none}.hero{padding:7rem 1.2rem 3rem}.stats{grid-template-columns:1fr}.section{padding:4rem 1.2rem}.cta-section{padding:5rem 1.2rem}footer{flex-direction:column;text-align:center}}
    </style>
</head>
<body>
<nav>
    <div class="logo">Bike<span>Hub</span></div>
    <div class="nav-links">
        <a href="#">Browse</a><a href="#">Shops</a><a href="#">Deals</a>
        <a href="{{ route('login') }}">Log in</a>
        <a href="{{ route('register') }}" class="nav-cta">Get Started</a>
    </div>
</nav>
<section class="hero">
    <span class="hero-tag">🚲 The Bicycle Marketplace</span>
    <h1>Find Your<span>Perfect Ride.</span></h1>
    <p class="hero-sub">Browse hundreds of bikes from local shops, get AI-powered recommendations, and order with confidence.</p>
    <div class="hero-actions">
        <a href="{{ route('register') }}" class="btn-primary">Browse Bikes</a>
        <a href="#features" class="btn-secondary">Learn More</a>
    </div>
</section>
<div class="stats">
    <div class="stat-item"><span class="stat-num">500+</span><span class="stat-label">Bikes Available</span></div>
    <div class="stat-item"><span class="stat-num">50+</span><span class="stat-label">Partner Shops</span></div>
    <div class="stat-item"><span class="stat-num">2K+</span><span class="stat-label">Happy Riders</span></div>
</div>
<section class="section" id="features">
    <p class="section-label">Why BikeHub</p>
    <h2 class="section-title">Everything You Need To Ride.</h2>
    <div class="features-grid">
        <div class="feature-card"><div class="feature-icon">🤖</div><h3 class="feature-title">AI Recommendations</h3><p class="feature-desc">Personalized bike suggestions based on your budget, body size, and riding style.</p></div>
        <div class="feature-card"><div class="feature-icon">🏪</div><h3 class="feature-title">Local Marketplace</h3><p class="feature-desc">Browse and compare products from verified bicycle shops near you.</p></div>
        <div class="feature-card"><div class="feature-icon">📦</div><h3 class="feature-title">Order & Track</h3><p class="feature-desc">Place orders online with status updates from Pending to Delivered.</p></div>
        <div class="feature-card"><div class="feature-icon">📊</div><h3 class="feature-title">Shop Analytics</h3><p class="feature-desc">Powerful dashboards for sales, inventory, and customer insights.</p></div>
        <div class="feature-card"><div class="feature-icon">🔔</div><h3 class="feature-title">Notifications</h3><p class="feature-desc">Alerts for orders, low stock, restocking needs, and payments.</p></div>
        <div class="feature-card"><div class="feature-icon">💳</div><h3 class="feature-title">Secure Payments</h3><p class="feature-desc">Multiple payment options with automatic tax calculation.</p></div>
    </div>
</section>
<section class="cta-section">
    <h2>Ready To Find<br><span>Your Bike?</span></h2>
    <p>Join thousands of riders already using BikeHub.</p>
    <div class="cta-btns">
        <a href="{{ route('register') }}" class="btn-primary">Create Free Account</a>
        <a href="{{ route('login') }}" class="btn-secondary">Sign In</a>
    </div>
</section>
<footer>
    <div class="logo" style="font-size:1.2rem">Bike<span style="color:var(--accent)">Hub</span></div>
    <p>© 2025 BikeHub. Built for riders, by riders.</p>
    <div class="footer-links"><a href="#">Privacy</a><a href="#">Terms</a><a href="#">Contact</a></div>
</footer>
</body>
</html>
