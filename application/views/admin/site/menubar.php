        
        
        <nav class="sidenav navbar navbar-vertical navbar-expand-xs navbar-light bg-white" id=sidenav-main>
            <div class="scrollbar-inner px-4">
                <div class="docs-sidebar pt-6 pt-lg-7">

                    <h6 class=mt-1> Nama : <?= $this->session->userdata('nama') ?></h6>
                    <h6 class=mt-1> Email : <?= $this->session->userdata('email') ?></h6>

                    <ul class="nav flex-column">
                        <li class=nav-item>
                            <a href="<?= base_url() ?>admin/kasir" <?= $this->uri->segment(2) === 'kasir' ? 'class="nav-link active"' : 'class=nav-link' ?> >Kasir</a>
                        </li>
                        <li class=nav-item>
                            <a href="<?= base_url() ?>admin/antrian" <?= $this->uri->segment(2) === 'antrian' ? 'class="nav-link active"' : 'class=nav-link' ?>> Antrian</a>
                        </li>
                        <li class=nav-item>
                            <a href="<?= base_url() ?>admin/loket" <?= $this->uri->segment(2) === 'loket' ? 'class="nav-link active"' : 'class=nav-link' ?>>Loket</a>
                        </li>
                        <li class=nav-item>
                            <a href="<?= base_url() ?>admin/main" <?= $this->uri->segment(2) === 'tiket' ? 'class="nav-link active"' : 'class=nav-link' ?>>Main</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>