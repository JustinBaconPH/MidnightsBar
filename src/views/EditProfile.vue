<template>
    <main>
          <NavBar />
            <div class="wrapper">
                    <div class="user-avatar">
                      <img src="@/assets/rovick.jpg" alt="" class="account-pic" />
                    </div>
                    <h5 class="user-name">Rovick Merto</h5>
                    <h6 class="user-email">rovick@gmail.com</h6>
            </div>

            <div class="wrapper2">
          <div class="login-container">
              <form class="login-form" action="#" method="POST">
                  <div class="input-box">
                      <label for="name">Name</label>
                      <input id="name" class="block mt-1 w-full" type="text" value="Rovick Merto" />
                  </div>
                  <div class="input-box">
                      <label for="contact">Contact Number</label>
                      <input id="contact" class="block mt-1 w-full" type="text" value="0912345678901"/>
                  </div>
                  <div class="input-box">
                      <label for="email">Email</label>
                      <input id="email" class="block mt-1 w-full" type="text" value="rovickmerto@gmail.com"/>
                  </div>
                  <div class="flex items-center justify-end mt-4">
                      <center><button type="submit" class="btn">Update</button></center>
                  </div>
              </form>
          </div>
        </div>
          
    </main>
  </template>
  
  <script setup>
  import NavBar from "@/components/NavBar.vue";
  import { RouterLink } from "vue-router";
  </script>
  
  <style scoped>
.wrapper {
  width: 420px; /* Keep the width as it is */
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
  transform: translate(-50%, -50%); /* Center the element both horizontally and vertically */
  display: flex; /* Use flexbox */
  flex-direction: column; /* Arrange children vertically */
  align-items: center; /* Center children horizontally */
  justify-content: center; /* Center children vertically */
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
  transform: translate(-50%, -50%); /* Center the element both horizontally and vertically */
  display: flex; /* Use flexbox */
  flex-direction: column; /* Arrange children vertically */
  align-items: center; /* Center children horizontally */
  justify-content: center; /* Center children vertically */
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
  display: flex; /* Use flexbox to arrange items in a row */
  flex-direction: column; /* Arrange children vertically */
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
  border-radius: 5px;
  font-size: 16px;
}

.input-box input:focus {
  border-color: #007bff;
  outline: none;
}

/* Additional styles to make inputs in the same row */
.input-box.row {
  flex-direction: row; /* Arrange children horizontally */
  align-items: center; /* Center children vertically */
}

.input-box.row label {
  margin-right: 10px; /* Add some space between label and input */
}
  </style>
  