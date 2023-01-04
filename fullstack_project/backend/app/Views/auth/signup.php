<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>

</body>

</html>
<section class="vh-100 bg-image" style="background-color: #508bfc;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-3">Create an account</h2>
                            <?php if (isset($validation)) : ?>
                                <div class="alert alert-warning">
                                    <?= $validation->listErrors() ?>
                                </div>
                            <?php endif; ?>

                            <form action="<?php echo base_url('/users/store'); ?>" method="post">

                                <div class="form-outline mb-2">
                                    <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                </div>

                                <div class="form-outline mb-2">
                                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control form-control-lg" />
                                    <label class="form-label">Your Email</label>
                                </div>

                                <div class="form-outline mb-2">
                                    <input type="password" name="password" placeholder="Password" class="form-control form-control-lg" />
                                    <label class="form-label">Password</label>
                                </div>

                                <div class="form-outline mb-2">
                                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control form-control-lg" />
                                    <label class="form-label">Repeat your password</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-2">
                                    <input class="form-check-input me-2" type="checkbox" value="" />
                                    <label class="form-check-label">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                </div>

                                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="http://localhost:8080/users/signin" class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>