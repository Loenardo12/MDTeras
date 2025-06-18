<div class="sidebar bg-indigo-800 text-white w-64 flex-shrink-0 flex flex-col">
    <div class="p-4 flex items-center">
        <i class="fas fa-utensils text-2xl mr-3"></i>
        <span class="logo-text text-xl font-bold">Food Admin</span>
    </div>

    <button class="mobile-menu-btn hidden p-4 text-white focus:outline-none" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <nav class="flex-1 overflow-y-auto">
        <ul class="space-y-2 px-4 py-2">
            <li>
                <a href="#" class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center p-3 rounded-lg bg-indigo-900">
                    <i class="fas fa-utensils mr-3"></i>
                    <span class="nav-text">Food Menu</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-users mr-3"></i>
                    <span class="nav-text">Customers</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    <span class="nav-text">Orders</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span class="nav-text">Reports</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700">
                    <i class="fas fa-cog mr-3"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="p-4 border-t border-indigo-700 flex items-center">
        <img src="https://via.placeholder.com/40" alt="User" class="rounded-full mr-3">
        <div class="user-info">
            <div class="font-medium">Admin User</div>
            <div class="text-sm text-indigo-300">admin@example.com</div>
        </div>
    </div>
</div>
