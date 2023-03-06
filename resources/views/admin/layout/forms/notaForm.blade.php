
    <!-- Buttons trigger modal NOTAS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notaModal">
        Registrar Nota
    </button>

    

        <!-- Modal Nota-->
        <div class="modal fade" id="notaModal" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar nota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>


                            <div class="row">
                                <div class="col-8 mx-auto text-left mb-3">
                                    <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                    {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang"
                                            lang="es">
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div> --}}
                                    <input type="text" placeholder="input img" class="form-control" name="img">
                                    <label class="helpText " for="img">Seleccionar Archivo</label>
                                </div>

                                <div class=" col-10 mx-auto mb-0">
                                    <div class="row mb-3">
                                        <!---------- Titulo ------------>
                                        <div class="col mx-auto mb-0">
                                            <label for="titulo" class="helpText ">Titulo</label>
                                            <input type="text" class="form-control" name="titulo">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!---------- Descripción ------------>
                                        <div class="col mx-auto mb-0">
                                            <label for="texto" class="helpText ">Descripción</label>
                                            <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <br>

                                </div>
                                <br>
                            </div>



                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>
