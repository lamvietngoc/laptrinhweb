<?php $__env->startSection('content'); ?>
    <main class="login-form mt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-75">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                        <div class="row g-0">
                            
                            <div class="col-md-6 d-none d-md-block bg-dark text-white p-5 text-center">
                                <div class="d-flex flex-column h-100 justify-content-center align-items-center">
                                    <h2 class="mb-4">Welcome Back 👋</h2>
                                    <p class="lead">Please login to access the system.</p>
                                    <img src="https://source.unsplash.com/300x200/?technology" class="img-fluid rounded mt-3" alt="Login illustration">
                                </div>
                            </div>

                            
                            <div class="col-md-6 bg-white p-5">
                                <h4 class="mb-4 text-center">Login</h4>
                                <form method="POST" action="<?php echo e(route('user.authUser')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                               value="<?php echo e(old('email')); ?>" required autofocus>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    

                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-dark btn-lg rounded-pill">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Litterature Forest\.ssh\laptrinhweb\laravel11-app\resources\views/crud_user/login.blade.php ENDPATH**/ ?>