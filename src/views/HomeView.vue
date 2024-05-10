<script setup>
import NavBar from '@/components/NavBar.vue';
import Footers from '@/components/Footers.vue';
import { RouterLink } from 'vue-router';

import { ref, onMounted } from 'vue';
import axios from 'axios';
import ReviewBox from '@/components/ReviewBox.vue';

const reviews = ref([]);

onMounted(() => {
  axios.get('http://localhost/GRP5_MIDNIGHTS/backend/reviewsapi.php?action=get_all')
    .then((response) => {
      reviews.value = response.data;
    })
    .catch((error) => {
      console.error('Error fetching data:', error);
    });
});
</script>

<template>
  <main>
    <NavBar />
    <div class="background">
      <div class="opacity-black-screen">
        <div class="business-logo-container">
          <img src="@/assets/midnights-logo.png" alt="" class="business-logo">
        </div>
      </div>
    </div>

    <div class="about-us-content">
      <p>About Us</p>
    </div>

    <div class="about-us-text">
      <p>We cater quality alcoholic drinks and offer great service to our guests as standard. Aside from this, we
        provide drink mixes and new blends that are out of the ordinary. Our packages are different and more creative
        than other mobile bar businesses.</p>
    </div>

    <div class="gallery-container">
      <div class="gallery-item">
        <img src="@/assets/Image 4.jpg" alt="Image 1" class="gallery-image" />
      </div>
      <div class="gallery-item">
        <img src="@/assets/Image 2.jpg" alt="Image 2" class="gallery-image" />
      </div>
      <div class="gallery-item">
        <img src="@/assets/Image 6.jpg" alt="Image 6" class="gallery-image" />
      </div>
      <div class="gallery-item">
        <img src="@/assets/Image 3.jpg" alt="Image 4" class="gallery-image" />
      </div>
    </div>

    <div class="about-us-content-2">
      Customers love our service
    </div>

    <div class="about-us-text-2">
      <p>Great customer service is the heart of our business. Hear from our happy customers who kindly shared their
        opinion.</p>
    </div>

    <div class="review-container">
      <ReviewBox v-for="(review, index) in reviews.slice(0, 3)" :key="index" :review="review" />
    </div>

    <div class="reviews-button-content">
      <RouterLink to="/reviews" class="button">See More</RouterLink>
    </div>

    <div class="inquire-content">
      <div class="inquire-black-screen">
        <p class="inquire-text">Unforgettable memories begin with Midnights</p>
      </div>
    </div>

    <Footers />
  </main>

</template>

<style scoped>
main {
  background-color: #000;
  min-height: 100vh;
  height: auto;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.background {
  background-image: url('@/assets/midnights-bg.JPG');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  min-height: 100vh;
}

.business-logo-container {
  height: 45rem !important;
  width: 68rem !important;
}

.business-logo {
  height: 100% !important;
  width: 100% !important;
  object-fit: contain !important;
}

.opacity-black-screen {
  background-color: rgb(0, 0, 0, 0.8);
  /*opacity */
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}

p {
  color: #fff;
}

.about-us-content,
.about-us-content-2 {
  text-align: center;
  margin: auto;
  min-height: 2rem;
  margin-top: 2rem;
  margin-bottom: rem;
  font-weight: bold;
  font-size: 2.5rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  color: #fff;
  background-color: transparent;
  height: auto;

}

.about-us-content-2 {
  margin-top: 8rem;
}

.about-us-text,
.about-us-text-2 {
  text-align: center;
  margin: auto;
  margin-left: 6rem;
  margin-right: 6rem;
  height: auto;
  font-weight: bold;
  font-size: 1.3rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  margin-bottom: 4rem;
  height: auto;
}

.gallery-container,
.review-container {
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

.review-container {
  background-color: transparent;
  height: auto;
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

.review-box {
  border: 0.1rem solid #FFF;
  display: flex;
  flex: 1;
  justify-content: center;
  border-radius: 2rem;
  margin: 0.8rem;
  flex-direction: column;
  padding: 1.2rem;
}

.review-ratings-container {
  flex: 1;
  background-color: transparent;
  margin-top: 1rem;
}

.review-comment {
  font-weight: bold;
  color: #FFF;
  font-size: 1.2rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  margin-top: 2rem;
  line-height: 1.4;
}

.review-profile {
  flex: 0.5;
  /* border: 1px solid #fff; */
  display: flex;
  flex-direction: row;
  margin-top: 1.5rem;
}

.profile-container {
  flex: 0.1;
  background-color: transparent;
  display: flex;

}

.name-container {
  flex: 0.9;
  /* background-color:pink; */
  padding: 0 0 0 0.4rem;
  /*top, right, bottom, left*/
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-weight: bold;
  justify-content: center;
  flex-direction: column;
  display: flex;
  font-size: 1.1rem;

}

.name-container>p {
  padding: 0.17rem 0.4rem;
  margin: 0;
  /* border:1px solid #000; */
}

.user-pic {

  height: 4.5rem;
  width: 4.5rem;
  border-radius: 0.4rem;
}

.client {
  font-weight: normal;
}

.review-star {
  margin-right: 0.3rem;
}

.button {
  text-decoration: none;
  color: #fff;
  font-size: 1.3rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  border: 1px solid #fff;
  padding: 1rem 2rem 1rem 2rem;
  border-radius: 0.5rem;
  height: 1rem;
  cursor: pointer;
  transition: background-color linear 0.3s, color linear 0.3s;
}

.button:hover {
  background-color: #7f8080;
}

.inquire-content {
  background-image: url('@/assets/inquire2.jpg');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  /* or specify a fixed size, e.g., 50% */
  height: auto;
  align-items: center;
  justify-content: center;

  min-height: 30rem;
  display: flex;
  flex-direction: column;
  position: relative;
}

.inquire-black-screen {
  background-color: rgb(0, 0, 0, 0.8);
  /*opacity */
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 2.5rem;
  height: 100%;
  position: absolute;

}

.inquire-text {
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 3.5rem;
  font-weight: bold;
  height: auto;

}

.reviews-button-content {
  text-align: center;
  margin: auto;
  min-height: 8rem;
  margin-top: 2rem;
  margin-bottom: 3rem;
  font-weight: bold;
  font-size: 2.5rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  color: #fff;
  background-color: transparent;
  height: auto;

}
</style>
