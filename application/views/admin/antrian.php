

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css  " >      

        <div class="main-content row position-relative pb-5">
            <div class="col-xl-9 docs-content pb-5">
              
                <!-- <p>Don’t have an already set up development server. No worries! you can start a server using Gulp. Read more about the <a href=build-tools.html>build tools</a> in our docs. This will start server that can be accessed via <code class=highlighter-rouge>http://localhost:3000</code> automatically and also watch for any changes you might make.
                </p> -->

                <h4>Data Antrian</h4>
                
                <hr>
                <table id="example" class="table table-cards " style="width:100% ;margin">

                    <thead>
                        <tr>
                            <th>Tiket No</th>
                            <th>Loket No</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        <? 
                            foreach ($data_antrian->result() as $value) {
                        ?>

                        <tr class="table-divider " >

                            <td><?= $value->tiket_no ?></td>
                            <td><?= $value->loket_no ?></td>
                            <td>
                                <a href="<?= base_url() ?>admin/delete_antrian/<?= $value->tiket_id ?>" class="btn btn-danger btn-sm" onClick="confirm('Hapus Antrian')" > <i class="fa fa-trash"></i> </a>
                            </td>

                        </tr>

                        <? } ?>

                    </tbody>
                
                </table>
            </div>

        </div>

        