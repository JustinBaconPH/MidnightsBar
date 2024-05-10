<script setup>
import {RouterLink} from 'vue-router';
</script>

<template>
<div class="container-footer">

<div class="sub-container">
    <ul>
        <li><RouterLink to="/">HOME</RouterLink></li>
        <li><RouterLink to="/about">ABOUT US</RouterLink></li>
        <li><RouterLink to="/gallery">GALLERY</RouterLink></li>
        <li><RouterLink to="/packages">PACKAGES</RouterLink></li>
        <li><RouterLink to="/reviews">REVIEWS</RouterLink></li>
        <li><RouterLink to="/contactus">CONTACT US</RouterLink></li>
    </ul>
</div>
<p class="footer-txt-1 top-margin">0968 861 1813 | 0906 001 4517</p>
<p class="footer-txt-1">midnightsmobilebar@gmail.com</p>
</div>
</template>

<style scoped>
.container-footer{
    min-height:10rem;
    margin-top: 3rem;
    background-color: #000;
    width: 100%;
    height:auto;
    text-align:center;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    font-size:1.1rem;
    padding-top: 2rem;
}

.footer-txt-1{
    color:#fff;
    display:flex;
    justify-content: center;
    margin:0 0 1rem 0;
    width: 1005;
    height:auto;
    font-size:1.2rem;
    font-weight:bold;
    font-family: 'Poppins', 'Montserrat', sans-serif;
}

.top-margin{margin-top:1.4rem;}

.sub-container{
    background-color: transparent;
    height:auto;
    width: 100%;
    color:#fff;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    font-size:1.1rem;
    line-height: 1;
}

.sub-container > ul{
    margin:1.5rem 0 0;
    background-color: transparent;
    font-family: 'Poppins', 'Montserrat', sans-serif;
    font-size:1.1rem;
}

.sub-container > ul > li {
    list-style:none;
    display:inline-block;
    margin:0 2.5rem 0 0;

}

.sub-container > ul > li > a{
    text-decoration: none;
    color:#fff;
    font-weight: bold;
    font-size:1.2rem;
    display:block;
    font-family: 'Poppins', 'Montserrat', sans-serif;
}

@media  only screen and (max-width:1000px) {
    nav{background-color: red;}
}

@media  only screen and (max-width:800px) {
    nav{background-color: yellow;}
    
}
</style>
