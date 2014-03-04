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
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-center">OMDB Search Results</h1>
                    <?php if ($movie->Response != "False") : ?>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Title</th><td><?php echo $movie->Title ?></td>
                                </tr>
                                <tr>
                                    <th>Year</th><td><?php echo $movie->Year ?></td>
                                </tr>
                                <tr>
                                    <th>Rating</th><td><?php echo $movie->Rated  ?></td>
                                </tr>
                                <tr>
                                    <th>Release Date</th><td><?php echo $movie->Released ?></td>
                                </tr>
                                <tr>
                                    <th>Run Time</th><td><?php echo $movie->Runtime ?></td>
                                </tr>
                                <tr>
                                    <th>Genre</th><td><?php echo $movie->Genre ?></td>
                                </tr>
                                <tr>
                                    <th>Director</th><td><?php echo $movie->Director ?></td>
                                </tr>
                                <tr>
                                    <th>Actors</th><td><?php echo $movie->Actors ?></td>
                                </tr>
                                <tr>
                                    <th>Plot</th><td><?php echo $movie->Plot ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <div class="alert alert-danger text-center">The movie you searched was not found in the Open Movie Database.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>