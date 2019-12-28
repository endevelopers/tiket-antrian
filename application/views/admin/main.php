



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css  " >      

        <div class="main-content row position-relative pb-5">
            <div class="col-xl-9 docs-content pb-5">
              
            
                <!-- <p>Don’t have an already set up development server. No worries! you can start a server using Gulp. Read more about the <a href=build-tools.html>build tools</a> in our docs. This will start server that can be accessed via <code class=highlighter-rouge>http://localhost:3000</code> automatically and also watch for any changes you might make.
                </p> -->

                <h4>Data Main</h4>

                <br>

                <table id="example" class="table table-cards main_tiket" style="width:100% ;margin">

                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Tiket No</th>
                            <th>Loket No</th>
                            <th>Start</th>
                            <th>Finish</th>
                            <th>Durasi</th>
                            <!-- <th>Tools</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        
                        <? foreach ($data_main->result() as $value) { ?>

                        <tr  class="table-divider">

                            <td><?= $value->name ?> <br>  <?= $value->email ?> <br> <?= $value->telp ?> </td>
                            <td><?= $value->tiket_no ?></td>
                            <td><?= $value->loket_no ?></td>
                            <td><?= $value->start ?></td>
                            <td><?= $value->finish ?></td>
                            <td><?= $value->durasi ?></td>

                            <!-- <td>
                                <a href="#" id="users_id" data-id="<?= $value->users_id ?>" class="btn btn-outline-info btn-sm"  data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-link"></i> Data User </a>
                            </td>    -->

                        </tr>

                        <? } ?>

                    </tbody>
                    
                   
                </table>
                <!-- Button trigger modal -->
        

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Main Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item active"></li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary btn-sm"></button> -->
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->





            </div>

        </div>

        