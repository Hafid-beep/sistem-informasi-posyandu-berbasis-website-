

<?php $__env->startSection('container'); ?>


<div class="row justify-content-center mt-5">
  <div class="col-lg-4">
    <main class="form-signin w-100 m-auto">
      <?php if(session()->has('errorLogin')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo e(session('errorLogin')); ?>

        </div>
      <?php endif; ?>
      <form method="post" action="/login">
        <?php echo csrf_field(); ?>
        <center> <img class="mb-4" src="../img/logo.PNG" alt="" width="100" height="100"></center>
        <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required autofocus>
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; Rivo Yulio 2022</p>
      </form>
    </main>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\SistemInformasi_Posyandu\resources\views/login.blade.php ENDPATH**/ ?>