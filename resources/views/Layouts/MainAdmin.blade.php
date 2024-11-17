<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="../../assets/admin/assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="../../assets/admin/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../../assets/admin/assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/admin/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../../assets/admin/assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/admin/assets/css/demo.css" />
    <script src="../../assets/tinymce/js/tinymce/tinymce.min.js"></script>
  </head>


  <body>

        @include('Partials.HeaderAdmin')

        @include('Partials.SidebarAdmin')

        @yield('Container')

        @include('Partials.FooterAdmin')

    </body>

<script src="assets/tinymce/js/tinymce/tinymce.min.js"></script>

  <script type="text/javascript">

  tinymce.init({

      selector: "textarea",

      plugins: [

          "advlist autolink lists link image charmap print preview anchor",

          "searchreplace visualblocks code fullscreen",

          "insertdatetime media table contextmenu paste"

      ],

  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"

  });

  </script>
</html>
