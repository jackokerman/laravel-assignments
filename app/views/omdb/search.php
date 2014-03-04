<!DOCTYPE html>
<html>
    <head>
        <title>DVD Search</title>
        <?php echo HTML::style("css/bootstrap.min.css") ;?>
        <?php echo HTML::style("css/bootstrap-theme.min.css") ;?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="text-center">OMDB Search</h1>
                    <form method="get" action="/omdb/results">
                        <div class="form-group">
                            <label>Movie Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>