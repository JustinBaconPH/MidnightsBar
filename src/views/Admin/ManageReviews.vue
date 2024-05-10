<script setup>
import { ref, computed, onMounted } from 'vue';
import axios from 'axios';
import AdminNavBar from '@/components/AdminNavBar.vue';
import Footers from '@/components/Footers.vue';

const reviews = ref([]);
const pageSize = 5;
const currentPage = ref(1);
const totalPages = computed(() => Math.ceil(reviews.value.length / pageSize));
const showArchived = ref(false);

const archiveReview = (id) => {
  const data = {
    action: 'soft_archive',
    review_id: id
  };

  axios.post('https://sql107.infinityfree.com/GRP5_MIDNIGHTS/backend/reviewsapi.php', data)
    .then(() => {
      fetchReviews();
    })
    .catch((error) => {
      console.error('Error archiving review:', error);
    });
};

const unarchiveReview = (id) => {
  const data = {
    action: 'soft_unarchive',
    review_id: id
  };

  axios.post('https://sql107.infinityfree.com/GRP5_MIDNIGHTS/backend/reviewsapi.php', data)
    .then(() => {
      fetchReviews();
    })
    .catch((error) => {
      console.error('Error unarchiving review:', error);
    });
};

const fetchReviews = () => {
  const url = showArchived.value ? 'https://sql107.infinityfree.com/GRP5_MIDNIGHTS/backend/reviewsapi.php?action=get_all_deleted' : 'https://sql107.infinityfree.com/GRP5_MIDNIGHTS/backend/reviewsapi.php?action=get_all';
  axios.get(url)
    .then((response) => {
      reviews.value = response.data;
    })
    .catch((error) => {
      console.error('Error fetching data:', error)
    });
};

onMounted(fetchReviews);

const toggleShowArchived = () => {
  showArchived.value = !showArchived.value;
  fetchReviews();
};

const paginatedReviews = computed(() => {
  const startIndex = (currentPage.value - 1) * pageSize;
  const endIndex = startIndex + pageSize;
  return reviews.value.slice(startIndex, endIndex);
});

const prevPage = () => {
  if (currentPage.value > 1) {
    currentPage.value--;
  }
};

const nextPage = () => {
  if (currentPage.value < totalPages.value) {
    currentPage.value++;
  }
};
</script>

<template>
  <main>
    <AdminNavBar />
    <div class="container">
      <div class="content">
        <div class="text-center">
          <h1 class="">REVIEWS</h1>
        </div>
        <div class="add-button">
          <button @click="toggleShowArchived" :class="showArchived ? 'btn btn-danger' : 'btn btn-primary'">
            {{ showArchived ? 'Show Archived' : 'Show Unarchived' }}
          </button>
        </div>

        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th class="table-header text-center">Review ID</th>
                <th class="table-header text-center">User ID</th>
                <th class="table-header text-center">Content</th>
                <th class="table-header text-center">Stars</th>
                <th class="table-header text-center">Date</th>
                <th class="table-header text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(review, index) in paginatedReviews" :key="index">
                <td class="text-center">{{ review.review_id }}</td>
                <td class="text-center">{{ review.user_id }}</td>
                <td class="text-center text-overflow">{{ review.review_content }}</td>
                <td class="text-center">{{ review.review_stars }}</td>
                <td class="text-center">{{ review.review_date }}</td>
                <td class="text-center">
                  <button @click="showArchived ? unarchiveReview(review.review_id) : archiveReview(review.review_id)"
                    :class="showArchived ? 'btn btn-primary' : 'btn btn-danger'">
                    {{ showArchived ? 'Unarchive' : 'Archive' }}
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Pagination controls -->
        <div class="pagination justify-content-center">
          <button @click="prevPage" :disabled="currentPage === 1"
            class="btn btn-secondary pagination-button">Previous</button>
          <span class="mx-3">Page {{ currentPage }} of {{ totalPages }}</span>
          <button @click="nextPage" :disabled="currentPage === totalPages"
            class="btn btn-secondary pagination-button">Next</button>
        </div>
      </div>
    </div>
    <footer>
      <Footers />
    </footer>
  </main>
</template>

<style scoped>
.container {
  display: flex;
  padding-top: 100px;
}

.text-center {
  text-align: center;
}

.sidebar {
  flex: 0 0 auto;
  width: 200px;
  background-color: #f2f2f2;
  padding: 20px;
}

.add-button {
  padding-bottom: 10px;
  display: flex;
  justify-content: center;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #005cbe;
  border-color: #00438a;
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}

.content {
  flex: 1;
  padding: 20px;
  overflow: auto;
  margin: 0 auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  border: 1px solid #ddd;
  padding: 8px;
}

th.table-header {
  background-color: #000;
  color: #fff;
}

.green-button {
  background-color: #4CAF50;
  color: white;
}

button {
  border: none;
  border-radius: 4px;
  padding: 8px 16px;
  cursor: pointer;
}

main {
  position: relative;
}

nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  z-index: 1000;
}

.pagination {
  margin-top: 20px;
  text-align: center;
}

.pagination-button {
  margin: 0 15px;
  padding: 8px 16px;
  cursor: pointer;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
}

.pagination-button:hover {
  background-color: #317233;
}

.text-overflow {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 200px;
}

footer {
  position: fixed;
  bottom: 0;
  width: 100%;
}
</style>
