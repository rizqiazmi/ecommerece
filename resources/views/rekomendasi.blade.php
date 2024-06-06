<!-- resources/views/questionnaire/questions.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /*background-color: #f5f5f5; /* Light grey background */
            background-image: url('/assets/images/Dell.webp'); /* Path to your background image */
            background-size: cover; /* This property ensures the image covers the entire background */
            background-position: center; /* Centers the background image */

        }

        .question-container {
            background-color: #f5f5f5; /* Light grey background */
            padding: 18px;
            border-radius: 20px;
            box-shadow: 0 0 105px rgba(0, 0, 0, 0.5); /* Shadow effect */
            margin-bottom: 20px; /* Added margin between question containers */
            margin-right: 10px;
            max-width: 500px; /* Limit container width */
            width: 100%;

        }

        .question {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .answer-option {
            margin-bottom: 5px; /* Added margin between answer options */
            display: block; /* Display answer options vertically */
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            display: block; /* Make button full width within container */
            margin-top: 20px; /* Add space between questions and button */
        }

        button:hover {
            background-color: #0056b3;
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
            <button type="button" onclick="" class="navbar-button">Profile</button> --}}
        </nav>
    <form action={{ route('process.answers') }} method="POST">
            @csrf

        <div class="question-container">
            <div class="question">Question 1: Anda membutuhkan Laptop Untuk Keperluan yang seperti apa?</div>
            <label class="answer-option"><input type="radio" name="answer1" value="1"> Desain Grafis dan Multimedia</label>
            <label class="answer-option"><input type="radio" name="answer1" value="2"> Programing</label>
            <label class="answer-option"><input type="radio" name="answer1" value="3"> Pekerjaan Kantor</label>
            <label class="answer-option"><input type="radio" name="answer1" value="4"> Gaming</label>
            <label class="answer-option"><input type="radio" name="answer1" value="5"> Kegiatan ringan (browsing, Menonton Film, Mengetik dokumen,)</label>
        </div>
    

        <div class="question-container">
            <div class="question">Question 2: Berapa alokasi dana yang akan anda Gunakan?</div>
            <label class="answer-option"><input type="radio" name="answer2" value="1"> 5-10 juta</label>
            <label class="answer-option"><input type="radio" name="answer2" value="2"> 10-15 juta</label>
            <label class="answer-option"><input type="radio" name="answer2" value="3"> >15 juta </label>
        </div>

        <div class="question-container">
            <div class="question">Question 3: Preferemsi brand Laptop Mana yang anda Sukai?</div>
            <label class="answer-option"><input type="radio" name="answer3" value="1"> Asus</label>
            <label class="answer-option"><input type="radio" name="answer3" value="2"> Lenovo</label>
            <label class="answer-option"><input type="radio" name="answer3" value="3"> HP</label>
            <label class="answer-option"><input type="radio" name="answer3" value="4"> Acer</label>
            <label class="answer-option"><input type="radio" name="answer3" value="5"> MSI</label>
            <label class="answer-option"><input type="radio" name="answer3" value="6"> Lainnya</label>
        </div>

        <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>
