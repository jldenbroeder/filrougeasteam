<style>
  .head-grid{
    display: grid;
    grid-template-columns: 100vw;
    grid-template-rows: 100vh;
    background-image: url(assets/img/headbackground.jpg);
    background-repeat: no-repeat;
    background-size: 100%;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    background-position:center;
    justify-items: center;
    align-items: center;
    z-index: 1;
  }
  .head-slider{ 
    width: 300px; 
    height: 300px; 
    overflow: hidden; 
    margin: 0 auto; 
    box-shadow: 1px 1px 20px #d5d5d5;
    z-index: 10;
  } 
  .head-slides{ 
    width: calc(300px * 3); 
    animation: glisse 7s infinite; 
  } 
  .head-slide{ 
    float:left 
  } 

  @keyframes glisse { 
    0% { 
      transform: translateX(0); 
    } 
    25% { 
      transform: translateX(0); 
    } 
    35% { 
      transform: translateX(-300px); 
    } 
    60% { 
      transform: translateX(-300px); 
    }
    70% { 
      transform: translateX(-600px); 
    } 
    95% { 
      transform: translateX(-600px); 
    }
    100% { 
      transform: translateX(0); 
    } 
  }
</style>
<div class="head-grid">
  <div class="head-slider">
    <div class="head-slides">
      <div class="head-slide"><img src="assets/img/slide1.jpg" alt=""></div>
      <div class="head-slide"><img src="assets/img/slide2.jpg" alt=""></div>
      <div class="head-slide"><img src="assets/img/slide3.jpg" alt=""></div>
    </div>
  </div>
</div>

