<script setup>
import NavBar from '@/components/NavBar.vue';
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
  <div class="about-us-content-2">
    <center><router-link to="/createreview"><button type="submit" class="btn">Add Review</button></router-link></center>
  </div>

  <div class="about-us-content-2">
    Testimonials & Reviews
  </div>

  <div class="about-us-text-2">
    <p>Great customer service is the heart of our business. Hear from our happy customers who kindly shared their opinion.</p>
  </div>

  <div class="review-container">
    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        Superb service, delicious drinks, accommodating owner! You will not regret booking them for your event! Thank you Sir Roy!
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Toby Menese</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>

    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        Overall service was superb! Sobrang friendly and professional ng mga bartenders and sir Roy was so accommodating even dun sa mga late and urgent requests namin. Will definitely book again for future events!
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Luis Pangan</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>
    <div class="review-box">
        <div class="review-ratings-container">
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        </div>
        <div class="review-comment">
            Cocktails are so good! Even the refresher drinks! So worth it. Thank you for being a part of our wedding. Highly recommended. Ang ganda pa ng bar set up. Our guests enjoyed so much. More clients to come. God bless!
        </div>

        <div class="review-profile">
          <div class="profile-container">
            <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
          </div>
          <div class="name-container">
            <p>Vanessa Escobido</p>
            <p class="client"> Client </p>
          </div>
        </div>
    </div>
  </div>

  <div class="review-container">
    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        Highly recommended mobile bar for your future events. If you are still undecided, pwede kayong mag order ng cocktails nila to try. Our guest enjoyed the drinks and the service to the very last minute.
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Kenneth Ednalino</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>

    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        We got Sir Roy and his team’s service for our company year end party and everyone only had good things to say about their drinks! thankful that they squeezed our booking though we confirmed a little late. Though the team of 4 had to serve 500+ pax that night, the staff were efficient, respectful and attentive. Kudos to Midnights team and Sir Roy. See you in our next event!
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Arnie Abrea</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>
    <div class="review-box">
        <div class="review-ratings-container">
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        </div>
        <div class="review-comment">
            Sobrang worth it and reasonable price. Ang Sarap ng drinks – and ang elegant ng set up nila and accommodating staff! Sobrang Happy kami and one of the highlights of our wedding! See you sa next event namin 🙂
        </div>

        <div class="review-profile">
          <div class="profile-container">
            <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
          </div>
          <div class="name-container">
            <p>Kieffer Quitilen</p>
            <p class="client"> Client </p>
          </div>
        </div>
    </div>
  </div>

  <div class="review-container">
    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        It was a breeze in having you as our mobile bar during the wedding! Thank you so much for the service beyond our expectations. Highly recommended ito! Book them sa special events niyo
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Francesca Torres Alombro</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>

    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        Midnights Mobile Bar really made our wedding reception more special and memorable, one of the best decision we had. We really had so much fun because of you Midnights Mobile Bar. Thank you so much sir Roy Merto🍻
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Blaire Ybañez</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>
    <div class="review-box">
        <div class="review-ratings-container">
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        </div>
        <div class="review-comment">
            We were very happy to have Midnights Mobile Bar at our corporate event. We would like to thank Sir Roy for accommodating us at a very short notice. Super professional and super easy to work with. We do hope to have you with us again on our next corporate event.
        </div>

        <div class="review-profile">
          <div class="profile-container">
            <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
          </div>
          <div class="name-container">
            <p>Isiah Beltrano</p>
            <p class="client"> Client </p>
          </div>
        </div>
    </div>
  </div>

  <div class="review-container">
    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        Thank you Midnights Mobile Bar for providing and serving delicious drinks to our guests during our wedding last Dec 29,2023! You were very accommodating to our requests, especially in providing additional ice and coolers for our guests’ liquor bottles. We had a great time partying with you! Highly recommended for your events!
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Kenneth Ednalino</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>

    <div class="review-box">
      <div class="review-ratings-container">
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        <img src="@/assets/icons/star.svg" alt="" class="review-star" />
      </div>
      <div class="review-comment">
        Thank you for being a part of my son’s birthday celebration! The drinks were such a hit and guests enjoyed them! Thank you again. Highly recommended
      </div>

      <div class="review-profile">
        <div class="profile-container">
          <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
        </div>
        <div class="name-container">
          <p>Samantha Tan Co</p>
          <p class="client"> Client </p>
        </div>
      </div>
    </div>
    <div class="review-box">
        <div class="review-ratings-container">
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
          <img src="@/assets/icons/star.svg" alt="" class="review-star" />
        </div>
        <div class="review-comment">
            Thank you Midnights Mobile Bar for the great drinks and bartending services during our wedding reception. 🍸🍹 Our guests enjoyed the diverse selection of cocktails and friendly personality of the bartenders. 👏 We also appreciated na umikot pa sila and went to the guests tables to serve drinks during our after party. 🎉
        </div>

        <div class="review-profile">
          <div class="profile-container">
            <img src="@/assets/rovick.jpg" alt="" class="user-pic" />
          </div>
          <div class="name-container">
            <p>Isabel Sanchez</p>
            <p class="client"> Client </p>
          </div>
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
  padding: 1.2rem;
}

.review-ratings-container{
  flex:1;
  background-color: transparent;
  margin-top:1rem;
}

.review-comment {
  font-weight: bold;
  color: #FFF;
  font-size: 1.2rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  margin-top: 2rem;
  line-height: 1.4;
  vertical-align: top; /* Align text to the top */
}   

.review-profile{
  flex:0.5;
  /* border: 1px solid #fff; */
  display: flex;
  flex-direction: row;
  margin-top: 1.5rem;
}
.profile-container{
  flex:0.1;
  background-color: transparent;
  display:flex;
  
}
.name-container{
  flex:0.9;
  /* background-color:pink; */
  padding: 0 0 0 0.4rem; /*top, right, bottom, left*/
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-weight:bold;
  justify-content: center;
  flex-direction: column;
  display:flex;
  font-size: 1.1rem;
  
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
  background-size: cover; /* or specify a fixed size, e.g., 50% */
  height:auto;
  align-items: center;
  justify-content: center;
 
  min-height: 30rem;
  display:flex;
  flex-direction: column;
  position: relative;
}

.inquire-black-screen{
  background-color:rgb(0, 0, 0, 0.8); /*opacity */
  width: 100%;
  display:flex;
  justify-content: center;
  align-items: center;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 2.5rem;
  height:100%;
  position: absolute;
  
}

.inquire-text{
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 3.5rem;
  font-weight: bold;
  height:auto;
  
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

.btn {
    width: 150%;
    height: 45px;
    background: #fff;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
    margin-top: 10px;
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: black;
    color: #fff; 
}
</style>
