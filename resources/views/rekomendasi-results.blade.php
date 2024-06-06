<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Recommendations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            /* Set background image from the "images" folder */
            background-image: url('/assets/images/Dell.webp'); /* Adjust the image path as needed */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the background image */
            background-attachment: fixed; /* Make the background image fixed */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
        
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 5);
        }

        
        /* Navbar */
        .hero{
    height: 100vh;
    width: 100%;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 40px;
    padding-left: 10%;
    padding-right: 10%;
}
.logo{
    color: white;
    font-size: 20px;
}
nav ul li{
    list-style-type: none;
    display: inline-block;
    padding: 10px 20px;
}
nav ul li a{
    color: white;
    text-decoration: none;
    font-weight: bold;
}
nav ul li a:hover{
    color: #ea1538;
    transition: .2s;
}
.navbar-button{
    border: none;
    background: #ea1538;
    padding: 12px 30px;
    border-radius: 30px;
    color: white;
    font-weight: bold;
    font-size: 15px;
    transition: .5s;
}
.navbar-button:hover{
    transform: scale(1.05);
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="section">
        <nav>
            <a href="/"> <h2 class="logo">Pencari Kebutuhan Laptop</h2>
            </a>
           
            {{-- <ul>
                <li><a href="">Rekomendasi</a></li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">Galeri</a></li>
            </ul>
            <button type="button" class="navbar-button" onclick="location.href='http://127.0.0.1:8000/profile'">Profile</button> --}}
        </nav>
    <div class="container">
        <h1>Recommended Laptops</h1>
        <ul>
            @foreach($laptopsdetail as $laptops)
                <li>
                    {{ $laptops->namaLaptop }}
                    <div>
                    {{-- <form action="" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="laptop_name" value="{{ $laptops->namaLaptop }}">
                        <button type="submit">Purchase</button>
                    </form> --}}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
