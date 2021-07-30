<!--Section: footer -->

<footer class="#616161 blue lighten-1 page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Hubungi Kami :</h5>
                <p class="grey-text text-lighten-4">
                    Jl. KH Sholeh Iskandar KM. 2, Tanah Sareal, Bogor
                    <br>informatika@uika-bogor.ac.id,<br>+6282298895032
                </p>
            </div>
            <div class="col l3 s12">

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by
            <a class="orange-text text-lighten-3" href="Kampus Merdeka">Kampus Merdeka</a>
        </div>
    </div>
</footer>
<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
    });

    // Autocomplete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
        data: {
            "Aruba": null,
            "Cancun Mexico": null,
            "Hawaii": null,
            "Florida": null,
            "California": null,
            "Jamacia": null,
            "Europe": null,
        }
    });

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});
</script>
</body>

</html>