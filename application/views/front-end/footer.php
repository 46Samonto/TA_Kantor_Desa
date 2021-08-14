   <!-- footer -->
    <footer class="indigo darken-2 white-text center">
      <p class="flow-text">Sistem Informasi Kantor Desa Melayu. Copyright 2020.</p>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?=base_url('asset/beranda/');?>js/materialize.min.js"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
        scrollOffset: 50
      });

      const dropdown = document.querySelectorAll('.dropdown-trigger');
      M.Dropdown.init(dropdown);

    </script>
  </body>
</html>