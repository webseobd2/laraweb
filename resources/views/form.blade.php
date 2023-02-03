<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-12 margin-tb">
                <div style="text-align: center;">
                    <h2>Student form</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-success" href="#">Back to index</a>
                </div>
            </div>
        </div>
        <x-form action="/process" method="POST">
        @csrf
            <x-input-text type="name" name="name" class="form-control" placeholder="Enter your name here" label="Name"></x-input-text>
            <x-input-text type="email" name="email" class="form-control" placeholder="Enter your email here" label="Email"></x-input-text>
            <div class="row">
                <div class="cl-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <textarea class="form-control" style="height: 80px;" name="address" placeholder="Your address here"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cl-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                              Female
                            </label>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center cl-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                </div>
            </div>
        </x-form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>