<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>S4Silicon – Future Tech Store</title>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69733b1558104b1978d41cb5/1jfl1tjkf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Poppins',sans-serif;
  background:#0a0a0f;
  color:#eee;
  overflow-x:hidden;
}

/* HEADER */
header{
  position:fixed;
  top:0;
  width:100%;
  padding:25px 0;
  text-align:center;
  background:linear-gradient(90deg,#1a001f,#3a0066,#000);
  box-shadow:0 0 25px rgba(162,0,255,0.6);
  z-index:1000;
  backdrop-filter:blur(8px);
}
header h1{
  font-family:'Orbitron',sans-serif;
  color:#d580ff;
  letter-spacing:3px;
  font-size:34px;
  text-shadow:0 0 15px #a64dff;
}
nav{margin-top:12px;}
nav a{
  color:#eee;
  margin:0 18px;
  text-decoration:none;
  font-size:15px;
  position:relative;
}
nav a::after{
  content:'';
  width:0%;
  height:2px;
  background:#bb66ff;
  position:absolute;
  left:0;
  bottom:-6px;
  transition:.4s;
}
nav a:hover::after{width:100%}

/* CONTAINER */
.container{max-width:1300px;margin:auto;padding:170px 20px 60px}
section{margin-bottom:120px;opacity:0;transition:1s ease}
section.show{opacity:1;transform:none}

/* ANIMATIONS */
.fade-up{transform:translateY(60px)}
.zoom-in{transform:scale(.8)}
.slide-left{transform:translateX(-80px)}

/* HERO */
.hero{
  background:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1400&q=80') center/cover;
  padding:160px 40px;
  border-radius:12px;
  text-align:center;
  box-shadow:0 0 40px rgba(140,0,255,0.4);
}
.hero h2{font-size:48px;color:#fff;text-shadow:0 0 20px #b366ff}
.hero p{max-width:750px;margin:20px auto;color:#ddd}
.btn{
  background:#a64dff;
  border:none;
  padding:12px 28px;
  border-radius:30px;
  color:white;
  font-weight:500;
  cursor:pointer;
  box-shadow:0 0 20px #a64dff;
  transition:.3s;
}
.btn:hover{transform:scale(1.1);background:#c266ff}

/* PRODUCTS */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}
.card{
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(12px);
  border:1px solid rgba(255,255,255,0.1);
  border-radius:12px;
  overflow:hidden;
  box-shadow:0 0 25px rgba(162,0,255,0.2);
  transition:.4s;
}
.card:hover{transform:translateY(-10px) scale(1.03)}
.card img{width:100%;height:220px;object-fit:cover}
.card-content{padding:20px;text-align:center}
.price{color:#c266ff;font-weight:600;margin-top:10px}

/* INFO BOX */
.box{
  background:rgba(255,255,255,0.04);
  padding:40px;
  border-radius:12px;
  box-shadow:0 0 30px rgba(140,0,255,0.15);
}

/* FOOTER */
footer{
  background:linear-gradient(90deg,#000,#240033);
  padding:70px 20px;
  color:#bbb;
}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:40px;
}
footer h3{color:#d580ff;margin-bottom:15px}
footer a{display:block;color:#bbb;text-decoration:none;margin-bottom:8px}
footer a:hover{color:white}
</style>

<script>
function go(id){document.getElementById(id).scrollIntoView({behavior:'smooth'})}
window.addEventListener('scroll',()=>{
  document.querySelectorAll("section").forEach(sec=>{
    if(sec.getBoundingClientRect().top < window.innerHeight-100){
      sec.classList.add("show")
    }
  })
})
</script>
</head>
<body>

<header>
  <h1>S4Silicon</h1>
  <nav>
    <a onclick="go('home')">Home</a>
    <a onclick="go('products')">Products</a>
    <a onclick="go('innovation')">Innovation</a>
    <a onclick="go('whyus')">Why Us</a>
    <a onclick="go('reviews')">Reviews</a>
    <a onclick="go('contact')">Contact</a>
  </nav>
</header>

<div class="container">

<section id="home" class="hero fade-up">
  <h2>The Power of Future Technology</h2>
  <p>S4Silicon brings next-generation gadgets and smart devices crafted for speed, power, and elegance.</p>
  <button class="btn" onclick="go('products')">Explore Now</button>
</section>

<section id="products" class="zoom-in">
  <h2 style="text-align:center;color:#c266ff;margin-bottom:30px;">Featured Tech</h2>
  <div class="grid">
    <div class="card"><img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8"><div class="card-content"><h3>Ultra Laptop</h3><div class="price">$1499</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9"><div class="card-content"><h3>Smartphone Pro</h3><div class="price">$999</div></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04"><div class="card-content"><h3>Noise Cancelling Headphones</h3><div class="price">$299</div></div></div>
  </div>
</section>

<section id="innovation" class="slide-left">
  <h2 style="color:#c266ff">Innovation & Performance</h2>
  <div class="box">
    <p>S4Silicon focuses on powerful processors, AI integration, and futuristic design...</p>
    <p>Every device is engineered with precision to deliver unmatched speed and reliability...</p>
  </div>
</section>

<section id="whyus" class="fade-up">
  <h2 style="color:#c266ff">Why Choose S4Silicon?</h2>
  <div class="box">
    <p>We blend cutting-edge innovation with premium aesthetics...</p>
    <p>Our customer-first approach ensures a seamless tech experience...</p>
  </div>
</section>

<section id="reviews" class="zoom-in">
  <h2 style="color:#c266ff">Customer Reviews</h2>
  <div class="box">
    ⭐⭐⭐⭐⭐ “Absolutely stunning technology and design!”  
    <br><br>
    ⭐⭐⭐⭐⭐ “The performance blew my expectations away.”  
  </div>
</section>

<section id="contact" class="slide-left">
  <h2 style="color:#c266ff">Get in Touch</h2>
  <div class="box">
    Email: support@s4silicon.com <br>
    Phone: +1 800 777 2026
  </div>
</section>

</div>

<footer>
  <div class="footer-grid">
    <div>
      <h3>S4Silicon</h3>
      <p>Luxury innovation meets futuristic performance.</p>
    </div>
    <div>
      <h3>Quick Links</h3>
      <a href="#">Products</a>
      <a href="#">Support</a>
      <a href="#">Warranty</a>
    </div>
    <div>
      <h3>Legal</h3>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms</a>
    </div>
  </div>
  <p style="text-align:center;margin-top:40px;">© <?php echo date("Y"); ?> S4Silicon. All rights reserved.</p>
</footer>

</body>
</html>
