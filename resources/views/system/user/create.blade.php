<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="create-edit-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <x-app-card>
                <form id="form" name="form" class="form-horizontal">
                    <div class="modal-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input id="name" name="name" value="" placeholder="Kolom Nama" type="text" class="form-control">
                                <small class="text-danger" id="nameError"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input id="email" name="email" value="" placeholder="Kolom Email" type="text" class="form-control">
                                <small class="text-danger" id="emailError"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input id="username" name="username" value="" placeholder="Kolom Username" type="text" class="form-control">
                                <small class="text-danger" id="usernameError"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select class="form-control" id="active" name="active">
                                        <option>--Pilih--</option>
                                        @foreach (array(1 => 'Active', 0 => 'Inactive') as $key => $v)
                                        <option value="{{ $key }}" {{ !$key ? 'selected' : '' }}>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="col-sm-3 col-form-label">Roles</label>
                            <div class="col-sm-9">
                                <select class="select2 name=" roles[]" form-control select2-multiple" multiple="multiple" multiple="multiple" data-placeholder="Choose ...">
                                    @foreach ($roles as $result)
                                        <option value="{{ $result }}">{{ $result }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-offset-2 col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block" id="button-submit" value="create">Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </x-app-card>
        </div>
    </div>
</div>
