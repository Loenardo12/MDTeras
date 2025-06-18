<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }
        .sidebar.collapsed {
            width: 70px;
        }
        .sidebar.collapsed .nav-text {
            display: none;
        }
        .sidebar.collapsed .logo-text {
            display: none;
        }
        .sidebar.collapsed .nav-item {
            justify-content: center;
        }
        .main-content {
            transition: all 0.3s ease;
        }
        .main-content.expanded {
            margin-left: 70px;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 1000;
                left: -250px;
            }
            .sidebar.active {
                left: 0;
            }
            .main-content {
                margin-left: 0 !important;
            }
            .mobile-menu-btn {
                display: block !important;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        @include('admin.components.sidebar')

        <!-- Main Content -->
        <div class="main-content flex-1 overflow-y-auto">
            <!-- Top Navigation -->
            @include('admin.components.header')


            <!-- Content -->
            <main class="p-6">
                <!-- Action Buttons -->
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-bold">Menu Items</h2>
                        <p class="text-gray-600">Manage your restaurant's food menu</p>
                    </div>
                    <button onclick="openAddModal()" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-plus mr-2"></i> Add New Item
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-indigo-100 text-indigo-600 mr-4">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div>
                                <p class="text-gray-500">Total Items</p>
                                <h3 class="text-xl font-bold">124</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <p class="text-gray-500">Popular Items</p>
                                <h3 class="text-xl font-bold">28</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                                <i class="fas fa-tag"></i>
                            </div>
                            <div>
                                <p class="text-gray-500">Categories</p>
                                <h3 class="text-xl font-bold">12</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-100 text-red-600 mr-4">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div>
                                <p class="text-gray-500">Special Offers</p>
                                <h3 class="text-xl font-bold">5</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Items Table -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-4 border-b flex justify-between items-center">
                        <div class="relative w-64">
                            <input type="text" placeholder="Search menu items..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <div class="flex space-x-2">
                            <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option>All Categories</option>
                                <option>Appetizers</option>
                                <option>Main Courses</option>
                                <option>Desserts</option>
                                <option>Drinks</option>
                            </select>
                            <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option>Sort by</option>
                                <option>Name (A-Z)</option>
                                <option>Name (Z-A)</option>
                                <option>Price (Low-High)</option>
                                <option>Price (High-Low)</option>
                            </select>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://via.placeholder.com/50" alt="Spaghetti" class="h-10 w-10 rounded-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium">Spaghetti Carbonara</div>
                                        <div class="text-sm text-gray-500">Italian</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Main Course
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $12.99
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Available
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                        <button class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://via.placeholder.com/50" alt="Caesar Salad" class="h-10 w-10 rounded-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium">Caesar Salad</div>
                                        <div class="text-sm text-gray-500">Healthy</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Appetizer
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $8.99
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Available
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                        <button class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://via.placeholder.com/50" alt="Chocolate Cake" class="h-10 w-10 rounded-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium">Chocolate Lava Cake</div>
                                        <div class="text-sm text-gray-500">Sweet</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Dessert
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $6.99
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Limited
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                        <button class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://via.placeholder.com/50" alt="Burger" class="h-10 w-10 rounded-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium">Classic Burger</div>
                                        <div class="text-sm text-gray-500">American</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Main Course
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $9.99
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Available
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                        <button class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="https://via.placeholder.com/50" alt="Sushi" class="h-10 w-10 rounded-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium">California Roll</div>
                                        <div class="text-sm text-gray-500">Japanese</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Appetizer
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $10.99
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Out of Stock
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                        <button class="text-red-600 hover:text-red-900">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">24</span> results
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </button>
                            <button class="px-3 py-1 border rounded-md text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                1
                            </button>
                            <button class="px-3 py-1 border rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                2
                            </button>
                            <button class="px-3 py-1 border rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                3
                            </button>
                            <button class="px-3 py-1 border rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Add Food Item Modal -->
    <div id="addModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Food Item</h3>
                        <button onclick="closeAddModal()" class="text-gray-400 hover:text-gray-500">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="mt-4">
                        <form>
                            <div class="mb-4">
                                <label for="itemName" class="block text-sm font-medium text-gray-700">Item Name</label>
                                <input type="text" id="itemName" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="itemDescription" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="itemDescription" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="itemCategory" class="block text-sm font-medium text-gray-700">Category</label>
                                    <select id="itemCategory" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                        <option>Appetizers</option>
                                        <option>Main Courses</option>
                                        <option>Desserts</option>
                                        <option>Drinks</option>
                                        <option>Specialties</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="itemPrice" class="block text-sm font-medium text-gray-700">Price ($)</label>
                                    <input type="number" step="0.01" id="itemPrice" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="itemImage" class="block text-sm font-medium text-gray-700">Image</label>
                                <div class="mt-1 flex items-center">
                                    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </span>
                                    <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Upload
                                    </button>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">Status</label>
                                <div class="mt-2 space-y-2">
                                    <div class="flex items-center">
                                        <input id="available" name="status" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="available" class="ml-2 block text-sm text-gray-700">Available</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="limited" name="status" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="limited" class="ml-2 block text-sm text-gray-700">Limited Availability</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="unavailable" name="status" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="unavailable" class="ml-2 block text-sm text-gray-700">Unavailable</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Save Item
                    </button>
                    <button type="button" onclick="closeAddModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle sidebar
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');

            if (window.innerWidth <= 768) {
                sidebar.classList.toggle('active');
            } else {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
            }
        }

        // Modal functions
        function openAddModal() {
            document.getElementById('addModal').classList.remove('hidden');
        }

        function closeAddModal() {
            document.getElementById('addModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('addModal');
            if (event.target === modal) {
                closeAddModal();
            }
        }
    </script>
</body>
</html>
