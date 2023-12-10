<!DOCTYPE html>
<html>
<head>
  <title>Vendor Application Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
    }
    .file-input {
      margin-top: 10px;
    }
  </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Vendor Application Form</h1>
    <p>Please fill out the form below to apply for vendor status at our university's shop.</p>
    <form action="process_vendor_application.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="company_name">Company Name:</label>
        <input type="text" class="form-control" id="company_name" name="company_name" required>
      </div>

      <div class="form-group">
        <label for="vendor_name">Contact Person's Name:</label>
        <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
      </div>

      <div class="form-group">
        <label for="position">Contact Person's Position:</label>
        <input type="text" class="form-control" id="position" name="position" required>
      </div>

      <div class="form-group">
        <label for="vendor_email">Email:</label>
        <input type="email" class="form-control" id="vendor_email" name="vendor_email" required>
      </div>

      <div class="form-group">
        <label for="vendor_phone">Phone Number:</label>
        <input type="text" class="form-control" id="vendor_phone" name="vendor_phone" required>
      </div>

      <div class="form-group">
        <label for="vendor_address">Address:</label>
        <textarea class="form-control" id="vendor_address" name="vendor_address" rows="4" required></textarea>
      </div>

      <div class="form-group">
        <label for="product_csv">Upload CSV File (Product Details):</label>
        <input type="file" class="form-control-file" id="product_csv" name="product_csv" accept=".csv" required>
      </div>

      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Submit Application</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
