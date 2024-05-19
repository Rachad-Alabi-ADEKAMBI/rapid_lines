<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rapid Lines | Book fligt tickets with ease</title>

    <?php include 'parts/meta.php'; ?>
</head>
<body id="page1">
<div class="main">

  <section id="content" class="content">
     <div class="container">
      <div class="row ">
        <div class="col-sm-12 col-md-10 mx-auto">
          <h1>
            Rapid Lines
          </h1>

          <form action=''  method="POST" 
          class="form bg-light p-2 text-center" >
              <div class="form__top">
                  <p>
                    Make a search
                  </p>
              </div>
            <div class="row mt-2">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail4">From: </label>
                  <input type="text" class="form-control" id="inputEmail4" 
                  placeholder="From">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail4">To: </label>
                  <input type="text" class="form-control" id="inputEmail4" 
                  placeholder="To">
                </div>
              </div>
            </div>

          

            <div class="row mt-2">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail4">Depart: </label>
                  <input type="date" class="form-control" id="inputEmail4" 
                  placeholder="From">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail4">Return: </label>
                  <input type="date" class="form-control" id="inputEmail4" 
                  placeholder="To">
                </div>
              </div>
            </div>
            

            <div class="row mt-2">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail4">Adults: </label>
                  <input type="number" class="form-control" id="inputEmail4" 
                  placeholder="Adults">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail4">Childrens: </label>
                  <input type="number" class="form-control" id="inputEmail4" 
                  placeholder="Childrens">
                </div>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="inputEmail4">Your email: </label>
                  <input type="email" class="form-control" id="inputEmail4" required
                  placeholder="Your email">
                </div>
              </div>
            </div>

            <button type="submit" 
        onclick="alert('You will receive the results of this query by mail');"
        class="btn btn-primary mt-4 mx-auto">
    Search flight
</button>

             </form> <br> <br>
        </div>
      </div>
     </div>
  </section> 

    <!--footer end-->
  </div>

      <?php include 'parts/script.php'; ?>
</body>
</html>