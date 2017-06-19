



<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Page Header
            <small>Gestion D'intro </small>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-4">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">

                        <?php
                        
                        $this->load->library('form_validation');
                        //chargement du helper form
                        $this->load->helper('form');

                        echo form_open('admin/add/about');

                        $data = array(
                            'text' => 'text',
                            'placeholder' => 'Text',
                            'value' => set_value('text'),
                            'name' => 'text',
                        );
                        
                        echo form_textarea($data);

                        echo form_submit('envoi', 'Valider', 'class= "btn btn-primary btn-flat"');

                        echo form_close();
                        ?>
                        
                    </div>
                    <!-- /.tab-pane -->

                    <!-- /.tab-pane -->

                    <!-- /.tab-pane -->
                </div>

                <!-- /.tab-content -->

            </div>
            <!-- nav-tabs-custom -->

        </div>

        <?php foreach ($abouts as $about) { ?> 



            <div class="col-md-4">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">

                            <p><?php echo $about["text"]; ?></p>
                        </div>
                        <!-- /.tab-pane -->

                        <!-- /.tab-pane -->

                        <!-- /.tab-pane -->
                    </div>
                    <button class=" btn btn-primary btn-flat">Modifier</button>
                    <button class="btn btn-danger btn-flat">Suprimer</button>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->

            </div>

        <?php } ?>




        <!-- Your Page Content Here -->
        <!--        <div class="row">-->
        <!--            <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td>Win 98SE+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td>1</td>
                                    <td>A</td>
                                </tr></tbody>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                            </tfoot>
                        </table></div>
                </div>-->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

