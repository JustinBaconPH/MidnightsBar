<script setup>
import { RouterLink } from 'vue-router';
import { ref } from 'vue';

const showManageDropdown = ref(false);
const showUserDropdown = ref(false);

const toggleManageDropdown = () => {
  showManageDropdown.value = !showManageDropdown.value;
  // Close user dropdown when opening manage dropdown
  if (showManageDropdown.value) {
    showUserDropdown.value = false;
  }
};

const toggleUserDropdown = () => {
  showUserDropdown.value = !showUserDropdown.value;
  // Close manage dropdown when opening user dropdown
  if (showUserDropdown.value) {
    showManageDropdown.value = false;
  }
};

// Close dropdown when clicking outside
document.body.addEventListener('click', closeDropdownOnClickOutside);

function closeDropdownOnClickOutside(event) {
  const manageDropdown = document.querySelector('.manage-dropdown-content');
  const userDropdown = document.querySelector('.user-dropdown-content');
  const dropdownButton = document.querySelector('.dropdown-button');
  if (manageDropdown && dropdownButton) {
    if (!manageDropdown.contains(event.target) && !dropdownButton.contains(event.target)) {
      showManageDropdown.value = false;
    }
  }
  if (userDropdown && dropdownButton) {
    if (!userDropdown.contains(event.target) && !dropdownButton.contains(event.target)) {
      showUserDropdown.value = false;
    }
  }
}
</script>

<template>
<nav>
    <div class="menu-container">
      <ul>
        <li><RouterLink to="/managereviews" class="nav-link" active-class="active">MANAGE REVIEW</RouterLink></li>
        <li><RouterLink to="/managebooking" class="nav-link" active-class="active">MANAGE BOOKING</RouterLink></li>
        <li><RouterLink to="/manageaccounts" class="nav-link" active-class="active">MANAGE PROFILE</RouterLink></li>
      </ul>
    </div>
    <div class="user-container">
      <button @click="toggleUserDropdown" class="user-btn">
        <img src="@/assets/rovick.jpg" alt="" class="account-pic" />
        <p class="username-text">Rovick Merto</p>
      </button>
      <!-- Dropdown menu -->
      <transition name="fade">
        <div v-if="showUserDropdown" class="dropdown-content">
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


nav{
    position:fixed;
    height:4.4rem;
    background-color: #000;
    width: 100%;
    display:flex;
    z-index: 1;
}

.username-text{
    color:#fff;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    font-size: 1rem;
    font-weight: bold;
    
    width: 8rem;
}
.account-pic,.username-text{
    display:inline-block;
    vertical-align: middle;
}
.account-pic{
    border-radius: 50%;
    height:2.6rem;
    width:2.6rem;
    margin-right:0.8rem;
    margin-left:1rem
}
.blank-container{
    
    flex: 0.1;
}
.user-container {
    flex: 0.15;
    display: flex;
    flex-direction: row;
    margin-left: auto;
}
.user-container >ul{
     margin:0.7rem 0 0;
     
     padding: 0;
     flex:1;
}

.user-container >ul>li{
     margin-top: 0;
}
.menu-container{
    flex:0.82;
    display:flex;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    
  
    
}

.menu-container > ul {
  margin: 0;
  width: 100%; /* Set width to 100% */
  height: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center; /* Center align the items */
  align-items: center; /* Vertically center the items */
}

.menu-container > ul > li {
  list-style: none;
  margin-right: 20px;
}


.menu-container > ul > li > a{
    height:100%;
    width: 100%;
    display:block;
    text-decoration: none;
    color:#fff;
    font-weight: bold;
    text-align:center;
    box-sizing: border-box;
    padding-top: 1.7rem;
    padding-bottom: 1.7rem;
    font-size: 1rem;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    cursor: pointer;
  
    
}

.user-container >ul>li{
 list-style: none;
}

@media  only screen and (max-width:1000px) {
    nav{background-color: red;}
}

@media  only screen and (max-width:800px) {
    nav{background-color: yellow;}
    
}

.nav-link {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  text-align: center;
  box-sizing: border-box;
  padding-top: 1.9rem;
  padding-bottom: 1.9rem;
  padding-left: 0.1rem;
  padding-right: 0.1rem;
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
  background-color: #3d3d3d; /* Change background color on hover */
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
  background-color: #1E1E1E;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  width: auto; /* Make width auto to match button */
  min-width: 15%; /* Ensure the dropdown is at least as wide as the button */
  height: auto; /* Make height auto to match button */
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

.dropdown-content-2 {
    position: absolute;
  top: calc(100%);
  right: 0;
  background-color: #1E1E1E;
  font-family: 'Poppins', 'Montserrat', sans-serif;
  width: auto; /* Make width auto to match button */
  min-width: 15%; /* Ensure the dropdown is at least as wide as the button */
  height: auto; /* Make height auto to match button */
  z-index: 1;
  margin-left: -50px;
}


.dropdown-content-2 a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition: background-color 0.3s;
}

.dropdown-content-2 a:hover {
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
