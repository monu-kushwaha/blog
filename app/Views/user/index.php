<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title><?= $title; ?></title>
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
            <form id="survey-form" action="<?php echo base_url('Home/setup'); ?>" method="">
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
                            <label>current role</label>
                            <select id="dropdown" name="role" class="form-control" required>
                                <option disabled selected value>Select</option>
                                <option value="student">Student</option>
                                <option value="job">Full Time Job</option>
                                <option value="learner">Full Time Learner</option>
                                <option value="preferNo">Prefer not to say</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Would you recommend survey to a friend?</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" value="Definitely" name="customRadioInline1"
                                    class="custom-control-input" checked="">
                                <label class="custom-control-label" for="customRadioInline1">Definitely</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" value="Maybe" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Maybe</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline3" value="Not sure" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3">Not sure</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>This survey useful yes or no?</label>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="yes" value="yes" id="yes"
                                    checked="">
                                <label class="custom-control-label" for="yes">Yes</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="no" value="no" id="no">
                                <label class="custom-control-label" for="no">No</label>
                            </div>
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