<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const props = defineProps({
    review: Object
});

const user = ref(null);

// Fetch the username of the user who posted the review
const fetchUsername = () => {
    axios.get(`http://sql107.infinityfree.com/GRP5_MIDNIGHTS/backend/reviewsapi.php?action=get_by_id&review_id=${props.review.review_id}`)
        .then(response => {
            user.value = response.data.username;
        })
        .catch(error => {
            console.error('Error fetching username:', error);
        });
};

onMounted(fetchUsername);
</script>

<template>
    <div class="review-box">
        <div class="review-ratings-container">
            <img v-for="star in review.review_stars" :key="star" src="/assets/icons/star.svg" alt=""
                class="review-star" />
        </div>
        <div class="review-comment mx-auto">
            <p class="text-overflow text-left">{{ review.review_content }}</p>
        </div>

        <div class="review-profile">
            <div class="profile-container">
                <img src="/assets/rovick.jpg" alt="" class="user-pic" />
            </div>
            <div class="name-container">
                <p>{{ user }}</p>
                <p class="client">Client</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.review-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 1rem;
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
    margin-top: 1rem;
    line-height: 1.4;
    word-break: break-all;
    max-height: calc(1.3rem * 7);
    overflow: hidden;
    position: relative;
}

.review-comment::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 1.4rem;
    background: linear-gradient(to bottom, transparent, #000 50%);
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
    color: #FFF;
}

.name-container>p {
    padding: 0.17rem 0.4rem;
    margin: 0;
    /* border:1px solid #000; */
    color: #FFF;
}

.user-pic {

    height: 4.5rem;
    width: 4.5rem;
    border-radius: 0.4rem;
}

.client {
    font-weight: normal;
    color: #FFF;
}

.review-star {
    margin-right: 0.3rem;
}
</style>