@extends('team.layouts')

@section('content-head')
@endsection

@section('content-body')
<section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box" style="padding-bottom:30px;padding-left:10px">
                                <div class="box-header">
                                    <h3 class="box-title">Profil <?=ucwords($data_edit->username);?></h3>
                                   
                                </div><!-- /.box-header -->
                                <span class="foto_profil"><img src="../../upload/back_profil_foto/<?=$data_edit->foto_user;?>" class="img-thumbnail"></span>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">

                                        <tbody>
                                        <tr>
                                            <th class="col-md-2">Username</th>
                                            <td><?=$data_edit->username;?></td>
                                            </tr>
                                        <tr>
                                            <th>First Name</th>
                                            <td><?=ucwords($data_edit->first_name);?></td>
                                            </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td><?=ucwords($data_edit->last_name);?></td>
                                            </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?=ucwords($data_edit->email);?></td>
                                            </tr>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                                <p></p>
                                <a href="<?=base_index();?>profil/edit" class="btn btn-primary">Edit Profil</a> <a href="<?=base_index();?>profil/change-password" class="btn btn-primary">Change Password</a>
                            <p></p>
                            </div><!-- /.box -->
                        </div>
                    </div>
                  
                </section><!-- /.content -->
@endsection