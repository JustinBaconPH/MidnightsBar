<script setup>
import NavBar from "@/components/NavBar.vue";
import Footers from "@/components/Footers.vue";
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

const userData = ref({});

// Define reactive variables for form inputs
const input_email = ref('');
const input_username = ref('');
const input_contact_number = ref('');
const input_password = ref('');

const router = useRouter();

const registerUser = () => {
  const payload = {
    email: input_email.value,
    username: input_username.value,
    contact_number: input_contact_number.value,
    password: input_password.value
  };

  console.log('Selected Email:', payload.email);
  // Log to check if package is retrieved correctly
  console.log('Selected Username:', payload.username);
  // Log to check if date is retrieved correctly
  console.log('Selected Contact Number:', payload.contact_number);
  // Log to check if date is retrieved correctly
  console.log('Selected Password:', payload.password);

  //check the type
  console.log('Email Data Type:', typeof input_email.value);
  console.log('Username Data Type:', typeof input_username.value);
  console.log('Contact Number Data Type:', typeof input_contact_number.value);
  console.log('Password Data Type:', typeof input_password.value);

  axios.post('http://sql107.infinityfree.com/GRP5_MIDNIGHTS/backend/userapi.php?action=create_user', payload)
    .then(response => {
      console.log('Account created:', response.data);
      router.push('/login');
    })
    .catch(error => {
      console.error('Error creating booking:', error);
    });
};
</script>

<template>
  <div class="background">
    <div class="opacity-black-screen">
      <div class="wrapper">
        <div class="login-container">
          <form class="login-form" @submit.prevent="registerUser">
            <h1>REGISTER</h1>
            <div class="input-box">
              <label for="email">Email</label>
              <input v-model="input_email" id="email" class="block mt-1 w-full" type="email" required autofocus
                autocomplete="email" maxlength="50" />
            </div>
            <div class="input-box">
              <label for="username">Username</label>
              <input v-model="input_username" id="username" class="block mt-1 w-full" type="text" required
                autocomplete="username" maxlength="25" />
            </div>

            <div class="input-box">
              <label for="contact_number">Contact Number</label>
              <input v-model="input_contact_number" id="contact_number" class="block mt-1 w-full" type="number" required
                autocomplete="contact_number" />
            </div>

            <div class="input-box">
              <label for="password">Password</label>
              <input v-model="input_password" id="password" class="block mt-1 w-full" type="password" required
                autocomplete="current-password" />
            </div>
            <div class="flex items-center justify-end mt-4">
              <button type="submit" class="btn">Register</button>
            </div>
            <div class="register-link">
              <p>Already have an account? <a href="login">Login</a></p>
            </div>
          </form>
        </div>
      </div>
      <div class="business-logo-container">
        <img src="/assets/midnights-logo.png" alt="" class="business-logo">
      </div>
    </div>
  </div>
</template>

<style>
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
  left: 90px;
  /* Adjust the left position according to your preference */
}

.wrapper h1 {
  font-size: 36px;
  text-align: center;
  font-family: 'Poppins', 'Montserrat', sans-serif;
}

.wrapper .input-box {
  position: relative;
  width: 90%;
  height: 20px;
  margin: 80px 0;
  margin-top: 20px;
  padding-bottom: 10px;
}

.input-box input {
  width: 90%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  font-family: 'Poppins', 'Montserrat', sans-serif;
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
  margin-top: 15px;
}

.input-box input::placeholder {
  color: #fff;
}

.input-box i {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}

.wrapper .wrapper .show-hide {
  display: flex;
  padding-left: 10px;
  font-size: 14.5px;
  margin: -15px 0 15px;
}

.wrapper .show-hide {
  accent-color: #fff;
  margin-right: 3px;
}

.wrapper .btn {
  width: 100%;
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
}

.wrapper .register-link {
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;
}

.register-link p a {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  text-decoration: underline;
}

input.transparent-input {
  background-color: rgba(0, 0, 0, 0) !important;
  border: none !important;
}

/* Add this style to make the form transparent */
.login-form {
  background-color: transparent !important;
  padding: 20px;
  border-radius: 10px;
}

/* Add this style to make the wrapper background image or color visible through the form */

/* Additional styles for better visibility of the form elements on a transparent background */
.login-form .form-group {
  margin-bottom: 15px;
}

.login-form .login-btn {
  background-color: #3490dc;
  /* Set a background color for the button */
  color: #ffffff;
  /* Set text color for the button */
  border: none;
}

.login-form a {
  color: #3490dc;
  /* Set color for links */
}

.background {
  flex: 1;
  position: relative;
}

/* Add your existing styles for background, logo container, and opacity */
.background {
  background-image: url('/assets/midnights-bg.jpg');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  min-height: 100vh;
}

.business-logo-container {
  position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
}

.business-logo {
  height: 100%;
  width: 100%;
  object-fit: contain;
}

.opacity-black-screen {
  background-color: rgba(0, 0, 0, 0.8);
  /*opacity */
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
