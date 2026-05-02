<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Route dan View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/linktreeStyle.css') }}">
</head>

<body>
    <div class="container">
        <p></p>
        <div class="before-header logo-bawah py-4 ">
            <a href="http://linktr.ee/" target="_blank" style="width: 5%;">
                <img src="{{ asset('linktree-asset/tree-deciduous.png') }}" class="logo-atas" alt="LinkTree">
            </a>
            <a href="https://linktr.ee/Agni.Graph" target="_blank" style="width: 5%;"><img src="{{ asset('linktree-asset/screen-share.png') }}"
                    class="logo-atas" alt="Gmail">
            </a>

        </div>


        <div class="Header">
            <p></p>
            <img src="{{ asset('linktree-asset/ITU DIA.png') }}" class="profile" alt="logo">
            <p></p>
            <p><b id="Intro">@Agni.Graph</b></p>
            <p>From Imagination to Reality</p>
        </div>
        <div class="MainSection">
            <div>
                <p><b>Agni-oss15.github.io</b></p>
            </div>


            <div>
                <a href="ituindex" target="_blank"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3">
                    index
                </a>
                <a href="itulinktree" target="_blank"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3">
                    linktree
                </a>

                <p></p>

            </div>


            <div>
                <a href="pert5" target="_blank"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3"> pertemuan 5
                </a>
                <p></p>
            </div>

            <p><b>FE5026241099</b></p>

            <div>
                <a href="ituintro" target="_blank"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3">
                    intro
                </a>
                <p></p>
            </div>

            <div>
                <a href="itunews"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3">
                    news
                </a>
                <p></p>
            </div>


            <div>
                <a href="itunewslagi" target="_blank"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3">
                    news1
                </a>
                <p></p>
            </div>

            <div>
                <a href="ituresponsive" target="_blank"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3">
                    responsive
                </a>
                <p></p>
            </div>

            <div>
                <a href="itutemplate" target="_blank"
                    class="btn btn-outline-warning btn-block rounded-pill linkFont py-3">
                    template
                </a>
                <p></p>
            </div>







            <p><b>Contact us</b></p>

            <div class="logo-bawah pb-5 ">
                <img src="{{ asset('linktree-asset/logoWA.png') }}" class="logonya" alt="WA">
                <img src="{{ asset('linktree-asset/logoIG.png') }}" class="logonya" style="width: 8%; height: auto; margin-right: 8px;" alt="IG">
                <img src="{{ asset('linktree-asset/logoGmail.png') }}" class="logonya" style="width: 10%; height: auto;" alt="Gmail">
            </div>

        </div>
        <div class="pb-4">
            <a id="Tombol" href="https://bit.ly/BookPhotoEvent" target="_blank"
                class="btn btn-light rounded-pill linkFont py-2 shadow">
                Join Agni.Graph on Linktree
            </a>
        </div>
        <div class="footer pb-5">
            <p>Cookie Preferences • Report • Privacy • Explore</p>
        </div>


    </div>


    <!-- Letakkan script di sini, sebelum </body> -->
    <script>
        function showme() {
            // alert("Halo Selamat Siang");

            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
            console.log("ini baris 1, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil Penjumlahan :" + a);
        }

        function changeText() {
            const element = document.getElementById("Intro")
            element.innerHTML = "FFFAAAAHHH";
        }

        function changeStyle() {
            const element = document.getElementById("Tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
