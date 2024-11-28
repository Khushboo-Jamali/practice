<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container">
      <br />
      <h3>Ajax Crud</h3>
      <div
        class="alert alert-success"
        id="msg"
        style="display: none"
        role="alert"
      >
        <?php
            echo 'Data inserted';
            ?>
      </div>
      <form>
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="" id="name" />
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control" name="" id="email" />
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Password</label>
          <input type="text" class="form-control" name="" id="pass" />
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Contact</label>
          <input type="text" class="form-control" name="" id="contact" />
        </div>

        <div class="mb-3">
          <label for="" class="form-label">City</label>
          <select class="form-select form-select-lg" name="" id="city">
            <option selected>Select one</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Karachi">Karachi</option>
            <option value="Islamabad">Islamabad</option>
          </select>
        </div>

        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            value="male"
            name="gen"
            id="male"
          />
          <label class="form-check-label" for="">Male</label>
        </div>

        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            value="female"
            name="gen"
            id="female"
          />
          <label class="form-check-label" for="">Female</label>
        </div>
      </form>

      <button type="submit" id="btn" class="btn btn-dark">Submit</button>
    </div>

    <script src="./jquery-3.7.1.min.js"></script>
    <script>
      $("#btn").click(function () {
        var name = $("#name").val();
        var email = $("#email").val();
        var pass = $("#pass").val();
        var contact = $("#contact").val();
        var city = $("#city").val();
        var gen = $("input[name='gen']:checked").val();

        $.ajax({
          url: "backend.php",
          method: "POST",
          data: {
            n: name,
            e: email,
            p: pass,
            c: contact,
            city: city,
            g: gen,
          },
          success: function (r) {
            console.log(r);
            $("#msg").slideDown("slow");
            showdata();
          },
        });
      });

      function showdata() {
        $.ajax({
          url: "showdata.php",
          method: "POST",
          success: function (data) {
            $("#tbody").html(data);
          },
        });
      }
      showdata();

      document.querySelector("#update").addEventListener("click", (e) => {
        let element = e.target;
        if (element.innerHTML == "Delete") {
          $("#update").slideUp("slow");
          $("#inster").slideUp("slow");
        }
      });
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
