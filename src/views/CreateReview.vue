<script setup>
import NavBar from "@/components/NavBar.vue";
import Footers from "@/components/Footers.vue";
import { RouterLink } from "vue-router";
</script>

<template>
    <main>
      <NavBar />
      <div class="background">
        <div class="opacity-black-screen">
            <div class="wrapper">
                <h1>Rate your experience!</h1>
                <div class="content">We highly value your feedback! Kindly take a moment to share your experiences with us!</div>
                <textarea cols="50" rows="6" placeholder="Tell us about your experience!"></textarea>
                <button class="btn">Send</button>
            </div>
        </div>
    </div>
    <Footers/>
  </main>
</template>

<style scoped>
.wrapper {
  width: 420px; /* Keep the width as it is */
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
  position: absolute; /* Add this line */
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