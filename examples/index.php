<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zettatel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Zettatel SMS API</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Send SMS Batch</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Send SMS Group</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Send SMS File</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Add User Credit</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Get SMS Length / Cost</a></li>
      </ul>
    </header>
  </div>
<div class="container">
    <form class="row g-3" name="form1" id="mainForm" method="post" enctype="multipart/form-data" action="execute.php">
    <div class="col-auto">
        <label for="mobile" class="visually-hidden">Mobile Phone No.</label>
        <input name="mobile" type="text" class="form-control" id="mobile" value="+254722100900">
    </div>  
    <div class="col-auto">   
        <input type="submit" class="btn btn-primary mb-3" name="submit" value="Submit" />
    </div>
    </form>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>