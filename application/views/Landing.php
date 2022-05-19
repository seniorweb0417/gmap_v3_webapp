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
                                <label class="control-label col-sm-3" for="usrname"> Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="usrname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="type"> Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="coor"> Coordinates</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="coor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="phase"> Phase</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phase">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="subphase"> Subphase</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="subphase">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="building"> Building</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="building">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="apt"> Apt</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="apt">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="floor"> Floor</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="floor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="elevator"> Elevator</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="elevator">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="over"> Over</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="over">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="paid_amount"> Paid amount</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="paid_amount">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="remaining_balance"> Remaining balance</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="remaining_balance">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="remaining_years"> Remaining years</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="remaining_years">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="notes"> Notes</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="notes">
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