    <div class="modal-header bg-red">
        <h4 class="modal-title" id="smallModalLabel">
        ELIMINAR PERSONAL
        </h4><br>
    </div>
    <form id="f11" name="f11" class="" role="form" method="post" action="{{url('/deletPersona')}}"> 
        {{csrf_field()}}
        <input name="_method" type="hidden" value="POST">
        <input type="hidden" name="id" value="<?= $row->id_persona?>">
        <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group form-float input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line focused">
                                            <input type="text" name="nombre" id="nombre" value="{{$row->nombre}}" class="form-control" placeholder="Nombre" required aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="paterno" id="paterno" value="{{$row->paterno}}" class="form-control" placeholder="Paterno">
                                        </div>
                                        <span class="input-group-addon">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="materno" value="{{$row->materno}}" class="form-control" placeholder="Materno">
                                        </div>
                                        <span class="input-group-addon">
                                        </span>
                                    </div>
                                </div>
                            </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">picture_in_picture</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="ci" id="ci" value="{{$row->ci}}" class="form-control" placeholder="Cédula" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group form-group">
                                        <div class="form-line">                                            
                                            <input type="text" name="ci" id="ci" value="{{$row->expedido}}" class="form-control" placeholder="Cédula" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">camera_alt</i>
                                        </span>
                                        <div class="">
                                            <img src="{{url('uploads_files/'.$row->foto)}}" class="archivo3" style="height:70px; width:100px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">location_on</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="zona" value="{{$row->zona}}" class="form-control" placeholder="Zona/Villa">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="calle" value="{{$row->calle}}" class="form-control" placeholder="Calle/Av.">
                                        </div>
                                        <span class="input-group-addon">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="num" value="{{$row->numero}}" class="form-control" placeholder="Número">
                                        </div>
                                        <span class="input-group-addon">
                                        </span>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="tel" value="{{$row->telefono}}" class="form-control" placeholder="Teléfono">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone_iphone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="cel" value="{{$row->celular}}" class="form-control" placeholder="Celular" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="email" name="email" value="{{$row->email}}" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger waves-effect"> Si, Eliminar <i class="material-icons">delete_sweep</i></button>
            <a type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="material-icons"></i> Cancelar <i class="material-icons">block</i></a>
        </div>
    </form>

