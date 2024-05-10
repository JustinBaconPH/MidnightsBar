<script setup>
import NavBar from "@/components/NavBar.vue";
import Footers from "@/components/Footers.vue";
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";


//MAKES BOOK RECORDS (WORKS)
const userData = ref({});
const selectedPackage = ref('');
const selectedDate = ref('');

const router = useRouter();

// WORKS
// Function to fetch user data upon component mount
const fetchUser = () => {
  const loggedInUserId = localStorage.getItem('loggedInUserId');
  if (loggedInUserId) {
    axios.get(`http://localhost/GRP5_MIDNIGHTS/backend/bookapi.php?action=get_all&user_id=${loggedInUserId}`)
      .then((response) => {
        userData.value = response.data[0]; // Assuming you're fetching only one user
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
const registerBooking = () => {
  const payload = {
    user_id: userData.value.user_id,
    package: selectedPackage.value,
    date: selectedDate.value
  };

  console.log('Selected ID:', payload.user_id);
  // Log to check if package is retrieved correctly
  console.log('Selected Package:', payload.package);
  // Log to check if date is retrieved correctly
  console.log('Selected Date:', payload.date);


  axios.post('http://localhost/GRP5_MIDNIGHTS/backend/bookapi.php?action=create_booking', payload)
    .then(response => {
      console.log('Booking created:', response.data);
      router.push('/home');
    })
    .catch(error => {
      console.error('Error creating booking:', error);
    });
};

const getTodayDate = () => {
  const today = new Date();
  const year = today.getFullYear();
  let month = today.getMonth() + 1;
  let day = today.getDate();

  // Add leading zero if month or day is less than 10
  month = month < 10 ? '0' + month : month;
  day = day < 10 ? '0' + day : day;

  // Format: YYYY-MM-DD
  return `${year}-${month}-${day}`;
};
</script>

<template>
  <main>
    <NavBar />
    <div class="background">
      <div class="opacity-black-screen">
        <div class="wrapper2">
          <div class="login-container">
            <form class="login-form" @submit.prevent="registerBooking">
              <div class="input-box">
                <input id="userId" type="hidden" v-model="userData.user_id" />
              </div>
              <div class="input-box">
                <label for="name">Name</label>
                <input id="name" class="block mt-1 w-full" type="text" v-model="userData.username" readonly />
              </div>
              <div class="input-box">
                <label for="contact">Contact Number</label>
                <input id="contact" class="block mt-1 w-full" type="text" v-model="userData.contact_number" readonly />
              </div>
              <div class="input-box">
                <label for="email">Email</label>
                <input id="email" class="block mt-1 w-full" type="text" v-model="userData.email" readonly />
              </div>
              <div class="input-box">
                <label for="package">Choose Package</label>
                <select id="package" class="block mt-1 w-full dropdown" v-model="selectedPackage">
                  <option value="Package 1">Package 1</option>
                  <option value="Package 2">Package 2</option>
                  <option value="Package 3">Package 3</option>
                  <option value="Package 4">Package 4</option>
                  <option value="Package 5">Package 5</option>
                  <option value="Package 6">Package 6</option>
                </select>
              </div>
              <div class="input-box">
                <label for="date">Choose Date</label>
                <input id="date" class="block mt-1 w-full" type="date" v-model="selectedDate" required
                  :min="getTodayDate()" />
              </div>
              <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn">Book Now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="wrapper">
          <label>Make A Reservation!</label>
        </div>
      </div>
    </div>
    <Footers />
  </main>
</template>



<style scoped>
.dropdown {
  width: 110% !important;
  padding: 20px 45px 20px 20px;
  border: 2px solid rgba(0, 0, 0);
  border-radius: 40px;
  background-color: transparent;
  color: black;
  font-size: 16px;
  outline: none;
  margin-top: 15px;
}

.dropdown option {
  background-color: rgba(255, 255, 255, 0.8);
  border: black;
  color: black;
}

.dropdown:focus {
  border-color: #3498db;
}

.wrapper {
  width: 420px;
  /* Keep the width as it is */
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.2);
  background-color: black;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  font-family: "Poppins", "Montserrat", sans-serif;
  font-size: 40px;
  font-weight: bold;
  color: #fff;
  border-radius: 10px;
  padding: 200px 40px 200px;
  position: absolute;
  left: 300px;
  display: flex;
  justify-content: center;
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
  padding: 30px 40px 30px 550px;
  text-align: left;
  position: absolute;
  /* Add this line */
  left: 270px;
  /* Adjust the left position according to your preference */
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

.wrapper h1 {
  font-size: 36px;
  text-align: center;
  font-family: "Poppins", "Montserrat", sans-serif;
}

.wrapper2 .input-box {
  position: relative;
  width: 90%;
  height: 20px;
  border-color: #000;
  margin: 80px 0;
  margin-top: 20px;
  padding-bottom: 10px;
}

.input-box input {
  width: 90%;
  height: 100%;
  background: transparent;
  border: black;
  outline: none;
  border: 2px solid rgba(255, 255, 255, 0.2);
  font-family: "Poppins", "Montserrat", sans-serif;
  border-radius: 40px;
  font-size: 16px;
  color: #000;
  padding: 20px 45px 20px 20px;
  margin-top: 15px;
  border: 2px solid black;
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
</style>
