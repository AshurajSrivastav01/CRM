<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $Title }}</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/backend/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/styles.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/allPost.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/allPost.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/addPost.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/addPost.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/sideBar.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/sideBar.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/dashboard.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/addUser.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/addUser.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/dashboard.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/userRoles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/userRoles.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/allUser.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/allUser.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/tags.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/tags.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/backend/categories.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/backend/categories.css') }}">


    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/ci5ocodi2e6vje9bmxhgjkda8yx7k8ev91krdoe0m0uybt8o/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="sidebar-brand">
            <h2 class="text-center" style="margin: 0px;">CodeBridgeIT</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                {{-- <li class="active"> --}}
                <li class="active">
                    <a href="{{ url('/dashboard') }}">
                        <span>
                            <i class="bi bi-house-door"></i>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="#" class="submenu-toggle">
                        <span>
                            <i class="bi bi-file-text"></i>
                            Posts
                        </span>
                        <i class="bi bi-chevron-right dropdown-arrow"></i>
                    </a>
                    {{-- <div class="submenu active"> --}}
                    <div class="submenu ">
                        {{-- <a href="#" class="active">All Posts</a> --}}
                        <a href="{{ url('/dashboard/all-post') }}" class="">All Posts</a>
                        <a href="{{ url('/dashboard/add-post') }}">Add New Post</a>
                        <a href="{{ url('/dashboard/categories') }}">Categories</a>
                        <a href="{{ url('/dashboard/tags') }}">Tags</a>
                    </div>
                </li>
                <li class="has-submenu">
                    <a href="#" class="submenu-toggle">
                        <span>
                            <i class="bi bi-people"></i>
                            Users
                        </span>
                        <i class="bi bi-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="submenu">
                        <a href="{{ url('/dashboard/all-user') }}">All Users</a>
                        <a href="{{ url('/dashboard/add-user') }}">Add New User</a>
                        <a href="{{ url('/dashboard/user-roles') }}">User Roles</a>
                    </div>
                </li>
                <li>
                    <a href="{{ url('/dashboard/comments') }}">
                        <span>
                            <i class="bi bi-chat-left-text"></i>
                            Comments
                        </span>
                    </a>
                </li>
                <li class="has-submenu">
                    <a href="#" class="submenu-toggle">
                        <span>
                            <i class="bi bi-bar-chart"></i>
                            Analytics
                        </span>
                        <i class="bi bi-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="submenu">
                        <a href="#">Traffic Overview</a>
                        <a href="#">Popular Content</a>
                        <a href="#">Referral Sources</a>
                    </div>
                </li>
                {{-- <li class="has-submenu">
                    <a href="#" class="submenu-toggle">
                        <span>
                            <i class="bi bi-gear"></i>
                            Settings
                        </span>
                        <i class="bi bi-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="submenu">
                        <a href="#">General Settings</a>
                        <a href="#">Writing Settings</a>
                        <a href="#">Reading Settings</a>
                        <a href="#">Discussion Settings</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- Main Content -->
    <div id="content">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('messsage') }}
            </div>
        @endif
