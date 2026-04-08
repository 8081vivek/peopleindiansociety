<!-- 
Online HTML, CSS and JavaScript editor to run code online.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Browser</title>
</head>

<body>
  <!-- ✅ PRELOADER (People of Indian Society - Tree Plantation) -->
<!-- Paste this just after <body> -->

<div id="pis-preloader" aria-label="Loading" role="status">
  <div class="pis-bg-leaves" aria-hidden="true">
    <span class="pis-float-leaf a"></span>
    <span class="pis-float-leaf b"></span>
    <span class="pis-float-leaf c"></span>
    <span class="pis-float-leaf d"></span>
  </div>

  <div class="pis-preloader-card">
    <div class="pis-top">
      <div class="pis-emblem" aria-hidden="true">
        <div class="pis-ring"></div>
        <div class="pis-leaf"></div>
      </div>
      <div class="pis-brand">
        <h2 class="pis-title">People of Indian Society</h2>
        <p class="pis-subtitle">Planting hope, growing a greener Bharat</p>
      </div>
    </div>

    <div class="pis-plant" aria-hidden="true">
      <div class="pis-halo"></div>
      <div class="pis-ground"></div>

      <!-- seed -> sprout -> tree -->
      <div class="pis-seed"></div>
      <div class="pis-stem"></div>
      <div class="pis-branch left"></div>
      <div class="pis-branch right"></div>

      <div class="pis-canopy">
        <span class="leaf l1"></span>
        <span class="leaf l2"></span>
        <span class="leaf l3"></span>
        <span class="leaf l4"></span>
        <span class="leaf l5"></span>
      </div>

      <div class="pis-sparkles">
        <i></i><i></i><i></i>
      </div>
    </div>

    <div class="pis-progress" aria-label="Loading progress">
      <span class="pis-bar"></span>
    </div>

    <p class="pis-loading">Loading<span class="pis-dots" aria-hidden="true"></span></p>
  </div>
</div>

<style>
  :root{
    --g-50:#ECFDF5;
    --g-100:#D1FAE5;
    --g-200:#A7F3D0;
    --g-300:#6EE7B7;
    --g-400:#4ADE80;
    --g-500:#22C55E;
    --g-600:#16A34A;
    --g-700:#15803D;
    --g-800:#065F46;
    --g-900:#064E3B;

    --soil-1:#7C3F00;
    --soil-2:#4A2500;
  }

  /* ===== Fullscreen overlay ===== */
  #pis-preloader{
    position:fixed; inset:0;
    display:flex; align-items:center; justify-content:center;
    background:
      radial-gradient(900px 420px at 50% 25%, rgba(110,231,183,.55), transparent 60%),
      radial-gradient(1000px 520px at 50% 85%, rgba(34,197,94,.22), transparent 65%),
      radial-gradient(circle at top, var(--g-50) 0%, var(--g-100) 45%, var(--g-200) 100%);
    z-index:99999;
    font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    transition: opacity .45s ease, visibility .45s ease;
    overflow:hidden;
  }
  #pis-preloader.pis-hide{
    opacity:0; visibility:hidden; pointer-events:none;
  }

  /* ===== Floating leaves background ===== */
  .pis-bg-leaves{
    position:absolute; inset:0;
    pointer-events:none;
    opacity:.55;
    filter: blur(.2px);
  }
  .pis-float-leaf{
    position:absolute;
    width:44px; height:44px;
    background: radial-gradient(circle at 30% 30%, var(--g-300) 0%, var(--g-500) 45%, var(--g-700) 100%);
    border-radius: 0 95% 95% 95%;
    box-shadow: 0 18px 40px rgba(22,163,74,.18);
    transform: rotate(-18deg);
    animation: pisFloat s ease-in-out infinite;
  }
  .pis-float-leaf::after{
    content:"";
    position:absolute; left:20px; top:7px;
    width:2px; height:28px;
    background: rgba(255,255,255,.55);
    border-radius:3px;
    transform: rotate(16deg);
  }
  .pis-float-leaf.a{ left:8%;  top:18%; animation-duration: 6.8s; transform: rotate(-28deg) scale(.95); }
  .pis-float-leaf.b{ left:84%; top:22%; animation-duration: 7.6s; transform: rotate(12deg) scale(.85); }
  .pis-float-leaf.c{ left:14%; top:72%; animation-duration: 8.2s; transform: rotate(-8deg) scale(.9); }
  .pis-float-leaf.d{ left:80%; top:74%; animation-duration: 7.2s; transform: rotate(22deg) scale(.95); }

  /* ===== Card ===== */
  .pis-preloader-card{
    width:min(560px, 92vw);
    padding:26px 24px 22px;
    border-radius:26px;
    background: rgba(255,255,255,.86);
    backdrop-filter: blur(12px);
    box-shadow:
      0 26px 80px rgba(6,95,70,.25),
      inset 0 0 0 1px rgba(34,197,94,.18);
    position:relative;
  }

  /* ===== Top row ===== */
  .pis-top{
    display:flex;
    gap:14px;
    align-items:center;
    justify-content:center;
    text-align:left;
    margin-bottom: 10px;
  }
  .pis-brand{ line-height:1.15; }

  /* ===== Emblem ===== */
  .pis-emblem{
    width:68px; height:68px;
    position:relative;
    flex:0 0 auto;
  }
  .pis-ring{
    position:absolute; inset:0;
    border-radius:50%;
    border: 3px dotted rgba(22,163,74,.55);
    animation: pisSpin 3.6s linear infinite;
  }
  .pis-leaf{
    position:absolute; left:50%; top:50%;
    width:38px; height:38px;
    transform: translate(-50%,-52%) rotate(-18deg);
    background: radial-gradient(circle at 30% 30%, var(--g-300) 0%, var(--g-500) 45%, var(--g-700) 100%);
    border-radius: 0 92% 92% 92%;
    box-shadow: 0 10px 24px rgba(34,197,94,.35);
  }
  .pis-leaf::after{
    content:"";
    position:absolute; left:17px; top:7px;
    width:2px; height:26px;
    background: rgba(255,255,255,.60);
    border-radius:3px;
    transform: rotate(16deg);
  }

  /* ===== Titles ===== */
  .pis-title{
    margin: 0 0 4px;
    font-size: 1.35rem;
    font-weight: 700;
    color: var(--g-900);
    letter-spacing:.2px;
  }
  .pis-subtitle{
    margin:0;
    font-size: .95rem;
    color: rgba(6,95,70,.92);
  }

  /* ===== Plant scene ===== */
  .pis-plant{
    width:260px; height:170px;
    margin: 12px auto 16px;
    position:relative;
  }
  .pis-halo{
    position:absolute; left:50%; top:6px;
    width:190px; height:190px;
    transform: translateX(-50%);
    border-radius:50%;
    background: radial-gradient(circle, rgba(34,197,94,.18) 0%, transparent 62%);
    filter: blur(.2px);
    animation: pisPulse 2.8s ease-in-out infinite;
  }

  .pis-ground{
    position:absolute; left:50%; bottom:18px;
    width:240px; height:58px;
    transform: translateX(-50%);
    background: linear-gradient(180deg, var(--soil-1) 0%, var(--soil-2) 100%);
    border-radius: 20px 20px 34px 34px;
    box-shadow: 0 18px 40px rgba(74,37,0,.14);
    overflow:hidden;
  }
  .pis-ground::before{
    content:"";
    position:absolute; left:-20px; top:-26px;
    width:130%; height:62px;
    background:
      radial-gradient(circle at 20% 70%, rgba(255,255,255,.16) 0 16px, transparent 17px),
      radial-gradient(circle at 55% 35%, rgba(255,255,255,.10) 0 14px, transparent 15px),
      radial-gradient(circle at 82% 75%, rgba(255,255,255,.12) 0 12px, transparent 13px);
    opacity:.85;
  }

  /* seed */
  .pis-seed{
    position:absolute; left:50%; bottom:42px;
    width:14px; height:18px;
    transform: translateX(-50%);
    background: linear-gradient(180deg, #3B2A1E 0%, #1F140D 100%);
    border-radius: 50% 50% 55% 55%;
    animation: pisSeed 2.9s ease-in-out infinite;
  }

  /* stem */
  .pis-stem{
    position:absolute; left:50%; bottom:56px;
    width:7px; height:0;
    transform: translateX(-50%);
    background: linear-gradient(180deg, var(--g-400) 0%, var(--g-700) 100%);
    border-radius: 10px;
    transform-origin: bottom;
    animation: pisGrow 2.9s ease-in-out infinite;
    box-shadow: 0 10px 24px rgba(34,197,94,.22);
  }

  /* branches */
  .pis-branch{
    position:absolute;
    bottom:96px;
    width:40px; height:10px;
    background: linear-gradient(90deg, var(--g-600), var(--g-800));
    border-radius: 20px;
    opacity:0;
    animation: pisBranch 2.9s ease-in-out infinite;
  }
  .pis-branch.left{
    left:50%; transform: translateX(-58px) rotate(-18deg);
  }
  .pis-branch.right{
    left:50%; transform: translateX(18px) rotate(18deg);
  }

  /* canopy leaves */
  .pis-canopy{
    position:absolute; left:50%; bottom:108px;
    width:190px; height:95px;
    transform: translateX(-50%);
    opacity:0;
    animation: pisLeaves 2.9s ease-in-out infinite;
  }
  .pis-canopy .leaf{
    position:absolute;
    width:40px; height:26px;
    background: linear-gradient(135deg, var(--g-300), var(--g-700));
    border-radius: 44px 44px 44px 0;
    filter: drop-shadow(0 12px 16px rgba(34,197,94,.28));
  }
  .pis-canopy .l1{ left:24px; top:46px; transform: rotate(22deg) scale(.95); }
  .pis-canopy .l2{ left:64px; top:18px; transform: rotate(0deg)  scale(1.06); }
  .pis-canopy .l3{ right:64px; top:18px; transform: rotate(0deg)  scale(1.06); }
  .pis-canopy .l4{ right:24px; top:46px; transform: rotate(-22deg) scale(.95); }
  .pis-canopy .l5{ left:74px; top:52px; transform: rotate(8deg) scale(1.02); opacity:.95; }

  /* sparkles */
  .pis-sparkles{
    position:absolute; left:50%; top:16px;
    width:160px; height:80px;
    transform: translateX(-50%);
    pointer-events:none;
    opacity:.0;
    animation: pisSpark 2.9s ease-in-out infinite;
  }
  .pis-sparkles i{
    position:absolute;
    width:8px; height:8px;
    border-radius:50%;
    background: radial-gradient(circle, rgba(255,255,255,.95), rgba(110,231,183,.75));
    box-shadow: 0 12px 22px rgba(34,197,94,.25);
    opacity:.9;
  }
  .pis-sparkles i:nth-child(1){ left:18px; top:32px; animation: pisTwinkle 1.2s ease-in-out infinite; }
  .pis-sparkles i:nth-child(2){ left:74px; top:8px;  animation: pisTwinkle 1.35s ease-in-out infinite .12s; }
  .pis-sparkles i:nth-child(3){ right:22px; top:30px; animation: pisTwinkle 1.28s ease-in-out infinite .22s; }

  /* ===== Progress ===== */
  .pis-progress{
    height:10px;
    width: min(420px, 92%);
    margin: 0 auto 10px;
    border-radius: 999px;
    background: rgba(34,197,94,.14);
    overflow:hidden;
    box-shadow: inset 0 0 0 1px rgba(34,197,94,.16);
  }
  .pis-bar{
    display:block;
    height:100%;
    width:34%;
    border-radius: 999px;
    background: linear-gradient(90deg, var(--g-500), var(--g-700), var(--g-400));
    animation: pisBar 1.25s ease-in-out infinite;
  }

  .pis-loading{
    margin:0;
    text-align:center;
    font-size: .92rem;
    color: rgba(6,95,70,.92);
    letter-spacing:.35px;
  }
  .pis-dots{
    display:inline-block;
    width: 28px;
    text-align:left;
  }
  .pis-dots::after{
    content:"";
    animation: pisDots 1.25s steps(4,end) infinite;
  }

  /* ===== Animations ===== */
  @keyframes pisSpin{ to{ transform: rotate(360deg); } }

  @keyframes pisFloat{
    0%,100%{ transform: translateY(0) rotate(-18deg); opacity:.6; }
    50%{ transform: translateY(-18px) rotate(-8deg); opacity:.85; }
  }

  @keyframes pisPulse{
    0%,100%{ transform: translateX(-50%) scale(1); opacity:.75; }
    50%{ transform: translateX(-50%) scale(1.05); opacity:1; }
  }

  @keyframes pisSeed{
    0%,100%{ transform: translateX(-50%) translateY(0) scale(1); }
    35%{ transform: translateX(-50%) translateY(6px) scale(.94); }
    55%{ transform: translateX(-50%) translateY(0) scale(1); }
  }

  @keyframes pisGrow{
    0%{ height:0; transform: translateX(-50%) rotate(0deg); }
    45%{ height:66px; transform: translateX(-50%) rotate(-3deg); }
    70%{ height:66px; transform: translateX(-50%) rotate(3deg); }
    100%{ height:0; transform: translateX(-50%) rotate(0deg); }
  }

  @keyframes pisBranch{
    0%{ opacity:0; }
    46%{ opacity:0; }
    58%{ opacity:1; }
    78%{ opacity:1; }
    100%{ opacity:0; }
  }

  @keyframes pisLeaves{
    0%{ opacity:0; transform: translateX(-50%) translateY(10px) scale(.86); }
    45%{ opacity:0; }
    60%{ opacity:1; transform: translateX(-50%) translateY(0) scale(1); }
    78%{ opacity:1; transform: translateX(-50%) translateY(-2px) scale(1.02); }
    100%{ opacity:0; transform: translateX(-50%) translateY(10px) scale(.86); }
  }

  @keyframes pisSpark{
    0%{ opacity:0; }
    58%{ opacity:0; }
    66%{ opacity:1; }
    78%{ opacity:1; }
    100%{ opacity:0; }
  }

  @keyframes pisTwinkle{
    0%,100%{ transform: scale(.9); opacity:.65; }
    50%{ transform: scale(1.2); opacity:1; }
  }

  @keyframes pisBar{
    0%{ transform: translateX(-85%); }
    100%{ transform: translateX(190%); }
  }

  @keyframes pisDots{
    0%{ content:""; }
    25%{ content:"."; }
    50%{ content:".."; }
    75%{ content:"..."; }
    100%{ content:""; }
  }

  /* ===== Mobile tweaks ===== */
  @media (max-width: 420px){
    .pis-top{ flex-direction:column; text-align:center; }
    .pis-brand{ text-align:center; }
    .pis-preloader-card{ padding:22px 18px 18px; }
  }
</style>

<script>
  // ✅ Auto-hide preloader when page fully loads
  window.addEventListener("load", function () {
    const pre = document.getElementById("pis-preloader");
    if (!pre) return;

    // Smooth fade out
    pre.classList.add("pis-hide");

    // Remove after transition
    setTimeout(() => {
      if (pre && pre.parentNode) pre.parentNode.removeChild(pre);
    }, 2000);
  });

  // Optional manual hide:
  // function hidePreloader(){
  //   const pre = document.getElementById("pis-preloader");
  //   if(!pre) return;
  //   pre.classList.add("pis-hide");
  //   setTimeout(()=> pre.remove(), 650);
  // }
</script>

</body>

</html>