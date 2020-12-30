<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love me ?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F8F8F8;">
    <div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <?php if(isset($_POST['val'])) { ?>
            <?php if($_POST['val'] == 'yes') {?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>แจ้งเตือน!</strong> เย้ดีใจจัง
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } else { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>แจ้งเตือน!</strong> เสียใจจัง :(
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
            <?php } ?>
            <div class="card card-body border-0 shadow-sm text-center">
                <h3>Love Me ?</h3>
                <form action="" method="post" class="mt-3">
                    <button type="submit" class="btn btn-success" name="val" value="yes">Yes</button>
                    <button type="submit" class="btn btn-danger" name="val" value="no">No!</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>