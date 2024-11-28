<?php
$conn = mysqli_connect('localhost', 'root', '', 'ajaxCrud');

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>

    <div class="container">
        <br><br><br>
        <h3>All Users Data</h3>
        <br>

        <div
            class="table-responsive">
            <table
                class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">City</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Actions</th>


                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                    $sel = "SELECT * FROM users ";
                    $data = mysqli_query($conn, $sel);
                    if ($data->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
                            echo "   <tr>
                                <td> {$row['id']} </td>
                                <td> {$row['name']}</td>
                                <td> {$row['email']} </td>
                                <td> {$row['contact']} </td>
                                <td>{$row['city']} </td>
                                <td> {$row['gender']} </td>
                                <td>
                                    <button class='btn btn-danger' id='{$row["id"]}'>Delete</button>
                                    <button class='btn btn-success' id='{$row["id"]}'>Update</button>

                                </td>

                            </tr>";
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="./jquery-3.7.1.min.js"></script>
    <script>

    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>