<?php

include("Conf.php");
include("core/Common.php");
include("core/DB.php");
include("includes/head.php");
include("includes/header.php")


?>
    <section>
        <div class="container">
            <form action="/kreiraj.php" method="POST">
                <div class="row">
                    <div class="col-xs-4 col-lg-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Naziv nove mature
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Naziv</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Opis</label>
                                    <textarea rows="4" class="form-control">
                                    </textarea>
                                </div>
                                <div class="form-group pull-right">
                                    <buttont type="submit" class="btn btn-default"> Kreiraj prvo pitanje </buttont>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php
?>