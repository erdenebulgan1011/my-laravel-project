<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Сэтгэцийн эрүүл мэнд')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3a86ff',
                        secondary: '#4cc9f0',
                        accent: '#7209b7',
                    }
                }
            }
        }
    </script>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-…"
    crossorigin="anonymous"
  />

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


<style>
    body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
        }




        .test-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            padding: 25px;
            margin-bottom: 30px;
        }

        .test-title {
            color: #1e21b6;
            margin-bottom: 20px;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
            font-weight: 600;
        }

        .form-check {
            margin-bottom: 12px;
        }

        .btn-submit {
            margin-top: 20px;
            background-color: #1e21b6;
            border-color: #1e21b6;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #151399;
            border-color: #151399;
        }

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        /* Improved Sidebar Styles */
        .sidebar {
            position: relative;
            top: 0px; /* Adjusted to leave space for header */
            left: 0;
            width: 280px;
            height: calc(100vh - 120px); /* Adjusted for header and footer */
            background-color: #ffffff;
            color: #333;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
            padding: 0;
            scrollbar-width: thin;
        }

        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 10px;
        }

        .sidebar-header {
            padding: 20px 25px 10px;
            border-bottom: 1px solid #f0f0f0;
        }

        .sidebar-header h3 {
            color: #1e21b6;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0;
        }

        .sidebar-category {
            margin: 15px 0 5px;
            padding: 0 25px;
        }

        .sidebar-category h5 {
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #6b7280;
            margin-bottom: 10px;
        }

        .sidebar-links {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .sidebar-link {
            color: #4b5563;
            text-decoration: none;
            margin: 2px 15px;
            font-size: 0.95rem;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            border-radius: 6px;
            transition: all 0.2s ease;
            position: relative;
        }

        .sidebar-link:hover {
            background-color: rgba(30, 33, 182, 0.08);
            color: #1e21b6;
        }

        .sidebar-link.active {
            background-color: rgba(30, 33, 182, 0.12);
            color: #1e21b6;
            font-weight: 500;
        }

        .sidebar-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: #1e21b6;
            border-radius: 0 3px 3px 0;
        }

        .sidebar-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
            font-size: 1rem;
            opacity: 0.7;
        }

        .sidebar-footer {
            position: sticky;
            bottom: 0;
            width: 100%;
            background-color: #ffffff;
            padding: 15px 25px;
            font-size: 0.85rem;
            color: #6b7280;
            border-top: 1px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
        }

        .sidebar-footer a {
            color: #1e21b6;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .sidebar-footer a:hover {
            color: #151399;
            text-decoration: underline;
        }

        /* Main content */
        .main-content {
            margin-left: 280px;
            padding: 25px;
            padding-top: 85px; /* Add padding for header */
            padding-bottom: 50px; /* Add padding for footer */
            flex-grow: 1;
            transition: margin-left 0.3s ease;
        }
        /* Main content wrapper */
.main-content-wrapper {
    display: flex;
    position: relative;
}


        /* Responsive adjustments */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }
        }

        /* Toggle button for mobile */
        .sidebar-toggle {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1100;
            background-color: #1e21b6;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }

        @media (max-width: 992px) {
            .sidebar-toggle {
                display: block;
            }
        }

    .container {
        margin-left: 15px;  /* Left space */
        margin-right: 15px;  /* Right space */
    }

    /* Ensure that sidebar and content container don't stretch too wide */
    .content-wrapper {
        display: flex;
        max-width: 1200px; /* Controls the width */
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-right: 20px;
    }



    /* Custom styles */
    .line-clamp-1 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Pagination styles */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 2px;
        }

        .pagination li a,
        .pagination li span {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .pagination li.active span {
            background-color: var(--primary);
            color: white;
        }

        .pagination li a:hover {
            background-color: #f0f0f0;
        }

        /* Chatbot styles */
        .chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .chatbot-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3a86ff, #7209b7);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .chatbot-button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .chatbot-panel {
            position: absolute;
            bottom: 75px;
            right: 0;
            width: 350px;
            height: 500px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
        }

        .chatbot-panel.active {
            opacity: 1;
            transform: translateY(0);
            pointer-events: all;
        }

        .chatbot-header {
            padding: 16px;
            background: linear-gradient(135deg, #3a86ff, #4cc9f0);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chatbot-messages {
            flex-grow: 1;
            padding: 16px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .message {
            max-width: 80%;
            padding: 12px;
            border-radius: 12px;
            font-size: 14px;
            line-height: 1.4;
        }

        .bot-message {
            background-color: #f0f2f5;
            align-self: flex-start;
            border-bottom-left-radius: 4px;
        }

        .user-message {
            background-color: #3a86ff;
            color: white;
            align-self: flex-end;
            border-bottom-right-radius: 4px;
        }

        .chatbot-input {
            padding: 16px;
            border-top: 1px solid #e0e0e0;
            display: flex;
            gap: 8px;
        }

        .chatbot-input input {
            flex-grow: 1;
            padding: 10px 16px;
            border: 1px solid #e0e0e0;
            border-radius: 24px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }

        .chatbot-input input:focus {
            border-color: #3a86ff;
        }

        .chatbot-input button {
            background-color: #3a86ff;
            color: white;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .chatbot-input button:hover {
            background-color: #2a76ef;
        }

        .typing-indicator {
            display: flex;
            gap: 4px;
            padding: 8px 12px;
            background-color: #f0f2f5;
            border-radius: 12px;
            width: fit-content;
            align-self: flex-start;
        }

        .typing-dot {
            width: 8px;
            height: 8px;
            background-color: #888;
            border-radius: 50%;
            animation: typing-animation 1.4s infinite ease-in-out;
        }

        .typing-dot:nth-child(1) {
            animation-delay: 0s;
        }

        .typing-dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-dot:nth-child(3) {
            animation-delay: 0.4s;
        }
        /* Custom dropdown transitions */



.nav-btn {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.2s ease;
            letter-spacing: 0.02em;
            font-weight: 500;
        }

        .nav-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .nav-btn.active, .mobile-nav-btn.active {
            background-color: rgba(255, 255, 255, 0.2);
            font-weight: 600;
        }

   /* Enhanced Dropdown Styles */
   .dropdown-panel {
            position: absolute;
            background-color: rgb(42, 46, 89);
            text-gray-800: #333;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            margin-top: 0.5rem;
            padding: 0.75rem;
            min-width: 240px;
            z-index: 50;
            transform-origin: top;
            transform: scale(0.95);
            opacity: 0;
            transition: transform 0.2s ease, opacity 0.2s ease;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .dropdown-panel.show {
            transform: scale(1);
            opacity: 1;
        }

        .dropdown-panel::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 16px;
            width: 16px;
            height: 16px;
            background-color: white;
            transform: rotate(45deg);
            z-index: -1;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .dropdown-item:hover {
            background-color: #27292e;
        }

        .dropdown-item::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 0;
            background-color: #3a86ff;
            transition: width 0.3s ease;
        }

        .dropdown-item:hover::after {
            width: 100%;
        }
/* Chevron Animation */
.fa-chevron-down {
            transition: transform 0.3s ease;
        }

        .rotate-180 {
            transform: rotate(180deg);
        }

        /* Logo Badge Enhancement */
        .p-2.bg-white.rounded-full {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .p-2.bg-white.rounded-full:hover {
            transform: scale(1.05);
        }

        /* Mobile Menu Animation */
        #mobile-menu {
            max-height: 0;
            opacity: 0;
            transition: max-height 0.5s ease, opacity 0.3s ease;
            overflow: hidden;
        }

        #mobile-menu.show {
            max-height: 1000px;
            opacity: 1;
        }

        /* Mobile Navigation Styles */
        .mobile-nav-btn {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 12px;
            transition: all 0.2s ease;
        }

        .mobile-nav-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .mobile-sub-link {
            display: block;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .mobile-sub-link:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        /* Sticky Header */
        header {
            position: sticky;
            top: 0;
            z-index: 1001; /* Higher than sidebar to stay on top */
            background-color: #ffffff; /* Default background */

            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        header.scrolled {
            background: linear-gradient(to right, #2563eb, #4f46e5);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        /* Responsive Dropdown Positioning */
        @media (max-width: 1200px) {
            .dropdown-panel {
                right: 0;
                left: auto;
            }

            .dropdown-panel::before {
                right: 16px;
                left: auto;
            }
        }



        @keyframes typing-animation {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }
</style>
</head>
<body>
    <header class="bg-gradient-to-r from-primary to-accent text-white shadow-xl" x-data="{ mobileMenuOpen: false }">
        <nav class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="{{ route('test.home') }}" class="flex items-center space-x-3">
                    <div class="p-2 bg-white rounded-full">
                        <i class="fas fa-heartbeat text-2xl text-primary"></i>
                    </div>
                    <span class="text-2xl font-bold tracking-tighter">ЭрүүлМэнд</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <!-- Main Navigation -->
                    <div class="flex items-center space-x-6">
                        <!-- Tests Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <button @click="open = !open" class="nav-btn">
                                <i class="fas fa-clipboard-list mr-2"></i>
                                Тестүүд
                                <i class="fas fa-chevron-down ml-2 text-sm" :class="{ 'rotate-180': open }"></i>
                            </button>
                            <div x-show="open"
     x-transition
     @click.outside="open = false"
     class="dropdown-panel"
     :class="{'show': open}">
    <a href="{{ route('phq9.index') }}" class="dropdown-item">
        <i class="fas fa-brain text-primary mr-2"></i>
        PHQ-9 Тест
    </a>
    <a href="{{ route('gad7.index') }}" class="dropdown-item">
        <i class="fas fa-head-side-virus text-primary mr-2"></i>
        GAD-7 Тест
    </a>
    <a href="{{ route('auditc.index') }}" class="dropdown-item">
        <i class="fas fa-wine-glass-alt text-primary mr-2"></i>
        AUDIT-C Тест
    </a>
    <a href="{{ route('ptsd-test.index') }}" class="dropdown-item">
        <i class="fas fa-heartbeat text-primary mr-2"></i>
        PTSD Тест
    </a>
    <a href="{{ route('mental-health.gad2') }}" class="dropdown-item">
        <i class="fas fa-dizzy text-primary mr-2"></i>
        GAD2 Тест
    </a>
    <a href="{{ route('mental-health.cage') }}" class="dropdown-item">
        <i class="fas fa-comments text-primary mr-2"></i>
        CAGE Тест
    </a>
    <a href="{{ route('adhd.test') }}" class="dropdown-item">
        <i class="fas fa-child text-primary mr-2"></i>
        ADHD Тест
    </a>
    <a href="{{ route('dass21.index') }}" class="dropdown-item">
        <i class="fas fa-sad-tear text-primary mr-2"></i>
        DASS-21 Тест
    </a>
    <a href="{{ route('ess.index') }}" class="dropdown-item">
        <i class="fas fa-bed text-primary mr-2"></i>
        ESS Тест
    </a>
    <a href="{{ route('parq.index') }}" class="dropdown-item">
        <i class="fas fa-running text-primary mr-2"></i>
        PAR-Q+ Тест
    </a>
    <a href="{{ route('ipaq.index') }}" class="dropdown-item">
        <i class="fas fa-walking text-primary mr-2"></i>
        IPAQ Тест
    </a>
</div>

                        </div>

                        <!-- VR Content Dropdown -->
                        <div class="relative group" x-data="{ open: false }">
                            <button @click="open = !open" class="nav-btn">
                                <i class="fas fa-vr-cardboard mr-2"></i>
                                VR Контент
                                <i class="fas fa-chevron-down ml-2 text-sm" :class="{ 'rotate-180': open }"></i>
                            </button>
                            <div x-show="open"
     x-transition
     @click.outside="open = false"
     class="dropdown-panel"
     :class="{'show': open}">
    <a href="{{ route('home') }}" class="dropdown-item">
        <i class="fas fa-boxes text-primary mr-2"></i>
        Бүх контент
    </a>
    <a href="{{ route('vr-content.featured') }}" class="dropdown-item">
        <i class="fas fa-star text-primary mr-2"></i>
        Онцлох
    </a>
    <a href="{{ route('vr-content.new') }}" class="dropdown-item">
        <i class="fas fa-certificate text-primary mr-2"></i>
        Шинэ загварууд
    </a>
    <a href="{{ route('vr.createSuggest') }}" class="dropdown-item">
        <i class="fas fa-lightbulb text-primary mr-2"></i>
        Санал оруулах
    </a>
</div>

                        </div>

                        <!-- Other Navigation Buttons -->
                        {{-- <a href="{{ route('topics.index') }}" class="nav-btn active">
                            <i class="fas fa-comments mr-2"></i>
                            Форум
                        </a> --}}
                        <div class="relative group" x-data="{ open: false }">
                            <button @click="open = !open" class="nav-btn">
                                <i class="fas fa-vr-cardboard mr-2"></i>
                                Форум
                                <i class="fas fa-chevron-down ml-2 text-sm" :class="{ 'rotate-180': open }"></i>
                            </button>
                            <div x-show="open"
     x-transition
     @click.outside="open = false"
     class="dropdown-panel"
     :class="{'show': open}">
    <a href="{{ route('topics.index') }}" class="dropdown-item">
        <i class="fas fa-boxes text-primary mr-2"></i>
        Форум
    </a>
    <a href="{{ route('topics.index') }}" class="dropdown-item">
        <i class="fas fa-star text-primary mr-2"></i>
        Ангилалууд
    </a>
    <a href="{{ route('diseases.index') }}" class="dropdown-item">
        <i class="fas fa-certificate text-primary mr-2"></i>
        Материалууд
    </a>
    <a href="{{ route('doctor.list') }}" class="dropdown-item">
        <i class="fas fa-lightbulb text-primary mr-2"></i>
        Мэргэжилтнүүд
    </a>
</div>

                        </div>

                        <a href="{{ route('events.calendar') }}" class="nav-btn">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Календарь
                        </a>

                        <a href="{{ route('vr.map') }}" class="nav-btn">
                            <i class="fas fa-map-marked-alt mr-2"></i>
                            Газрын зураг
                        </a>

                        <a href="{{ route('category.index') }}" class="nav-btn">
                            <i class="fas fa-tags mr-2"></i>
                            Ангилал
                        </a>
                    </div>

                    <!-- Additional Info Dropdown -->
                    <div class="relative group" x-data="{ open: false }">
                        <button @click="open = !open" class="nav-btn">
                            <i class="fas fa-info-circle mr-2"></i>
                            Нэмэлт
                            <i class="fas fa-chevron-down ml-2 text-sm" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <div x-show="open"
                             x-transition
                             @click.outside="open = false"
                             class="dropdown-panel"
                             :class="{'show': open}">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-address-card text-primary mr-2"></i>
                                Бидний тухай
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-phone-alt text-primary mr-2"></i>
                                Холбоо барих
                            </a>
                        </div>
                    </div>
                    <!-- Auth Section -->
                    <div class="h-8 w-[1px] bg-white/20 mx-4"></div>
                <div>
                    @auth
                    <!-- User Dropdown (Logged in) -->
                    <div class="relative group" x-data="{ open: false }">
    <button @click="open = !open" class="flex items-center space-x-2">
        <div class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center">
            <i class="fas fa-user text-sm"></i>
        </div>
        <span>{{ Auth::user()->name }}</span>
        <i class="fas fa-chevron-down text-sm mt-1" :class="{ 'rotate-180': open }"></i>
    </button>
    <div x-show="open"
         x-transition
         @click.outside="open = false"
         class="dropdown-panel right-0 w-48"
         :class="{'show': open}"
         style="display: none;">

        <a href="{{ route('profile.show') }}" class="dropdown-item">
            <i class="fas fa-user-circle text-primary mr-2"></i>
            Профайл
        </a>

        <a class="dropdown-item {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt text-primary mr-2"></i> Самбар
        </a>

        <a class="dropdown-item {{ request()->routeIs('dashboard.profile.*') ? 'active' : '' }}" href="{{ route('profile.show') }}">
            <i class="fas fa-user-edit text-primary mr-2"></i> Миний профайл
        </a>

        <a href="{{ route('health.dashboard') }}" class="dropdown-item {{ request()->routeIs('health.dashboard') ? 'active' : '' }}">
            <i class="fas fa-heartbeat text-primary mr-2"></i>
            Эрүүл мэндийн самбар
        </a>

        <a class="dropdown-item {{ request()->routeIs('dashboard.topics') ? 'active' : '' }}" href="{{ route('dashboard.topics') }}">
            <i class="fas fa-list-alt text-primary mr-2"></i> Миний сэдвүүд
        </a>

        <a class="dropdown-item {{ request()->routeIs('dashboard.replies') ? 'active' : '' }}" href="{{ route('dashboard.replies') }}">
            <i class="fas fa-reply-all text-primary mr-2"></i> Миний хариултууд
        </a>

        <a class="dropdown-item {{ request()->routeIs('dashboard.vr.*') ? 'active' : '' }}" href="{{ route('dashboard.vr.index') }}">
            <i class="fas fa-vr-cardboard text-primary mr-2"></i> VR санал
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"  class="dropdown-item text-red-600 w-full text-left">
                <i class="fas fa-sign-out-alt mr-2"></i>
                Гарах
            </button>
        </form>
    </div>
</div>


                    @else

                    {{-- -- Auth buttons (If not logged in) --}}
                    <div class="flex space-x-4">
                        <a href="{{ route('login') }}" class="auth-btn bg-white/10 hover:bg-white/20">
                            Нэвтрэх
                        </a>
                        <a href="{{ route('register') }}" class="auth-btn bg-white text-primary hover:bg-opacity-90">
                            Бүртгүүлэх
                        </a>
                    </div>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-3 rounded-full hover:bg-white/10">
                    <i class="fas" :class="mobileMenuOpen ? 'fa-times' : 'fa-bars'"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" :class="mobileMenuOpen ? 'show' : ''" class="lg:hidden overflow-hidden">
                <div class="py-4 space-y-4 border-t border-white/10">
                    <!-- Mobile Navigation -->
                    <div class="space-y-2">
                        <!-- Tests Accordion -->
                        <div x-data="{ open: false }" class="space-y-2">
                            <button @click="open = !open" class="mobile-nav-btn">
                                <i class="fas fa-clipboard-list mr-3"></i>
                                Тестүүд
                                <i class="fas fa-chevron-down ml-auto" :class="{ 'rotate-180': open }"></i>
                            </button>
                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                                 x-transition:enter-end="opacity-100 transform translate-y-0"
                                 class="pl-11 space-y-2">
                                <a href="#" class="mobile-sub-link">PHQ-9 Тест</a>
                                <a href="#" class="mobile-sub-link">GAD-7 Тест</a>
                                <a href="#" class="mobile-sub-link">AUDIT-C Тест</a>
                                <a href="#" class="mobile-sub-link">PTSD Тест</a>
                                <a href="#" class="mobile-sub-link">GAD2 Тест</a>
                                <a href="#" class="mobile-sub-link">CAGE Тест</a>
                                <a href="#" class="mobile-sub-link">ADHD Тест</a>
                                <a href="#" class="mobile-sub-link">DASS-21 Тест</a>
                                <a href="#" class="mobile-sub-link">ESS Тест</a>
                                <a href="#" class="mobile-sub-link">PAR-Q+ Тест</a>
                                <a href="#" class="mobile-sub-link">IPAQ Тест</a>
                            </div>
                        </div>

                        <!-- VR Content Accordion -->
                        <div x-data="{ open: false }" class="space-y-2">
                            <button @click="open = !open" class="mobile-nav-btn">
                                <i class="fas fa-vr-cardboard mr-3"></i>
                                VR Контент
                                <i class="fas fa-chevron-down ml-auto" :class="{ 'rotate-180': open }"></i>
                            </button>
                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                                 x-transition:enter-end="opacity-100 transform translate-y-0"
                                 class="pl-11 space-y-2">
                                <a href="#" class="mobile-sub-link">Бүх контент</a>
                                <a href="#" class="mobile-sub-link">Онцлох</a>
                                <a href="#" class="mobile-sub-link">Шинэ загварууд</a>
                                <a href="#" class="mobile-sub-link">Санал оруулах</a>
                            </div>
                        </div>

                        <!-- Other Mobile Links -->
                        <a href="#" class="mobile-nav-btn active">
                            <i class="fas fa-comments mr-3"></i>
                            Форум
                        </a>
                        <a href="#" class="mobile-nav-btn">
                            <i class="fas fa-calendar-alt mr-3"></i>
                            Календарь
                        </a>
                        <a href="#" class="mobile-nav-btn">
                            <i class="fas fa-map-marked-alt mr-3"></i>
                            Газрын зураг
                        </a>
                        <a href="#" class="mobile-nav-btn">
                            <i class="fas fa-tags mr-3"></i>
                            Ангилал
                        </a>
                        <a href="#" class="mobile-nav-btn">
                            <i class="fas fa-info-circle mr-3"></i>
                            Бидний тухай
                        </a>
                        <a href="#" class="mobile-nav-btn">
                            <i class="fas fa-phone-alt mr-3"></i>
                            Холбоо барих
                        </a>
                    </div>

                    <!-- Mobile Auth Section -->
                    <div class="pt-4 border-t border-white/10">
                        <a href="#" class="mobile-nav-btn">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Самбар
                        </a>
                        <a href="#" class="mobile-nav-btn">
                            <i class="fas fa-user-cog mr-3"></i>
                            Профайл
                        </a>
                        <form method="POST" action="#">
                            <button type="submit" class="mobile-nav-btn text-red-500 w-full text-left">
                                <i class="fas fa-sign-out-alt mr-3"></i>
                                Гарах
                            </button>
                        </form>

                        <!-- If not logged in
                        <div class="grid gap-2">
                            <a href="#" class="mobile-nav-btn bg-white/10">
                                Нэвтрэх
                            </a>
                            <a href="#" class="mobile-nav-btn bg-primary text-white">
                                Бүртгүүлэх
                            </a>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="d-flex">
        <!-- Sidebar -->
        @include('layouts.testsidebar')

        <!-- Main Content -->
        <div class="main-content flex-grow-1 p-5">
            @yield('content') <!-- The page content will go here -->
        </div>
    </div>


    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 relative inline-block">
                        HealthVR
                        <span class="absolute bottom-[-8px] left-0 w-1/2 h-[2px] bg-accent"></span>
                    </h3>
                    <p class="text-gray-400 mb-4">Бид эрүүл мэндийн салбарт хэрэглэгддэг 3D VR загваруудыг нэгтгэн хүргэж байна. Оюутан, багш, эмч нар, эрүүл мэндийн мэргэжилтнүүдэд зориулагдсан.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 relative inline-block">
                        Ангилал
                        <span class="absolute bottom-[-8px] left-0 w-1/2 h-[2px] bg-accent"></span>
                    </h3>
                    <div class="space-y-2">
                        @foreach(\App\Models\Category::take(5)->get() as $footerCategory)
                            <a href="{{ route('vr-content.category', $footerCategory->slug) }}" class="block text-gray-400 hover:text-white">{{ $footerCategory->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 relative inline-block">
                        Холбоосууд
                        <span class="absolute bottom-[-8px] left-0 w-1/2 h-[2px] bg-accent"></span>
                    </h3>
                    <div class="space-y-2">
                        <a href="{{ route('home') }}" class="block text-gray-400 hover:text-white">Нүүр</a>
                        <a href="{{ route('vr-content.featured') }}" class="block text-gray-400 hover:text-white">Онцлох</a>
                        <a href="{{ route('vr-content.new') }}" class="block text-gray-400 hover:text-white">Шинэ загварууд</a>
                        <a href="{{ route('about') }}" class="block text-gray-400 hover:text-white">Тухай</a>
                        <a href="{{ route('contact') }}" class="block text-gray-400 hover:text-white">Холбоо барих</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 relative inline-block">
                        Холбоо барих
                        <span class="absolute bottom-[-8px] left-0 w-1/2 h-[2px] bg-accent"></span>
                    </h3>
                    <div class="space-y-2">
                        <a href="mailto:info@healthvr.mn" class="block text-gray-400 hover:text-white">
                            <i class="fas fa-envelope mr-2"></i> info@healthvr.mn
                        </a>
                        <a href="tel:+97699112233" class="block text-gray-400 hover:text-white">
                            <i class="fas fa-phone mr-2"></i> +976 99112233
                        </a>
                        <p class="text-gray-400">
                            <i class="fas fa-map-marker-alt mr-2"></i> Улаанбаатар хот
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-6 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} HealthVR - Эрүүл мэндийн VR агуулга. Бүх эрх хуулиар хамгаалагдсан.</p>
            </div>
        </div>
    </footer>

    <!-- Chatbot -->
    <div class="chatbot-container">
        <div class="chatbot-button" id="chatbot-toggle">
            <i class="fas fa-comments text-white text-2xl"></i>
        </div>

        <div class="chatbot-panel" id="chatbot-panel">
            <div class="chatbot-header">
                <h3 class="font-bold text-lg">HealthVR Туслах</h3>
                <button id="close-chatbot" class="text-white hover:text-gray-200">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="chatbot-messages" id="chatbot-messages">
                <div class="message bot-message">
                    Сайн байна уу! HealthVR-ийн туслахад тавтай морил. Би танд хэрхэн туслах вэ?
                </div>
            </div>

            <div class="chatbot-input">
                <input type="text" id="user-input" placeholder="Энд бичнэ үү..." />
                <button id="send-message">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
    <script>

        // Chatbot functionality
    // Chatbot functionality
    // Chatbot functionality
    const chatbotToggle = document.getElementById('chatbot-toggle');
    const chatbotPanel = document.getElementById('chatbot-panel');
    const closeButton = document.getElementById('close-chatbot');
    const messagesContainer = document.getElementById('chatbot-messages');
    const userInput = document.getElementById('user-input');
    const sendButton = document.getElementById('send-message');
    let isSending = false;

    // CSRF Token for Laravel
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Simplified conversation history with clearer system prompt
    let conversationHistory = [
        {
            role: "system",
            content: "Та HealthVR-ийн туслах. Эрүүл мэндийн VR-ийн талаар лавлах мэдээлэл өгнө. Богино, энгийн хариултууд өгнө. Эмчилгээний зөвлөгөө хэрэгтэй бол 'Эмчилгээний зөвлөгөө авахыг хүсвэл эмчтэй холбогдоно уу' гэж хариулна."
        },
        {
            role: "assistant",
            content: "Сайн байна уу! HealthVR-ийн туслахад тавтай морил. Би танд хэрхэн туслах вэ?"
        }
    ];

    // Clear conversation history (except system message)
    const resetConversation = () => {
        const systemMessage = conversationHistory.find(msg => msg.role === "system");
        conversationHistory = [
            systemMessage,
            {
                role: "assistant",
                content: "Сайн байна уу! HealthVR-ийн туслахад тавтай морил. Би танд хэрхэн туслах вэ?"
            }
        ];

        // Clear UI messages except the first bot message
        while (messagesContainer.children.length > 1) {
            messagesContainer.removeChild(messagesContainer.lastChild);
        }
    };

    // Toggle chatbot panel
    chatbotToggle.addEventListener('click', () => {
        chatbotPanel.classList.toggle('active');
    });

    // Close chatbot panel
    closeButton.addEventListener('click', () => {
        chatbotPanel.classList.remove('active');
        // Optional: Reset conversation when closing
        // resetConversation();
    });

    // Add message to UI
    const addMessage = (message, type) => {
        const messageElement = document.createElement('div');
        messageElement.className = `message ${type}-message`;
        messageElement.textContent = message;
        messagesContainer.appendChild(messageElement);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    };

    // Show typing indicator
    const showTypingIndicator = () => {
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'typing-indicator';
        typingIndicator.id = 'typing-indicator';

        for (let i = 0; i < 3; i++) {
            const dot = document.createElement('div');
            dot.className = 'typing-dot';
            typingIndicator.appendChild(dot);
        }

        messagesContainer.appendChild(typingIndicator);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    };

    // Remove typing indicator
    const removeTypingIndicator = () => {
        const typingIndicator = document.getElementById('typing-indicator');
        if (typingIndicator) {
            typingIndicator.remove();
        }
    };

    // Clean and format the bot response
    const cleanBotResponse = (response) => {
        // Remove repeated phrases about consulting a doctor
        const consultPhrase = "эмчилгээний зөвлөгөө авахыг хүсвэл эмчтэй холбогдоно уу";

        // If the response contains this phrase multiple times, keep only the first instance
        const parts = response.split(consultPhrase);
        if (parts.length > 2) {
            return parts[0] + consultPhrase;
        }

        // Fix any incomplete sentences at the end
        let cleaned = response.trim();
        if (cleaned.endsWith('э') || cleaned.endsWith('...')) {
            // Find the last complete sentence
            const sentences = cleaned.split('.');
            sentences.pop(); // Remove the incomplete sentence
            cleaned = sentences.join('.') + '.';
        }

        return cleaned;
    };

    // Send message function
    const sendMessage = async () => {
        const userMessage = userInput.value.trim();
        if (!userMessage || isSending) return;

        isSending = true;

        // Add user message to UI
        addMessage(userMessage, 'user');
        userInput.value = '';
        showTypingIndicator();

        // Add user message to conversation history
        conversationHistory.push({ role: "user", content: userMessage });

        try {
            const response = await fetch('/chatbot/message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    messages: conversationHistory
                })
            });

            const data = await response.json();

            // Handle API errors
            if (!response.ok) {
                throw new Error(data.error || "API request failed");
            }

            // Properly extract and clean the bot's response
            if (data.choices && data.choices[0] && data.choices[0].message) {
                let botMessage = data.choices[0].message.content;

                // Clean the response
                botMessage = cleanBotResponse(botMessage);

                // Add bot response to UI
                addMessage(botMessage, 'bot');

                // Add clean bot response to conversation history
                conversationHistory.push({
                    role: "assistant",
                    content: botMessage
                });

                // If the conversation is getting too long, trim it
                if (conversationHistory.length > 10) {
                    // Keep the system message and remove old messages
                    const systemMessage = conversationHistory.find(msg => msg.role === "system");
                    conversationHistory = [systemMessage, ...conversationHistory.slice(-9)];
                }
            } else {
                throw new Error("Invalid API response format");
            }

        } catch (error) {
            console.error("Error:", error);
            addMessage(`Алдаа гарлаа: ${error.message}`, 'bot');
        } finally {
            removeTypingIndicator();
            isSending = false;
        }
    };

    // Add a reset button to the chatbot header (optional)
    const addResetButton = () => {
        const resetButton = document.createElement('button');
        resetButton.innerHTML = '<i class="fas fa-redo"></i>';
        resetButton.className = 'reset-button ml-2 text-white hover:text-gray-200';
        resetButton.title = 'Хөөрөлдөөнийг шинэчлэх';
        resetButton.addEventListener('click', resetConversation);

        const header = document.querySelector('.chatbot-header');
        header.insertBefore(resetButton, document.getElementById('close-chatbot'));
    };

    // Initialize
    sendButton.addEventListener('click', sendMessage);
    userInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    // Optional: Add the reset button
    // addResetButton();
    </script>
    <script>
        // Sticky header on scroll
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 10) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-…"
      crossorigin="anonymous"
    ></script>
    <!-- Add Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });

        // Hide sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');

            if (window.innerWidth <= 992) {
                if (!sidebar.contains(event.target) && event.target !== sidebarToggle && !sidebarToggle.contains(event.target)) {
                    sidebar.classList.remove('show');
                }
            }
        });

        // Adjust sidebar visibility on window resize
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            if (window.innerWidth > 992) {
                sidebar.classList.remove('show');
            }
        });
    </script>
</body>
</html>
