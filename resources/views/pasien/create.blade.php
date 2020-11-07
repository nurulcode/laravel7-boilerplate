<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="rm-modal">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 font-16 text-primary" id="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <x-app-card>
                <form id="form-rm" name="form-rm" class="form-inline">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input id="no_rekam_medis" name="no_rekam_medis" value="" placeholder="Kolom Nama" type="text" class="form-control" readonly>
                            </div>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-primary btn-block" id="button-submit" value="create">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </x-app-card>
        </div>
    </div>
</div>
