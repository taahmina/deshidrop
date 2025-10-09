<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login - Food Delivery</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .auth-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .auth-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
        }
        .auth-header {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }
        .auth-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,0 L1000,0 L1000,100 L0,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
        }
        .auth-body {
            padding: 40px 30px;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
        }
        .register-link {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }
        .register-link:hover {
            text-decoration: underline;
        }
        .input-group-text {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-right: none;
        }
        .form-control:focus + .input-group-text {
            border-color: #007bff;
        }
        .forgot-password {
            color: #6c757d;
            text-decoration: none;
        }
        .forgot-password:hover {
            color: #007bff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <div style="position: relative; z-index: 1;">
                    <i class="fas fa-sign-in-alt fa-2x mb-3"></i>
                    <h4 class="mb-2">Welcome Back</h4>
                    <p class="mb-0">Sign in to your account to continue</p>
                </div>
            </div>

            <div class="auth-body">
                <form method="POST" action="{{ route('customer.login') }}" id="loginForm">
                    @csrf

                    <!-- Login Field (Email or Phone) -->
                    <div class="mb-3">
                        <label for="login" class="form-label">
                            <i class="fas fa-user me-2"></i>Email or Mobile Number <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" 
                                   name="login" value="{{ old('login') }}" required autocomplete="login" autofocus
                                   placeholder="Enter email or mobile number">
                        </div>
                        @error('login')
                            <div class="invalid-feedback d-block">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock me-2"></i>Password <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password"
                                   placeholder="Enter your password">
                            <button type="button" class="input-group-text toggle-password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="invalid-feedback d-block">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                            <!--  <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                        <div>
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                            <a href="{{ route('customer.password.request') }}" class="forgot-password">
                                Forgot Password?
                            </a>
                        </div>
                    </div>-->

                    {{-- Replace with this simpler version: --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>




                    <!-- Submit Button -->
                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary btn-lg" id="loginBtn">
                            <i class="fas fa-sign-in-alt me-2"></i>Sign In
                        </button>
                    </div>

                    <!-- Demo Account Info (Optional) -->
                    <div class="alert alert-info" role="alert">
                        <small>
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Demo Account:</strong><br>
                            Email: demo@example.com<br>
                            Phone: 01700000000<br>
                            Password: password
                        </small>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center">
                        <p class="mb-0">Don't have an account?
                            <a href="{{ route('customer.register') }}" class="register-link">
                                <i class="fas fa-user-plus me-1"></i>Create Account
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password visibility toggle
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });

        // Form submission loading state
        document.getElementById('loginForm').addEventListener('submit', function() {
            const btn = document.getElementById('loginBtn');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Signing In...';
            btn.disabled = true;
        });

        // Auto-fill demo credentials (for testing)
        document.addEventListener('DOMContentLoaded', function() {
            // Remove this in production
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('demo') === '1') {
                document.getElementById('login').value = 'demo@example.com';
                document.getElementById('password').value = 'password';
            }
        });
    </script>
</body>
</html>