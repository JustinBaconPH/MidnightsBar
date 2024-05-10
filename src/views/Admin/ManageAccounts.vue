<script setup>
import { ref, computed } from 'vue';
import AdminNavBar from '@/components/AdminNavBar.vue';
import Footers from '@/components/Footers.vue';
import { RouterLink } from 'vue-router';

// Define number of bookings per page
const pageSize = 5;

// Define current page number
const currentPage = ref(1);

const bookings = [
  { name: 'John Doe', contactNumber: '1234567890', email: 'john@example.com' },
  { name: 'Jane Smith', contactNumber: '0987654321', email: 'jane@example.com' },
  { name: 'John Doe', contactNumber: '1234567890', email: 'john@example.com' },
  { name: 'Jane Smith', contactNumber: '0987654321', email: 'jane@example.com' },
  { name: 'John Doe', contactNumber: '1234567890', email: 'john@example.com' },
  { name: 'Jane Smith', contactNumber: '0987654321', email: 'jane@example.com' },
  { name: 'John Doe', contactNumber: '1234567890', email: 'john@example.com' },
  { name: 'Jane Smith', contactNumber: '0987654321', email: 'jane@example.com' },
  // Add more data as needed
];

// Method to archive booking
const archiveBooking = (index) => {
  // Perform archiving action here
  console.log('Booking archived:', bookings[index]);
};

// Computed property to paginate bookings
const paginatedBookings = computed(() => {
  const startIndex = (currentPage.value - 1) * pageSize;
  const endIndex = startIndex + pageSize;
  return bookings.slice(startIndex, endIndex);
});

// Method to navigate to previous page
const prevPage = () => {
  if (currentPage.value > 1) {
    currentPage.value--;
  }
};

// Method to navigate to next page
const nextPage = () => {
  const totalPages = Math.ceil(bookings.length / pageSize);
  if (currentPage.value < totalPages) {
    currentPage.value++;
  }
};
</script>

<template>
    <main>
      <AdminNavBar/>
      <div class="container">
        <div class="content">
          <center><h1>ACCOUNTS</h1></center>
          <table>
            <thead>
              <tr>
                <th class="table-header">Name</th>
                <th class="table-header">Contact Number</th>
                <th class="table-header">Email</th>
                <th class="table-header">Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Loop through paginated bookings -->
              <tr v-for="(item, index) in paginatedBookings" :key="index">
                <td>{{ item.name }}</td>
                <td>{{ item.contactNumber }}</td>
                <td>{{ item.email }}</td>
                <td><button @click="archiveBooking(index)">Archive</button></td>
              </tr>
            </tbody>
          </table>
          <!-- Pagination controls -->
          <div class="pagination">
            <button @click="prevPage" :disabled="currentPage === 1" class="pagination-button">Previous</button>
            <span>Page {{ currentPage }} of {{ Math.ceil(bookings.length / pageSize) }}</span>
            <button @click="nextPage" :disabled="currentPage === Math.ceil(bookings.length / pageSize)" class="pagination-button">Next</button>
          </div>
        </div>
      </div>
      <Footers />
    </main>
  </template>
  
  <style scoped>
  .container {
    display: flex;
    padding-top: 100px;
  }
  .sidebar {
    flex: 0 0 auto;
    width: 200px; /* Set width of sidebar */
    background-color: #f2f2f2;
    padding: 20px;
  }
  .content {
    flex: 1;
    padding: 20px;
    overflow: auto; /* Add overflow to enable scrolling if content exceeds height */
    margin: 0 auto; /* Center the content */
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 8px;
  }
  th.table-header {
    background-color: #000;
    color: #fff;
  }
  button {
    padding: 8px 16px;
    cursor: pointer;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
  }
  
  /* Navbar styles */
  main {
    position: relative;
  }
  
  /* Fixed navbar at the top */
  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    z-index: 1000; /* Ensure navbar stays on top of other content */
  }
  
  /* Pagination styles */
  .pagination {
    margin-top: 20px;
    text-align: center;
  }
  .pagination-button {
    margin: 0 5px;
  }
  </style>