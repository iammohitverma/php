<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AjaX</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./custom-style.css" />
  </head>

  <body>
    <section class="p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-primary loadHtmlBtn">
              Get External Content
            </button>
          </div>
          <div class="col-md-6">
            <div class="box"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Save data to db form -->
    <section class="bg-warning db_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="mb-3">Form</h3>
            <form id="dbForm" method="POST" action="set-form-data.php">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <input
                    type="text"
                    class="form-control"
                    name="rowId"
                    hidden
                    placeholder="rowId"
                  />
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="name"
                  />
                </div>
                <div class="col-md-12 mb-3">
                  <input
                    type="text"
                    class="form-control"
                    name="email"
                    placeholder="email"
                  />
                </div>
                <div class="col-md-12 mb-3">
                  <input
                    type="text"
                    class="form-control"
                    name="phone"
                    placeholder="phone"
                  />
                </div>
                <div class="col-md-12">
                  <input
                    type="submit"
                    class="btn btn-primary"
                    name="submit"
                    value="Save Data"
                  />
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <form method="POST">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <h3 class="mb-3">Search</h3>
                  <input
                    type="search"
                    name="search"
                    id="searchField"
                    class="form-control"
                    placeholder="Search on Key Up"
                  />
                </div>
              </div>
            </form>
            <!-- Show data from db -->
            <div class="text-center"></div>
            <table class="table table-dark table-hover">
              <thead>
                <tr class="bg-primary text-white">
                  <td>ID</td>
                  <td>NAME</td>
                  <td>EMAIL</td>
                  <td>PHONE</td>
                  <td>Operation</td>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- for jquery ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- for bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!-- for icons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <script>
      jQuery(document).ready(function (event) {
        // load html data from another file using load method jquery
        $(".loadHtmlBtn").click(function () {
          $(".box").load("./test.html");
        });

        // CRUD using ajax live without refreshing
        // Declare form fields
        let form = $("#dbForm");
        let hiddenIdField = $("#dbForm [name='rowId']");
        let nameField = $("#dbForm [name='name']");
        let emailField = $("#dbForm [name='email']");
        let phoneField = $("#dbForm [name='phone']");
        let submitBtn = $("#dbForm [name='submit']");

        // save data to db
        $("#dbForm").submit(function (e) {
          e.preventDefault();

          // serialize form data for all fields
          // collect all values at once and send multiple values by passing in ajax => data : formData;
          let formData = $(this).serialize();

          // getting form field's values
          let hiddenIdFieldVal = hiddenIdField.val();
          let nameFieldVal = nameField.val();
          let emailFieldVal = emailField.val();
          let phoneFieldVal = phoneField.val();

          // obj created for send obj to update data
          let updateformDataOBJ = {
            id: hiddenIdFieldVal,
            name: nameFieldVal,
            email: emailFieldVal,
            phone: phoneFieldVal,
          };

          // check if hidden field value set which is set onedit button
          // based on hidden id field's value we will run function
          hiddenIdFieldVal
            ? updateDataFun(updateformDataOBJ)
            : saveDataFun(formData);

          resetForm();
        });

        // saveDataFun (initial)
        function saveDataFun(formData) {
          $.ajax({
            url: "save-form-data.php",
            type: "POST",
            data: formData,
            success: function (result) {
              loadDataFromDB();
            },
          });
        }

        // updateDataFun
        function updateDataFun(formDataOBJ) {
          $.ajax({
            url: "update-form-data.php",
            type: "POST",
            dataType: "json",
            data: formDataOBJ,
            success: function (result) {
              console.log(result);
              if (result == 1) {
                loadDataFromDB();
              }
            },
          });
        }

        // after run above function we need to clear old values
        function resetForm() {
          hiddenIdField.val("");
          nameField.val("");
          emailField.val("");
          phoneField.val("");
          submitBtn.val("Save Data");
        }

        // loadDataFromDB on button click
        $(".getDataFromDb").click(function (e) {
          loadDataFromDB();
        });

        // load data from db without any button click
        function loadDataFromDB() {
          $.ajax({
            url: "get-form-data.php",
            type: "GET",
            success: function (result) {
              $("table tbody").html(result);
              // runFunctionAfterGet();  //this is old  let's try new method afer Dynamic html comes in our document
            },
          });
        }

        // onload data load from db
        loadDataFromDB();

        /******************************** DELETE DATA ********************************************/
        $(document).on("click", ".deleteBtn", function (e) {
          //add event for dynamic fields
          e.preventDefault();

          if (confirm("Are you sure you want to delete")) {
            // let currId = $(this).attr("data-row");
            let currElem = $(this);
            let currId = $(this).data("delrow");

            $.post({
              url: "delete-form-data.php",
              type: "POST",
              data: { id: currId },
              success: function (result) {
                // loadDataFromDB(); // method-1 you can run this and get updated data
                // method-2
                if (result == 1) {
                  $(currElem).closest("tr").remove();
                  resetForm();
                }
              },
            });
          }
        });

        /******************************** EDIT DATA ********************************************/
        $(document).on("click", ".editBtn", function (e) {
          //add event for dynamic fields
          e.preventDefault();

          let currElem = $(this);
          let currId = $(this).data("edrow");

          // define form's value according to clicked id
          $.ajax({
            url: "show-data-before-update.php",
            type: "POST",
            data: { id: currId },
            success: function (result) {
              // convert text into Javascript obj
              let parsedObj = JSON.parse(result);
              hiddenIdField.val(parsedObj[0]);
              nameField.val(parsedObj[1]);
              emailField.val(parsedObj[2]);
              phoneField.val(parsedObj[3]);
              submitBtn.val("Update");
            },
          });
        });

        // searchField search functionality
        $("#searchField").keyup(function () {
          let searchFieldVal = $(this).val();

          $.ajax({
            url: "search-live.php",
            type: "POST",
            data: { searchVal: searchFieldVal },
            success: function (result) {
              if (result != "0") {
                // convert text into Javascript obj
                let parsedObj = JSON.parse(result);
                var filteredRow = parsedObj.filter(function (el) {
                  return el != "";
                });

                console.log(filteredRow);
                $("table tbody tr").hide();
                filteredRow.forEach((element) => {
                  $(`table tbody tr[data-row="${element}"]`).show();
                });
              } else {
                $("table tbody tr").hide();
              }
            },
          });
        });

        /******************************** jQuery DOCUMENT READY END ********************************************/
      });

      /****************************************************************************/
      /*************************  Not regading AJAX  ******************************/
      /****************************************************************************/
      // JAVASCRIPT
      // click on document and add listener for dynamically selector
      // which comes after script load
      // try this because it shows undefined due selector not found
      // document.addEventListener("click", documentClick);
      // function documentClick(event) {
      //   console.log(event.target);
      //   let isEditBtn = event.target.classList.contains("editBtn");
      //   (isEditBtn) ? editMe() : "";
      // }

      // function editMe(e) {
      //   console.log("as");
      // }
      /****************************************************************************/
      /*************************  Not regading AJAX  ******************************/
      /****************************************************************************/
    </script>
  </body>
</html>
