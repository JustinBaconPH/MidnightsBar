<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

const router = useRouter();

// Reactive variables for user data
const userData = ref({});

// Fetch user data
const fetchUserData = () => {
  // Perform an API request to fetch user data
  // Assuming you have a user ID stored in localStorage
  const userId = localStorage.getItem('loggedInUserId');
  axios.get(`http://localhost/GRP5_MIDNIGHTS/backend/bookapi.php?action=get_all&user_id=${userId}`)
    .then(response => {
      userData.value = response.data[0]; // Assuming response.data contains user data and we want the first item
    })
    .catch(error => {
      console.error('Error fetching user data:', error);
    });
};

onMounted(fetchUserData);

// Update user data
const updateUser = () => {
  // Assuming you have form input values bound to these variables
  const userId = userData.value.user_id;
  const username = userData.value.username;
  const contactNumber = userData.value.contact_number;

  // Perform an API request to update user data
  axios.post('http://localhost/GRP5_MIDNIGHTS/backend/userapi.php?action=update_user', { userId, username, contactNumber })
    .then(response => {
      console.log('User data updated:', response.data);
      // Redirect the user to the profile page after successful update
      router.push('/home');
    })
    .catch(error => {
      console.error('Error updating user data:', error);
    });
};
</script>


<template>
  <main>
    <NavBar />
    <div class="wrapper">
      <div class="user-avatar">
        <img src="@/assets/rovick.jpg" alt="" class="account-pic" />
      </div>
      <h5 class="user-name">{{ userData.username }}</h5>
      <h6 class="user-email">{{ userData.email }}</h6>
    </div>

    <div class="wrapper2">
      <div class="login-container">
        <form class="login-form" action="#">
          <div class="input-box">
            <input id="userId" class="block mt-1 w-full" type="hidden" v-model="userData.user_id" />
          </div>
          <div class="input-box">
            <label for="name">Name</label>
            <input id="name" class="block mt-1 w-full" type="text" v-model="userData.username" />
          </div>
          <div class="input-box">
            <label for="contact">Contact Number</label>
            <input id="contact" class="block mt-1 w-full" type="text" v-model="userData.contact_number" />
          </div>
          <div class="input-box">
            <label for="email">Email</label>
            <input id="email" class="block mt-1 w-full" type="text" :value="userData.email" readonly />
          </div>
          <div class="flex items-center justify-end mt-4">
            <center><button type="submit" class="btn" @click.prevent="updateUser">Update</button></center>
          </div>
        </form>
      </div>
    </div>
  </main>
</template>


<style scoped>
.wrapper {
  width: 420px;
  /* Keep the width as it is */
  background-color: #fff;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(15px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 18px;
  font-weight: bold;
  color: #000;
  border-radius: 10px;
  padding: 30px 40px;
  position: absolute;
  left: 50%;
  top: 30%;
  transform: translate(-50%, -50%);
  /* Center the element both horizontally and vertically */
  display: flex;
  /* Use flexbox */
  flex-direction: column;
  /* Arrange children vertically */
  align-items: center;
  /* Center children horizontally */
  justify-content: center;
  /* Center children vertically */
}

.user-avatar {
  margin: 0 0 1rem 0;
}

.user-avatar img {
  width: 90px;
  height: 90px;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
}

h5.user-name {
  margin: 0 0 0.5rem 0;
}

h6.user-email {
  margin: 0;
  font-size: 0.8rem;
  font-weight: 400;
  color: #9fa8b9;
}

.wrapper2 {
  width: 420px;
  /* Keep the width as it is */
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.2);
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  font-family: "Poppins", "Montserrat", sans-serif;
  font-size: 18px;
  font-weight: bold;
  color: #000;
  border-radius: 10px;
  padding: 30px 40px;
  text-align: left;
  position: absolute;
  /* Adjust the top position to position it below wrapper1 */
  top: 72%;
  /* Adjust the left position according to your preference */
  left: 50%;
  transform: translate(-50%, -50%);
  /* Center the element both horizontally and vertically */
  display: flex;
  /* Use flexbox */
  flex-direction: column;
  /* Arrange children vertically */
  align-items: center;
  /* Center children horizontally */
  justify-content: center;
  /* Center children vertically */
}

.wrapper2 .btn {
  width: 50%;
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

.wrapper2 .btn:hover {
  background-color: black;
  color: #fff;
}

main {
  background-color: #1e1e1e;
  min-height: 100vh;
  height: auto;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.input-box {
  display: flex;
  /* Use flexbox to arrange items in a row */
  flex-direction: column;
  /* Arrange children vertically */
  margin-bottom: 20px;
}

.input-box label {
  margin-bottom: 5px;
  color: #555;
  font-size: 16px;
}

.input-box input {
  width: 100%;
  padding: 10px;
  border: 2px solid #ccc;
  color: #000;
  border-radius: 5px;
  font-size: 16px;
}

.input-box input:focus {
  border-color: #007bff;
  outline: none;
}

/* Additional styles to make inputs in the same row */
.input-box.row {
  flex-direction: row;
  /* Arrange children horizontally */
  align-items: center;
  /* Center children vertically */
}

.input-box.row label {
  margin-right: 10px;
  /* Add some space between label and input */
}
</style>