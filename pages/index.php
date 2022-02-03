<?php include 'header.php';?>
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4>My String</h4>
                            </div>
                            <div class="card-body">
                                <form action="action.php" method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Enter Your String</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="given_string" value="<?php echo isset($_POST['btn']) ? $_POST['given_string'] : '';?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Total Words</label>
                                        <div class="col-md-9">
                                            <input type="text" readonly class="form-control" value="<?php echo isset($result) ? $result['word'] : '';?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Total Characters</label>
                                        <div class="col-md-9">
                                            <input type="text" readonly class="form-control" value="<?php echo isset($result) ? $result['char'] : '';?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-outline-info" name="btn" value="Submit"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include 'footer.php';?>