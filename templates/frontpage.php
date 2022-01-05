<?php include 'inc/header.php'; ?>



    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Find A Job</h1>
        <form action="index.php" method="GET">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select><br>
            <button class="btn btn-primary btn-lg" type="submit">FIND</button>
        </form>
        <!-- <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
      </div>
    </div>
    <h3><?php echo $title; ?></h3>
    <?php foreach ($jobs as $job): ?>
        
    <div class="p-3 row align-items-md-stretch mx-auto">
      <div class="col-md-12">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2><?php echo $job->job_title; ?></h2>
          <p><?php echo $job->description; ?></p>
          <a href="job.php?id=<?php echo $job->id; ?> " class="btn btn-outline-light" type="button">View</a>
        </div>
      </div>
      <!-- <div class="col-md-2">
      <a href="#" class="btn btn-outline-dark" type="button">View</a>
      </div> -->
    </div>
    <?php endforeach; ?>

    

<?php include 'inc/footer.php'; ?>