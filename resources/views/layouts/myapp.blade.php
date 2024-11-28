<!DOCTYPE html>
<html lang="en">
<head>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myapp</title>
    <style>
      body{
        background-attachment: fixed;
        background-color:black;
        color:red;
      }
      
.navbar {
  background-color: #f8f9fa; 
  border-bottom: 2px solid #e0e0e0; 
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
}

.navbar-brand {
  font-size: 1.5rem; 
  font-weight: bold;
  color: #007bff; 
}

.navbar-brand:hover {
  color: #0056b3; 
}

.navbar-toggler {
  border: none; 
}

.navbar-toggler-icon {
  background-image: url('data:image/svg+xml;charset=UTF8,%3Csvg xmlns%3D%22http://www.w3.org/2000/svg%22 viewBox%3D%220 0 30 30%22%3E%3Cpath stroke%3D%22rgba%28255,255,255,1%29%22 stroke-width%3D%222%22 stroke-linecap%3D%22round%22 stroke-miterlimit%3D%2210%22 d%3D%22M4 7h22M4 15h22M4 23h22%22/%3E%3C/svg%3E');
  
}

.navbar-nav .nav-item {
  margin-right: 20px; 
}

.nav-link {
  font-size: 1.1rem;
  color: #343a40; 
  transition: color 0.3s ease; 
}

.nav-link:hover {
  color: red; 
}

.nav-link.active {
  color: #0056b3; 
  font-weight: bold;
}

@media (max-width: 991.98px) {
  .navbar-nav .nav-item {
    margin-right: 0;
    text-align: center;
    padding: 10px 0;
  }

  .navbar-nav {
    width: 100%;
    background-color: #f8f9fa;
    border-top: 1px solid #e0e0e0;
  }
}


      </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">MyWebsite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Services</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

   @yield('content')
</body>
</html>