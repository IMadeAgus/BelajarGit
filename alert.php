<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alert</title>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css
" rel="stylesheet">

</head>

<body>
    <button type="button" id="tombol" onclick="Swal.fire('LOG OUT ',' yakin mau log out?',' succes')">logout</button>

    <script src="dist/ sweetalert2.all.min.js"></script>
    <!-- <script>
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    }) -->
    </script>
</body>

</html>