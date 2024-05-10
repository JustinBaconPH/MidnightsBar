<script setup>
import NavBar from '@/components/GuestNavBar.vue';
import Footers from '@/components/Footers.vue';
import { RouterLink } from 'vue-router';
</script>

<template>
<main>
  <NavBar/>
  <div class="background">
    <div class="opacity-black-screen">
      <div class="business-logo-container">
        <img src="@/assets/midnights-logo.png" alt="" class="business-logo">
      </div>
    </div>
  </div>

  <div class="about-us-content">
  </div>

  <div class="inquire-content">
    <div class="inquire-black-screen">
        <p class="inquire-text">Basic Packages</p> 
    </div>
  </div>

  <div class="review-container">
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 1</p>
        <p class="packages-text-2">Approximately for 30 pax.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
            <li> P283 pesos per person</li>
            <li> Portable Mobile Bar with Lights</li>
            <li> 4 hours open bar with free flowing drinks</li>
            <li> 2-3 bartenders</li>
            <li> 5 Different cocktails, sangria wine, whiskey, tequila & brandy</li>
            <li> Appropriate glassware and garnishes</li>
            <li> Free service of client’s liquors</li>
            <li>Beer Pong table (Optional)</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P8,500.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 2</p>
        <p class="packages-text-2">Approximately for 50 pax.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
            <li> P200 pesos per person</li>
            <li> Portable Mobile Bar with Lights</li>
            <li> 4 hours open bar with free flowing drinks</li>
            <li> 2-3 bartenders</li>
            <li> 5 Different cocktails, sangria wine, whiskey, tequila & brandy</li>
            <li> Appropriate glassware and garnishes</li>
            <li> Free service of client’s liquors</li>
            <li>Beer Pong table (Optional)</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P10,000.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 3</p>
        <p class="packages-text-2">Approximately for 80 pax.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
            <li> P143 pesos per person</li>
            <li> Portable Mobile Bar with Lights</li>
            <li> 4 hours open bar with free flowing drinks</li>
            <li> 2-3 bartenders</li>
            <li> 5 Different cocktails, sangria wine, whiskey, tequila & brandy</li>
            <li> Appropriate glassware and garnishes</li>
            <li> Free service of client’s liquors</li>
            <li>Beer Pong table (Optional)</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P11,500.00</p>
        </div>
      </div>
    </div>

    
</div>

<div class="review-container">
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 4</p>
        <p class="packages-text-2">Approximately for 100 pax.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
            <li> P130 pesos per person</li>
            <li> Portable Mobile Bar with Lights</li>
            <li> 4 hours open bar with free flowing drinks</li>
            <li> 2-3 bartenders</li>
            <li> 5 Different cocktails, sangria wine, whiskey, tequila & brandy</li>
            <li> Appropriate glassware and garnishes</li>
            <li> Free service of client’s liquors</li>
            <li>Beer Pong table (Optional)</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P13,000.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 5</p>
        <p class="packages-text-2">Approximately for 150 pax.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
            <li> P120 pesos per person</li>
            <li> Portable Mobile Bar with Lights</li>
            <li> 4 hours open bar with free flowing drinks</li>
            <li> 2-3 bartenders</li>
            <li> 5 Different cocktails, sangria wine, whiskey, tequila & brandy</li>
            <li> Appropriate glassware and garnishes</li>
            <li> Free service of client’s liquors</li>
            <li>Beer Pong table (Optional)</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P18,000.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 6</p>
        <p class="packages-text-2">Approximately for 200 pax.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
            <li> P115 pesos per person</li>
            <li> Portable Mobile Bar with Lights</li>
            <li> 4 hours open bar with free flowing drinks</li>
            <li> 2-3 bartenders</li>
            <li> 5 Different cocktails, sangria wine, whiskey, tequila & brandy</li>
            <li> Appropriate glassware and garnishes</li>
            <li> Free service of client’s liquors</li>
            <li>Beer Pong table (Optional)</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P23,000.00</p>
        </div>
      </div>
    </div>
</div>
    
    <div class="about-us-content">
  </div>

  <div class="inquire-content">
    <div class="inquire-black-screen">
        <p class="inquire-text">Premium Packages</p> 
    </div>
  </div>
  <div class="review-container">
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 1</p>
        <p class="packages-text-2">Approximately 100 servings.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
          <li> Mobile Bar Setup</li>
          <li>100 servings of cocktails (Gin & Tonic, Cosmopolitan, Tequila Sunrise, Mojito, Margarita, & Sangria Wine)</li>
          <li>Brands: Beefeater London, Dry Gin, Bacardi White Rum, Jose Cuervo Tequila, Absolut Vodka</li>
          <li>2 Bartenders</li>
          <li>4 Hours Open Bar</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P25,000.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 2</p>
        <p class="packages-text-2">Approximately 200 servings.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
          <li> Mobile Bar Setup</li>
          <li>200 servings of cocktails (Gin & Tonic, Cosmopolitan, Tequila Sunrise, Mojito, Margarita, & Sangria Wine)</li>
          <li>Brands: Beefeater London, Dry Gin, Bacardi White Rum, Jose Cuervo Tequila, Absolut Vodka</li>
          <li>2 Bartenders</li>
          <li>4 Hours Open Bar</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P35,000.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 3</p>
        <p class="packages-text-2">Approximately 300 servings.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
          <li> Mobile Bar Setup</li>
          <li>300 servings of cocktails (Gin & Tonic, Cosmopolitan, Tequila Sunrise, Mojito, Margarita, & Sangria Wine)</li>
          <li>Brands: Beefeater London, Dry Gin, Bacardi White Rum, Jose Cuervo Tequila, Absolut Vodka</li>
          <li>2 Bartenders</li>
          <li>4 Hours Open Bar</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P45,000.00</p>
        </div>
      </div>
    </div>
</div>

<div class="review-container">
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 4</p>
        <p class="packages-text-2">Approximately 400 servings.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
          <li> Mobile Bar Setup</li>
          <li>400 servings of cocktails (Gin & Tonic, Cosmopolitan, Tequila Sunrise, Mojito, Margarita, & Sangria Wine)</li>
          <li>Brands: Beefeater London, Dry Gin, Bacardi White Rum, Jose Cuervo Tequila, Absolut Vodka</li>
          <li>2 Bartenders</li>
          <li>4 Hours Open Bar</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P55,000.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 5</p>
        <p class="packages-text-2">Approximately 500 servings.</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
          <li> Mobile Bar Setup</li>
          <li>500 servings of cocktails (Gin & Tonic, Cosmopolitan, Tequila Sunrise, Mojito, Margarita, & Sangria Wine)</li>
          <li>Brands: Beefeater London, Dry Gin, Bacardi White Rum, Jose Cuervo Tequila, Absolut Vodka</li>
          <li>2 Bartenders</li>
          <li>4 Hours Open Bar</li>
        </ul>
      </div>

      <div class="review-profile">
       
        <div class="package-container">
          <p class="package-text">P65,000.00</p>
        </div>
      </div>
    </div>
    <div class="review-box">
      <div class="packages-text">
        <p class="packages-text">Package 6</p>
        <p class="packages-text-2">For more servings, unlimited premium drinks, or customized package. Message us for details.</p>
        <p class="packages-text-2">(This is a sample menu only. Let us know if you have preferred drinks.)</p>
      </div>
      <hr>
      <div class="review-comment">
        <ul>
          <li> Mobile Bar Setup</li>
          <li>ervings of cocktails (Gin & Tonic, Cosmopolitan, Tequila Sunrise, Mojito, Margarita, & Sangria Wine)</li>
          <li>Brands: Beefeater London, Dry Gin, Bacardi White Rum, Jose Cuervo Tequila, Absolut Vodka</li>
          <li>Bartenders</li>
          <li>Hours Open Bar</li>
        </ul>
      </div>

      
    </div>
</div>

  <Footers/>
</main>

</template>

<style scoped>
main{
  background-color: #000;
  min-height:100vh;
  height:auto;
  padding:0;
  margin:0;
  box-sizing:border-box;
  overflow:hidden;
  display:flex;
  flex-direction: column;
}

.background{
  background-image: url('@/assets/midnights-bg.JPG');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  min-height:100vh;
}

.business-logo-container{
  height:45rem;
  width: 68rem;
}

.business-logo{
  height:100%;
  width: 100%;
  object-fit:contain;
}

.opacity-black-screen{
  background-color:rgb(0, 0, 0, 0.8); /*opacity */
  height:100vh;
  width: 100vw;
  display:flex;
  justify-content: center;
  align-items: center;
}

p{
  color:#fff;
}

.about-us-content,.about-us-content-2{
  text-align:center;
  margin:auto;
  min-height:2rem;
  margin-top: 2rem;
  margin-bottom: rem;
  font-weight: bold;
  font-size: 2.5rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  color:#fff;
  background-color: transparent;
  height:auto;

}
.about-us-content-2{
  margin-top:8rem;
}
.about-us-text,.about-us-text-2{
  text-align:center;
  margin:auto;
  margin-left: 6rem;
  margin-right: 6rem;
  height:auto;  
  font-weight: bold;
  font-size: 1.3rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  margin-bottom: 4rem;
  height:auto;
}

.gallery-container,.review-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  margin-top: 2rem;
  background-color: transparent;
  width: 90%;
  margin: auto;
  margin-bottom: 1.2rem;
  padding: 2rem
}
.review-container{
  background-color: transparent;
  height:auto;
  justify-content: center;
  align-items: center;
  margin-bottom:0;
  
  padding-bottom: 0;
  padding-top: 1rem

}
.gallery-item {
  height: 30rem;
  padding: 0; 
  position: relative;
  /*overflow: hidden;*/
  justify-content: space-around;
  background-color: transparent;
  flex: 1;
  /* border: 1px solid #000; */
  margin: 0 0.8rem;
}
.gallery-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 30px;
  
}

.review-box{
  border: 0.1rem solid #FFF;
  display:flex;
  flex:1;
  justify-content: center;
  border-radius:2rem;
  margin:0.8rem;
  flex-direction: column;
  padding: 0 1.2rem 1.2rem;
  max-width: 29rem;
  
}

.review-ratings-container{
  flex:1;
  background-color: transparent;
  margin-top:1rem;
}

.review-comment{
  font-weight: bold;
  color:#FFF;
  font-size: 1.2rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  margin-top:2rem;
  line-height: 1.4;
  
}
.review-comment >ul{
  background-color: transparent;
  margin:0;
}

.review-comment >ul>li{
  margin-left: 2rem;
}

.review-profile{
  flex:1;
  /* border: 1px solid #fff; */
  display: flex;
  flex-direction: row;
  margin-top: 1.5rem;
  background-color: transparent;
}
.profile-container{
  flex:0.1;
  background-color: transparent;
  display:flex;
  justify-content: center;
  align-items: center;
  
}
.name-container{
  flex:1;
  /* background-color:pink; */
  padding: 0 0 0 0.4rem; /*top, right, bottom, left*/
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-weight:bold;
  justify-content: center;
  flex-direction: column;
  display:flex;
  
}

.name-container >p{
padding: 0.17rem 0.4rem;
margin: 0;
/* border:1px solid #000; */
}

.user-pic{

  height: 4.5rem;
  width:  4.5rem;
  border-radius: 0.4rem;
}

.client{
  font-weight: normal;
}

.review-star{
  margin-right: 0.3rem;
}

.button{
  text-decoration:none;
  color:#fff;
  font-size: 1.3rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  border: 1px solid #fff;
  padding: 1rem 2rem 1rem 2rem;
  border-radius: 0.5rem;
  height:1rem;
  cursor: pointer;
  transition:background-color linear 0.3s,color linear 0.3s;
}

.button:hover{
  background-color: #7f8080;
}

.inquire-content{
  background-image: url('@/assets/inquire2.jpg');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: 100%; /* or specify a fixed size, e.g., 50% */
  align-items: center;
  justify-content: center;
  margin-left: 4rem;
  margin-right: 4rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  margin-bottom: 5rem;
  border-radius: 2rem;
}
  

.inquire-logo-container{
  height: 5rem;
  width: 5rem;
}
.inquire-black-screen{
  background-color:rgb(0, 0, 0, 0.7); /*opacity */
  height:80vh;
  width: 100%;
  display:flex;
  justify-content: center;
  align-items: center;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 2.5rem;
}

.inquire-text{
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 3.5rem;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  margin-left: 3rem;
  margin-right: 3rem;
}

.reviews-button-content{
  text-align:center;
  margin:auto;
  min-height:8rem;
  margin-top: 2rem;
  margin-bottom: 3rem;
  font-weight: bold;
  font-size: 2.5rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  color:#fff;
  background-color: transparent;
  height:auto;

}
.packages-text,.packages-text-2{
    font-weight:bold;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    font-size: 2.5rem;
    margin-bottom:0;
}

.packages-text-2{
    font-size: 1.2rem;
    margin-bottom:1.5rem;
}

.package-container{
  flex:1;
  border: 0.1rem solid #FFF;
  padding: 0 0 0 rem; /*top, right, bottom, left*/
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-weight:bold;
  text-align: center;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  display:flex;
  width: 100%;
  height: 100%;
  
  
}
.package-text{
    font-weight: bold;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    font-size: 1.3rem;
}

hr{
    width:100%;
    border: 2px solid #fff;
    margin:0;
}

@media  only screen and (max-width:1000px) {
    nav{background-color: red;}
}

@media  only screen and (max-width:800px) {
    nav{background-color: yellow;}
    
}
</style>
