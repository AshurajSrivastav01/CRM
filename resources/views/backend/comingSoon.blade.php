<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Coming soon | Blog Admin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --info: #4895ef;
            --warning: #f72585;
            --danger: #e63946;
            --light: #f8f9fa;
            --dark: #212529;
            --gray-100: #f8f9fa;
            --gray-200: #e9ecef;
            --gray-300: #dee2e6;
            --gray-400: #ced4da;
            --gray-500: #adb5bd;
            --gray-600: #6c757d;
            --gray-700: #495057;
            --gray-800: #343a40;
            --gray-900: #212529;
            --border-radius: 12px;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f9fafb;
            font-family: 'Inter', sans-serif;
            color: var(--gray-700);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .error-container {
            max-width: 600px;
            text-align: center;
            padding: 2rem;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            z-index: 1;
        }

        .error-code::after {
            content: '404';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12rem;
            font-weight: 900;
            color: rgba(67, 97, 238, 0.03);
            z-index: -1;
        }

        .error-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--gray-800);
        }

        .error-message {
            font-size: 1.1rem;
            color: var(--gray-600);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .error-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .btn {
            border-radius: 8px;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary:hover {
            background-color: var(--secondary);
            border-color: var(--secondary);
            transform: translateY(-2px);
        }

        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        .error-search {
            max-width: 400px;
            margin: 0 auto 3rem;
        }

        .search-wrapper {
            position: relative;
        }

        .search-wrapper .form-control {
            border-radius: 50px;
            padding-left: 1.5rem;
            padding-right: 3rem;
            height: 50px;
            box-shadow: var(--shadow);
            border: 1px solid var(--gray-300);
        }

        .search-wrapper .btn {
            position: absolute;
            right: 5px;
            top: 5px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary);
            border-color: var(--primary);
            color: white;
        }

        .error-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .error-links a {
            color: var(--gray-600);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .error-links a:hover {
            color: var(--primary);
        }

        /* Decorative elements */
        .decoration {
            position: absolute;
            z-index: -1;
            opacity: 0.5;
        }

        .decoration-circle {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.1) 0%, rgba(63, 55, 201, 0.1) 100%);
            top: -150px;
            right: -150px;
        }

        .decoration-circle-2 {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(76, 201, 240, 0.1) 0%, rgba(73, 149, 239, 0.1) 100%);
            bottom: -100px;
            left: -100px;
        }

        /* Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .floating {
            animation: float 5s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .error-code {
                font-size: 5rem;
            }

            .error-code::after {
                font-size: 8rem;
            }

            .error-title {
                font-size: 1.5rem;
            }

            .error-actions {
                flex-direction: column;
            }

            .error-actions .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Decorative elements -->
    <div class="decoration decoration-circle"></div>
    <div class="decoration decoration-circle-2"></div>

    <div class="error-container">
        <div class="error-code floating">Coming soon...</div>
    </div>

    <script>
        // Simple animation for the search button
        document.querySelector('.search-wrapper .btn').addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.1)';
        });

        document.querySelector('.search-wrapper .btn').addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });

        // Add focus effect to search input
        document.querySelector('.search-wrapper .form-control').addEventListener('focus', function() {
            this.parentElement.style.boxShadow = '0 0 0 3px rgba(67, 97, 238, 0.1)';
            this.parentElement.style.borderRadius = '50px';
        });

        document.querySelector('.search-wrapper .form-control').addEventListener('blur', function() {
            this.parentElement.style.boxShadow = '';
        });
    </script>
</body>
</html>
