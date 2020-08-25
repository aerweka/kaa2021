<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/css/dashboard_user.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <tr>
                <a href="/peserta/dashboard_user" class="menu1">Dashboard</a>
                <a href="/peserta/alur_pembayaran" class="menu2">Alur Pembayaran</a>
                <a href="/peserta/konfirmasi_pembayaran" class="menu3">Konfirmasi Pembayaran</a>
                <a href="/peserta/form_pendaftaran" class="menu4">Form Pendaftaran</a>
                <a href="/peserta/cetak_kartu_peserta" class="menu5">Cetak Kartu Peserta</a>
            </tr>
        </div>
        <div class="conten">

        <!-- Item Profile -->
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a onclick="openForm()">Profile</a>
                        <a href="/logout">Logout</a>
                    </div>
            </div>

            <!-- Profile Card -->
            <div class="form-popup" id="myForm">
                <form class="form-container">
                    <div class="card">

                    @foreach( $profile as $pr)

                    <p>Name :</p>
                    <h4>{{ $pr->nama_pendaftar}}</h4>
                    <p>Email :</p>
                    <h4>{{ $pr->email_pendaftar}}</h4>
                    <p>University :</p>
                    <h4>{{ $pr->asal_univ_pendaftar}}</h4>

                    @endforeach

                    </div>
                    <button type="button" class="btn warning" onclick="openFormPass()">Change Password</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
            </div>
            
            <!-- Form Password -->
            <div class="form-popup2" id="myFormPass">
                <form action="/action_page.php" class="form-container2">
                    <h1 style="font-size: 24px; text-align: center;">Change Password</h1>

                    <input type="password" placeholder="Password" name="pwnow" required>

                    <input type="password" placeholder="New Password" name="pwnew" required>

                    <input type="password" placeholder="Confirmation Password" name="pwnew2" required>

                    <button type="submit" class="btn">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeFormPass()">Close</button>
                </form>
            </div>

            <!-- content -->
            <h1 class="welcome">Selamat Datang, {{$pr->nama_pendaftar}}</h1>

            <div class="bungkus">
                <h2>PENGUMUMAN</h2>

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum eveniet laudantium distinctio, porro molestiae et sit suscipit provident totam repudiandae ducimus obcaecati? Nam, voluptas consectetur cum sequi mollitia dicta vero nisi molestiae optio libero, est architecto eos quo inventore accusantium sunt in vitae qui expedita laborum ducimus asperiores. Iure adipisci ipsam optio placeat, maiores corporis voluptatem, assumenda quae pariatur ipsum voluptatum cupiditate ad molestias nihil alias beatae accusamus dignissimos hic labore doloremque soluta praesentium facere. Quo soluta, perferendis autem delectus sunt nostrum magnam fugit vero perspiciatis, accusamus minima facilis! Porro dignissimos impedit corrupti facilis ut itaque eum deserunt sit repellendus?
                    </p>

            </div>
        </div>
    </div>

    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
    }

    // when the user clicks on the buttom, the form will be showing for profile page
    function openForm() {
    document.getElementById("myForm").style.display = "block";
    }

    // when the user clicks on the buttom, the form will be closing for profile page
    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }

    // when the user clicks on the buttom, the form will be showing for change password page
    function openFormPass() {
    document.getElementById("myFormPass").style.display = "block";
    }

    // when the user clicks on the buttom, the form will be closing for change password page
    function closeFormPass() {
    document.getElementById("myFormPass").style.display = "none";
    }
    </script>
    
</body>
</html>