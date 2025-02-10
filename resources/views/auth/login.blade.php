<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../login-register-form/css/style.css">
    
    <style>
        body{
        background-image: url('../../../login-register-form/asta.png');
        }
        .card {
            backdrop-filter: blur(10px) saturate(150%);
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding-bottom: 0;
        }
        .nav-link {
            color: #fff;
        }
        .nav-link.active {
            color: #ff4b2b;
            font-weight: bold;
            border-color: #ff4b2b;
        }
        .form-label {
            font-weight: 500;
            color: #fff;
        }
        .form-container {
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 15px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body>
    
    <div class="container">
      
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header text-center">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <!-- Login Tab -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="form-container">
                        <form method ="POST" action="{{ url('/login')}}">
                            @csrf
                                <div class="mb-3">
                                    <label for="loginEmail" :value ="__('loginEmail')" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="loginEmail" placeholder="Enter email">
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" :value ="__('loginPassword')" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                </div>
                                <button href="{{route('register')}}"class="gradient-button">Login</button>
            
                            </form>
                        </div>
                    </div>

                    <!-- Register Tab -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <div class="form-container">
                        <form method ="POST" action="{{ route ('login')}}">
                        @csrf
                                <div class="mb-3">
                                    <label for="registerName"  :value ="__('registerName')" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="registerName"placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="registerEmail" :value ="__('registerEmail')" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="registerEmail" placeholder="Enter email">
                                </div>
                                <div class="mb-3">
                                    <label for="registerPassword" :value ="__('registerPassword')" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <label for="registerConfirmPassword" :value ="__('registerConfirmPassword')" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="registerConfirmPassword"  placeholder="Confirm Password">
                                </div>
                                <button class="gradient-button">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
