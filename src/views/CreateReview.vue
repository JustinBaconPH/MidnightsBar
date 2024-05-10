<script setup>
import NavBar from "@/components/NavBar.vue";
import Footers from "@/components/Footers.vue";
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

const userData = ref({});
const selectedRating = ref('');
const selectedReview = ref('');
const router = useRouter();

const fetchUser = () => {
  const loggedInUserId = localStorage.getItem('loggedInUserId');
  if (loggedInUserId) {
    axios.get(`http://localhost/GRP5_MIDNIGHTS/backend/bookapi.php?action=get_all&user_id=${loggedInUserId}`)
      .then((response) => {
        userData.value = response.data[0];
      })
      .catch((error) => {
        console.error('Error fetching user data:', error)
      });
  } else {
    console.error('User ID not found in local storage');
  }
};

onMounted(fetchUser);

//WORKS DONT CHANGE
const newReview = () => {
  const payload = {
    user_id: userData.value.user_id,
    stars: selectedRating.value,
    content: selectedReview.value
  };

  console.log('Selected ID:', payload.user_id);
  // Log to check if package is retrieved correctly
  console.log('Selected Stars:', payload.stars);
  // Log to check if date is retrieved correctly
  console.log('Selected Content:', payload.content);


  axios.post('http://localhost/GRP5_MIDNIGHTS/backend/reviewsapi.php?action=new_review', payload)
    .then(response => {
      console.log('Review created:', response.data);
      router.push('/home');
    })
    .catch(error => {
      console.error('Error creating review:', error);
    });
};
</script>

<template>
  <main>
    <NavBar />
    <div class="background">
      <div class="opacity-black-screen">
        <div class="wrapper">
          <h1>Rate your experience!</h1>
          <div class="content">We highly value your feedback! Kindly take a moment to share your experiences with us!
          </div>
          <form class="login-form" @submit.prevent="newReview">
            <p class="text-label">Stars: </p>
            <select v-model="selectedRating" class="dropdown">
              <option :value="null" disabled>Select your rating</option>
              <option value="5">5 stars</option>
              <option value="4">4 stars</option>
              <option value="3">3 stars</option>
              <option value="2">2 stars</option>
              <option value="1">1 star</option>
            </select>
            <textarea v-model="selectedReview" cols="50" rows="6"
              placeholder="Tell us about your experience!"></textarea>
            <button type="submit" class="btn">Send</button>
          </form>
        </div>
      </div>
    </div>
    <Footers />
  </main>
</template>

<style scoped>
.dropdown {
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  border: 2px solid rgba(255, 255, 255, 0.2);
  border-radius: 5px;
  background-color: transparent;
  color: white;
  font-size: 16px;
  outline: none;
}

.dropdown option {
  background-color: rgba(0, 0, 0, 0.8);
  color: white;
}

.dropdown:focus {
  border-color: #3498db;
}

.text-label {
  margin-top: 10px;
}

.wrapper {
  width: 420px;
  /* Keep the width as it is */
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(15px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 18px;
  font-weight: bold;
  color: #fff;
  border-radius: 10px;
  padding: 30px 40px;
  position: absolute;
  /* Add this line */
  /* Adjust the left position according to your preference */
}

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
  background-image: url("@/assets/midnights-bg.JPG");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  min-height: 100vh;
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

.wrapper h1 {
  font-size: 36px;
  text-align: left;
  font-family: "Poppins", "Montserrat", sans-serif;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 10px 10px;
  margin-top: 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-family: "Poppins", "Montserrat", sans-serif;
  font-size: 16px;
  resize: none;
}

.wrapper .btn {
  width: 20%;
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

.wrapper .btn:hover {
  background-color: black;
  color: #fff;
}
</style>