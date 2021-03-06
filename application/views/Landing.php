<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NoSemsar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">NoSemsar</h1>
            <div id="map_canvas"></div>
            <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
            <form role="form" class="form-inline" action="" method="get">
                <div class="form-group">
                    <label for="f_usrname">Added by:</label>
                    <input type="text" class="form-control" id="f_usrname" name="f_usrname" value="<?php echo $f_usrname; ?>">
                </div>
                <div class="form-group">
                    <label for="f_type">Type:</label>
                    <select class="form-control" id="f_type" name="f_type">
                        <option value=""></option>
                        <option value="Rent" <?php echo ($f_type == 'Rent') ? 'selected' : '' ?>>Rent</option>
                        <option value="Sale" <?php echo ($f_type == 'Sale') ? 'selected' : '' ?>>Sale</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_phase">Phase:</label>
                    <select class="form-control" id="f_phase" name="f_phase">
                        <option value=""></option>
                        <option value="One" <?php echo ($f_phase == 'One') ? 'selected' : '' ?>>One</option>
                        <option value="Two" <?php echo ($f_phase == 'Two') ? 'selected' : '' ?>>Two</option>
                        <option value="Three" <?php echo ($f_phase == 'Three') ? 'selected' : '' ?>>Three</option>
                        <option value="Four" <?php echo ($f_phase == 'Four') ? 'selected' : '' ?>>Four</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_subphase">Subphase:</label>
                    <select class="form-control" id="f_subphase" name="f_subphase">
                        <option value=""></option>
                        <option value="A" <?php echo ($f_subphase == 'A') ? 'selected' : '' ?>>A</option>
                        <option value="B" <?php echo ($f_subphase == 'B') ? 'selected' : '' ?>>B</option>
                        <option value="C" <?php echo ($f_subphase == 'C') ? 'selected' : '' ?>>C</option>
                        <option value="D" <?php echo ($f_subphase == 'D') ? 'selected' : '' ?>>D</option>
                        <option value="E" <?php echo ($f_subphase == 'E') ? 'selected' : '' ?>>E</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_building">Building:</label>
                    <input type="text" class="form-control" id="f_building" name="f_building" value="<?php echo $f_building; ?>">
                </div>
                <div class="form-group">
                    <label for="f_apt">Apt:</label>
                    <input type="text" class="form-control" id="f_apt" name="f_apt" value="<?php echo $f_apt; ?>">
                </div>
                <div class="form-group">
                    <label for="f_floor">Floor:</label>
                    <select class="form-control" id="f_floor" name="f_floor">
                        <option value=""></option>
                        <option value="One" <?php echo ($f_floor == 'One') ? 'selected' : '' ?>>One</option>
                        <option value="Two" <?php echo ($f_floor == 'Two') ? 'selected' : '' ?>>Two</option>
                        <option value="Three" <?php echo ($f_floor == 'Three') ? 'selected' : '' ?>>Three</option>
                        <option value="Four" <?php echo ($f_floor == 'Four') ? 'selected' : '' ?>>Four</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_elevator">Elevator:</label>
                    <select class="form-control" id="f_elevator" name="f_elevator">
                        <option value=""></option>
                        <option value="Yes" <?php echo ($f_elevator == 'Yes') ? 'selected' : '' ?>>Yes</option>
                        <option value="No" <?php echo ($f_elevator == 'No') ? 'selected' : '' ?>>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_bedrooms">Bedrooms:</label>
                    <select class="form-control" id="f_bedrooms" name="f_bedrooms">
                        <option value=""></option>
                        <option value="One" <?php echo ($f_bedrooms == 'One') ? 'selected' : '' ?>>One</option>
                        <option value="Two" <?php echo ($f_bedrooms == 'Two') ? 'selected' : '' ?>>Two</option>
                        <option value="Three" <?php echo ($f_bedrooms == 'Three') ? 'selected' : '' ?>>Three</option>
                        <option value="Four" <?php echo ($f_bedrooms == 'Four') ? 'selected' : '' ?>>Four</option>
                        <option value="Five" <?php echo ($f_bedrooms == 'Five') ? 'selected' : '' ?>>Five</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_bathrooms">Bathrooms:</label>
                    <select class="form-control" id="f_bathrooms" name="f_bathrooms">
                        <option value=""></option>
                        <option value="One" <?php echo ($f_bathrooms == 'One') ? 'selected' : '' ?>>One</option>
                        <option value="Two" <?php echo ($f_bathrooms == 'Two') ? 'selected' : '' ?>>Two</option>
                        <option value="Three" <?php echo ($f_bathrooms == 'Three') ? 'selected' : '' ?>>Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_area">Area:</label>
                    <input type="text" class="form-control" id="f_area" name="f_area" value="<?php echo $f_area; ?>">
                </div>
                <div class="form-group">
                    <label for="f_over">Over:</label>
                    <input type="text" class="form-control width-fix-70" id="f_over" name="f_over" value="<?php echo $f_over; ?>">
                </div>
                <div class="form-group">
                    <label for="f_paid_amount">Paid amount:</label>
                    <input type="text" class="form-control width-fix-70" id="f_paid_amount" name="f_paid_amount" value="<?php echo $f_paid_amount; ?>">
                </div>
                <div class="form-group">
                    <label for="f_remaining_balance">Remaining balance:</label>
                    <input type="text" class="form-control width-fix-70" id="f_remaining_balance" name="f_remaining_balance" value="<?php echo $f_remaining_balance; ?>">
                </div>
                <div class="form-group">
                    <label for="f_remaining_years">Remaining years:</label>
                    <select class="form-control width-fix-70" id="f_remaining_years" name="f_remaining_years">
                        <option value=""></option>
                        <option value="One" <?php echo ($f_remaining_years == 'One') ? 'selected' : '' ?>>One</option>
                        <option value="Two" <?php echo ($f_remaining_years == 'Two') ? 'selected' : '' ?>>Two</option>
                        <option value="Three" <?php echo ($f_remaining_years == 'Three') ? 'selected' : '' ?>>Three</option>
                        <option value="Four" <?php echo ($f_remaining_years == 'Four') ? 'selected' : '' ?>>Four</option>
                        <option value="Five" <?php echo ($f_remaining_years == 'Five') ? 'selected' : '' ?>>Five</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_remaining_balance">Total price:</label>
                    <input type="text" class="form-control width-fix-70" id="f_total_price" name="f_total_price" value="<?php echo $f_total_price; ?>">
                </div>
                <div class="form-group">
                    <label for="f_remaining_balance">Quarter payment:</label>
                    <input type="text" class="form-control" id="f_quarter_payment" name="f_quarter_payment" value="<?php echo $f_quarter_payment; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-default" onClick="showAll();">View All</button>
            </form>
        </div>
        <div class="modal fade" id="info_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-lock"></span> Enter your information</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" class="form-horizontal">
                            <input type="hidden" id="coor_lat" value="">
                            <input type="hidden" id="coor_lng" value="">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="usrname"> Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="usrname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="type"> Type</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="type">
                                            <option value=""></option>
                                            <option value="Rent">Rent</option>
                                            <option value="Sale">Sale</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="phase"> Phase</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="phase">
                                            <option value=""></option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                            <option value="Four">Four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="subphase"> Subphase</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="subphase">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="building"> Building</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="building">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="apt"> Apt</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="apt">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="floor"> Floor</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="floor">
                                            <option value=""></option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                            <option value="Four">Four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="elevator"> Elevator</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="elevator">
                                            <option value=""></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="bedrooms"> Bedrooms</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="bedrooms">
                                            <option value=""></option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                            <option value="Four">Four</option>
                                            <option value="Four">Five</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="bathrooms"> Bathrooms</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="bathrooms">
                                            <option value=""></option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="area"> Area</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="area">
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="over"> Over</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="over">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="paid_amount"> Paid amount</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="paid_amount">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="remaining_balance"> Remaining balance</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="remaining_balance">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="remaining_years"> Remaining years</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="remaining_years">
                                            <option value=""></option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                            <option value="Four">Four</option>
                                            <option value="Five">Five</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="total_price"> Total price</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="total_price">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label col-sm-4" for="quarter_payment"> Quarter payment</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="quarter_payment">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="control-label col-sm-2" for="notes"> Notes</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="notes"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onClick="saveMarker();">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="<?php echo base_url() ?>assets/js/gmap.js"></script>
</html>