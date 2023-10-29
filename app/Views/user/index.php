<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title><?=$title;?></title>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Contact Form</h1>
            <p id="description" class="text-center">
                Thank you for taking the time to help us improve the platform
            </p>
        </header>
        <div class="form-wrap">
            <form id="survey-form" action="<?=base_url('setup');?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="name-label" for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="email-label" for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email"
                                class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="number-label" for="number">Age <small>(optional)</small></label>
                            <input type="number" name="age" id="number" min="10" max="99" class="form-control"
                                placeholder="Age">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="number-label" for="number">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Leave Message</label>
                            <textarea id="comments" class="form-control" name="comment"
                                placeholder="Enter your comment here..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button type="submit" id="submit" class="btn btn-primary btn-block">Submit Survey</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>