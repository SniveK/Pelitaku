<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/profile.css">
</head>

<body class="flex-container-columns">
    <!-- <header class="header">
        <nav class="nav">
            <object data="../../assets/svg/icon_pelitaku.svg" type="" width="28px"></object>
        </nav>
    </header> -->
    <header class="header flex-container-row flex-center">
        <nav class="nav flex-container-row flex-between">
            <object data="../../assets/svg/icon_pelitaku.svg" type="" width="28px" "></object>
			<div class=" flex-container-row column-gap-20">
                <p>pembelajaran</p>
                <p>jadwal</p>
                <p>inbox</p>
                <p>profil</p>
                </div>
        </nav>
    </header>

    <div class="flex-container-column flex-center margin-top-82">
        <div class="flex-container-row flex-center width-1280">
            <span class="title">
                <h1>Profil</h1>
            </span>
        </div>
        <div class="width-1280">
            <hr>
        </div>
    </div>

    <div class="flex-container-column flex-center margin-bottom-82">
        <div class="profile-image-container">
            <div class="image-container">
                <div class="circle width-192 height-192"></div>
            </div>
            <div class="review-container">
                <object data="../../assets/svg/profile_tutor_starbar.svg" type=""></object>
            </div>
        </div>
        <div class="flex-container-row flex-center width-1280">
            <div class="flex-container-column flex-start width-30-percent row-gap-20">
                <div class="flex-container-column width-full">
                    <div class="bold">Email</div>
                    <div class="width-full">
                        <input class="width-full" type="text" placeholder="Email" id="profileEmail">
                    </div>
                </div>
                <div class="flex-container-row column-gap-20">
                    <div class="flex-container-column width-full">
                        <div class="bold">Nama Depan</div>
                        <input class="width-full" type="text" placeholder="Nama Depan" id="profileFirstName">
                    </div>
                    <div class="flex-container-column width-full">
                        <div class="bold">Nama Belakang</div>
                        <input class="width-full" type="text" placeholder="Nama Belakang" id="profileLastName">
                    </div>
                </div>

                <div class="flex-container-column">
                    <div class="bold">Nomor Ponsel</div>
                    <div class="flex-container-row column-gap-20 width-full">
                        <input class="width-15-percent" type="text" value="+62" id="profileCountryCode" disabled>
                        <input class="width-full" type="text" placeholder="Nomor Ponsel" id="profilePhoneNumber">
                    </div>
                </div>
                <div class="flex-container-row column-gap-20">
                    <div class="flex-container-column width-175">
                        <div class="bold">Bank</div>
                        <select class="width-full" name="Provinsi" id="cars">
                            <option value="BCA">BCA</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="BNI">BNI</option>
                            <option value="Permata">Permata</option>
                        </select>
                    </div>
                    <div class="flex-container-column">
                        <div class="bold">Nomor Rekening</div>
                        <input class="width-full" type="text" placeholder="Nomor Rekening" id="profilePhoneNumber">
                    </div>
                </div>
                <div class="flex-container-column">
                    <div class="bold">Alamat</div>
                    <input class="width-full" type="text" placeholder="Alamat" id="profilePhoneNumber">
                </div>
                <div class="flex-container-column">
                    <div class="bold">Password</div>
                    <input class="width-full" type="password" placeholder="**********" id="profilePassword">
                </div>
            </div>
        </div>
        <div class="flex-container-row flex-center row-gap-20 width-1280 margin-top-30">
            <div class="flex-container-column flex-start width-50-percent row-gap-20">
                <div class="flex-container-column">
                    <div class="bold">Tentang Claresta</div>
                    <textarea class="width-full address-text-area" placeholder="Nama saya Claresta, saya lahir di lampung pada tahun 2001. Saya adalah mahasiswi Desain Produk Universitas Pelita Harapan tahun 2019." id="address"></textarea>
                </div>
                <div class="flex-container-row flex-start column-gap-20">
                    <div class="bold ">IPK</div>
                    <input class="width-15-percent" type="text" placeholder="IPK" id="profileIPK">
                </div>
                <div class="flex-container-row column-gap-20">
                    <div class="bold">CV: </div>
                    <input class="width-248" type="text" placeholder="link CV" id="profileIPK">
                </div>
                <div class="flex-container-row column-gap-20">
                    <div class="bold">
                        Waktu respon:
                    </div>
                    <div>2 jam</div>
                </div>
            </div>
        </div>
        <div class="flex-container-row flex-end width-1280 margin-top-30">
            <div class="flex-container-row buttons">
                <input class="button continue" type="button" value="Simpan">
                <input class="button abort" type="button" value="Batal">
            </div>
        </div>
    </div>

    <footer class="flex-container-column flex-center footer">
        <div class="flex-container-row flex-between footer-menu width-1280">
            <ul class="footer-menu__left">
                <li><b>Tentang</b></li>
                <li>Siapa kami? </li>
                <li>Syarat dan Ketentuan</li>
                <li>Kebijakan Privasi</li>
                <li>FAQ</li>
            </ul>
            <ul class="footer-menu__center">
                <li><b>Kelas</b></li>
                <li>Mulai Kelas</li>
                <li>Lihat subjek kami</li>
            </ul>
            <ul class="footer-menu__right">
                <li><b>Menjadi tutor</b></li>
                <li>Keuntungan menjadi tutor</li>
                <li>Daftar menjadi tutor</li>
                <li>Masuk</li>
            </ul>
        </div>
        <div class="width-1280">
            <hr class="line">
            <p align="center">© Pelitaku, 2021</p>
        </div>
    </footer>
</body>

</html>