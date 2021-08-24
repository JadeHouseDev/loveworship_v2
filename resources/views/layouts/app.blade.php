<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LWCC CMS</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    @livewireStyles

    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/assets/img/eballot_favicon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/assets/img/eballot_favicon.png") }}">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/w3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bamburgh.min.css') }}">

</head>

<body>

    <div class="app-wrapper">
        {{-- sidebar nav --}}
        <livewire:sidebar />
        <div class="sidebar-mobile-overlay"></div>

        <div class="app-main">

            <livewire:appheader />
            <div class="app-content">
                <div class="app-content--inner">
                    {{-- SET TOP TABS --}}
                    @livewire('toptabs')
                    {{-- SET TOP TABS --}}
                    {{ $slot }}

                    <div class="app-footer font-size-sm text-black-50">
                        <div>
                            &copy; 2021 - LWCC CMS <a href="" target="_blank">JadeHouse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {{ $slot }} --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"
        defer>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"
        defer>
    </script>
    <script src="{{ asset("/assets/vendor/bootstrap/js/bootstrap.min.js") }}" defer></script>
    <script src="{{ asset("/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.min.js") }}" defer></script>
    <script src="{{ asset("/assets/js/bamburgh.min.js") }}" defer></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.1.4/css/fixedHeader.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/keytable/2.5.0/css/keyTable.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/scroller/2.0.0/css/scroller.bootstrap4.min.css" />

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js" defer></script>

    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js" defer></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js" defer></script>

    <script src="https://cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js" defer></script>
    <script src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js" defer></script>
    <script src="https://cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap4.min.js" defer></script>

    <!--Datatables init-->
    <script src="{{ asset("/assets/js/demo/datatables/datatables.min.js") }}" defer></script>

    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    {{-- <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script> --}}

    @livewireScripts
    {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}
</body>

</html>
