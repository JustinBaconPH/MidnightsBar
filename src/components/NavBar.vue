<script setup>
import { RouterLink } from 'vue-router';
import { ref, onMounted } from 'vue';
import axios from 'axios';

const showDropdown = ref(false);
const toggleDropdown = () => {
  showDropdown.value = !showDropdown.value;
};

const userData = ref({});

// Fetch user data
const fetchUserData = () => {
  // Get loggedInUserId from localStorage
  const loggedInUserId = localStorage.getItem('loggedInUserId');

  if (loggedInUserId) {
    // Perform API request to fetch user data using the loggedInUserId
    axios.get(`http://localhost/GRP5_MIDNIGHTS/backend/bookapi.php?action=get_all&user_id=${loggedInUserId}`)
      .then(response => {
        // Assuming response.data contains user data and we want the first item
        userData.value = response.data[0];
      })
      .catch(error => {
        console.error('Error fetching user data:', error);
      });
  } else {
    console.error('loggedInUserId not found in localStorage');
  }
};

onMounted(fetchUserData);

</script>

<template>
  <nav>
    <div class="blank-container"></div>
    <div class="menu-container">
      <ul>
        <li>
          <RouterLink to="/home" class="nav-link" active-class="active">HOME</RouterLink>
        </li>
        <li>
          <RouterLink to="/about" class="nav-link" active-class="active">ABOUT US</RouterLink>
        </li>
        <li>
          <RouterLink to="/gallery" class="nav-link" active-class="active">GALLERY</RouterLink>
        </li>
        <li>
          <RouterLink to="/packages" class="nav-link" active-class="active">PACKAGES</RouterLink>
        </li>
        <li>
          <RouterLink to="/reviews" class="nav-link" active-class="active">REVIEWS</RouterLink>
        </li>
        <li>
          <RouterLink to="/contactus" class="nav-link" active-class="active">CONTACT US</RouterLink>
        </li>
        <li>
          <RouterLink to="/booking" class="nav-link" active-class="active">BOOK</RouterLink>
        </li>
      </ul>
    </div>
    <div class="blank-container"></div>
    <div class="user-container">
      <button @click="toggleDropdown" class="user-btn">
        <img src="@/assets/rovick.jpg" alt="" class="account-pic" />
        <p class="username-text text-overflow">{{ userData.username }}</p>
      </button>
      <!-- Dropdown menu -->
      <transition name="fade">
        <div v-if="showDropdown" class="dropdown-content">
          <router-link to="/editprofile">Edit Profile</router-link>
          <router-link to="/">Logout</router-link>
        </div>
      </transition>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      showDropdown: false
    };
  },
  methods: {
    toggleDropdown() {
      this.showDropdown = !this.showDropdown;
    }
  }
};
</script>

<style scoped>
.text-overflow {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 120px;
}

nav {
  position: fixed;
  height: 4.4rem;
  background-color: #000;
  width: 100%;
  display: flex;
  z-index: 1;
}

.username-text {
  color: #fff;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  font-size: 1rem;
  font-weight: bold;

  width: 8rem;
}

.account-pic,
.username-text {
  display: inline-block;
  vertical-align: middle;
}

.account-pic {
  border-radius: 50%;
  height: 2.6rem;
  width: 2.6rem;
  margin-right: 0.8rem;
  margin-left: 1rem
}

.blank-container {

  flex: 0.1;
}

.user-container {
  flex: 0.15;
  display: flex;
  flex-direction: row;
}

.user-container>ul {
  margin: 0.7rem 0 0;

  padding: 0;
  flex: 1;
}

.user-container>ul>li {
  margin-top: 0;
}

.menu-container {
  flex: 0.75;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Poppins', 'Montserrat', sans-serif;



}

.menu-container>ul {
  margin: 0;
  width: auto;
  height: 100%;
  display: flex;
  flex-direction: row;
  flex: 1;
  cursor: pointer;
}

.menu-container>ul>li {
  list-style: none;
  height: 100%;
  height: 100%;
  /* width: 10rem; */
  flex: 1;


}

.menu-container>ul>li>a {
  height: 100%;
  width: 100%;
  display: block;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  text-align: center;
  box-sizing: border-box;
  padding-top: 1.7rem;
  padding-bottom: 1.7rem;
  font-size: 1.2rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  cursor: pointer;


}

.user-container>ul>li {
  list-style: none;
}

@media only screen and (max-width:1000px) {
  nav {
    background-color: red;
  }
}

@media only screen and (max-width:800px) {
  nav {
    background-color: yellow;
  }

}

.nav-link {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  text-align: center;
  box-sizing: border-box;
  padding-top: 1.7rem;
  padding-bottom: 1.7rem;
  font-size: 1.2rem;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  cursor: pointer;
  transition: background-color linear 0.3s, color linear 0.3s;

}

.nav-link:hover {
  background-color: #3d3d3d;
}

.user-btn {
  background: none;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  color: #fff;
}

.user-btn:hover {
  background-color: #3d3d3d;
  /* Change background color on hover */
}

.user-btn:focus {
  outline: none;
}

.user-btn:hover .username-text {
  text-decoration: none;
}

.dropdown-content {
  position: absolute;
  top: calc(100%);
  right: 0;
  background-color: #000000;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  width: auto;
  /* Make width auto to match button */
  min-width: 13.85%;
  /* Ensure the dropdown is at least as wide as the button */
  height: auto;
  /* Make height auto to match button */
  z-index: 1;
}


.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition: background-color 0.3s;
}

.dropdown-content a:hover {
  background-color: #3d3d3d;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s;
}

.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
