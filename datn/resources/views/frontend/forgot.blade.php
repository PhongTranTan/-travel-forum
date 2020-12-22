<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Reset Password</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keyword" content="">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:type" content="website">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta property="twitter:image" content="">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="fb:app_id" content="">
        <meta name="twitter:site" content="">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icons/favicon-16x16.png">
        <link rel="shortcut icon" href="/assets/images/icons/favicon.ico">
        <link rel="manifest" href="/assets/manifest.json">
        <meta name="msapplication-TileColor" content="#f05b28">
        <meta name="msapplication-TileImage" content="/assets/images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#f05b28">
        <link href="/assets/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <main class="wrapper mainPage">
            <section class="p-fullscreen" style="background-image:url(&quot;/images/travel.png&quot;)">
                <div class="container">
                    <div class="form-content form-content-floating wow fadeIn">
                        <form class="form form-validate" action="#" id="frmForgetPassword">
                            <div class="form_title">Reset your password</div>
                            <p>Just enter your email address, and we will send you a link to reset your password.</p>
                            <div class="form-list">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="group-btn">
                                <button class="btn-custom" type="submit">Continue</button>
                            </div>
                            <p class="tip signup-tip"><a href="/">Back to Home</a></p>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <!-- End Main Content-->
        <div class="modal fade" id="modalSuccessSent" tabindex="-1" role="dialog" aria-labelledby="modalSuccessSentLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Successful !</h5>
                    </div>
                    <div class="modal-body">
                        <p>The reset password has sent to your mail</p>
                    </div>
                    <div class="modal-footer"> 
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/library.js"></script>
        <script async src="/assets/js/pages.js"></script>
        <script>
            $('#frmForgetPassword').on('submit',(e)=>{
                e.preventDefault();
                const $form = $(e.currentTarget);
                if (!$form.valid()) return;
                $('#modalSuccessSent').modal('show');
            });
            $('#modalSuccessSent').on('hidden.bs.modal', ()=>{
                window.location.href='/'
            });
        </script>
    </body>
</html>