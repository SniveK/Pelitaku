<!-- <div class="searchbar" >
    <object data="./assets/svg/logo_pelitaku.svg" type="" width="204px" height = "67.14px"></object>
    <div>
        <input type="text" placeholder="Cari lokasi" class="input-location" >
        <img src="./assets/png/icon_gps.png" alt="Icon GPS" class="search-icon">
    </div>
    <div>
        <form action="">
            <input type="text" placeholder="Cari subjek...." class="input-subject">
            <input src="./assets/png/icon_search.png" alt="Icon magnifying glass" class="search-icon" type="submit">
        </form>
    </div>
</div> -->

<div class="flex-container-row flex-center column-gap-20">
    <object data="../../assets/svg/logo_pelitaku.svg" type="" width="204px" height="67.14px" alt="Logo Pelitaku">Logo Pelitaku</object>
    <!--<div class="position-relative">
        <form action="">
            <input type="text" placeholder="Cari lokasi" class="input-location">
            <input src="../../assets/png/icon_gps.png" alt="Icon magnifying glass" class="search-icon" type="image" style="border: none">
        </form>
    </div>-->
    <div class="position-relative">
        <input type="text" placeholder="Cari subjek...." class="input-subject" name="subject" <?php echo (isset($_GET["subject"])) ? "value=\"" . $_GET["subject"] . "\"" : ''; ?>>
        <input src="../../assets/png/icon_search.png" alt="Icon magnifying glass" class="search-icon" type="image" style="border: none">
    </div>
</div>