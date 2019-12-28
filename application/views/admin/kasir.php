



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css  " >      

        <div class="main-content row position-relative pb-5">
            <div class="col-xl-9 docs-content pb-5">
              
            
                <!-- <p>Don’t have an already set up development server. No worries! you can start a server using Gulp. Read more about the <a href=build-tools.html>build tools</a> in our docs. This will start server that can be accessed via <code class=highlighter-rouge>http://localhost:3000</code> automatically and also watch for any changes you might make.
                </p> -->

                <h4>Data Kasir</h4>
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
                    +
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Kasir</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="<?= base_url() ?>admin/kasir_tambah" method="post">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email </label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"> </small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                

                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

                            </form>

                        </div>
                        </div>
                    </div>
                </div>



                
                <table id="example" class="table table-cards " style="width:100% ;margin">

                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? 
                            foreach ($data_kasir->result() as $value) {

                        ?>

                        <tr class="table-divider " >

                            <td><?= $value->nama ?></td>
                            <td><?= $value->email ?></td>
                            <td>
                                <a href="<?= base_url() ?>admin/delete_kasir/<?= $value->account_id ?>" class="btn btn-danger btn-sm" onClick="confirm('Hapus Kasir')" > <i class="fa fa-trash"></i> </a>
                            </td>

                        </tr>

                        <? } ?>

                    </tbody>
                   

                </table>
            </div>

        </div>

        