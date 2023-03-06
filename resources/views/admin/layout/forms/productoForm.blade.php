    <!-- Buttons trigger modal PRODUCTOS -->
    <button type="button" class="btn-cliente" data-toggle="modal" data-target="#productoModal">
        +
    </button>



    <!-- Modal Producto-->
    <div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content ">
                <div class="modal-header text-center">
                    <h4 class="text-center ml-auto txtNegro">Registrar producto </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mr-2 ml-2 ">
                    <form data-abide novalidate>
                        <div class="row">

                            <div class="col-5 text-left">
                                <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es"> 
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div> --}}
                                <input type="text" placeholder="input img" class="form-control" name="img">
                                <label class="helpText " for="img">Seleccionar Archivo</label>
                            </div>

                            <div class="form-group col-7 ml-auto">
                                <div class="row">
                                    <!---------- Modelo ------------>
                                    <div class="col-6">
                                        <input type="text" placeholder="Código completo" class="form-control"
                                            name="modelo">
                                        <label for="modelo" class="helpText">Modelo</label>
                                    </div>
                                    <!---------- Marca ------------>
                                    <div class="col-6">
                                        <select name="marca" class="custom-select form-control" id="marca"
                                            placeholder="Selecciona">
                                            <option value="" class="select-option" selected hidden>Selecciona
                                            </option>
                                            <option value="" class="select-option">Volcom</option>
                                            <option value="" class="select-option">Antifashion</option>
                                            <option value="" class="select-option">DC</option>
                                        </select>
                                        <label for="marca" class="helpText">Marca</label>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <!---------- Material ------------>
                                    <div class="col-6 ">
                                        <input type="text" class="form-control" name="material">
                                        <label for="material" class="helpText">Material</label>
                                    </div>
                                    <!---------- Categoría ------------>
                                    <div class="col-6">
                                        <select name="categoria" class="custom-select form-control" id="categoria"
                                            placeholder="Selecciona">
                                            <option value="" class="select-option" selected hidden>Selecciona
                                            </option>
                                            <option value="" class="select-option">Tablas</option>
                                            <option value="" class="select-option">Tenis</option>
                                            <option value="" class="select-option">Scooter</option>
                                            <option value="" class="select-option">Ropa</option>
                                        </select>
                                        <label for="categoria" class="helpText">Categoría</label>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <!---------- Tamaño ------------>
                                    <div class="col-6 mr-auto">
                                        <select name="tamano" class="custom-select form-control" id="tamano"
                                            placeholder="Selecciona">
                                            <option value="" class="select-option" selected hidden>Selecciona
                                            </option>
                                            <option value="" class="select-option">XS</option>
                                            <option value="" class="select-option">S</option>
                                            <option value="" class="select-option">M</option>
                                            <option value="" class="select-option">LG</option>
                                            <option value="" class="select-option">XLG</option>
                                        </select>
                                        <label for="tamano" class="helpText">Tamaño</label>
                                    </div>

                                    <!---------- Precio ------------>
                                    <div class="col-6 ml-auto">
                                        <input type="text" placeholder="$ 00.00" class="form-control"
                                            name="precio">
                                        <label for="precio" class="helpText">Precio</label>
                                    </div>
                                </div>


                                <div class="col-3 mx-auto mt-2">
                                    <input type="color" class="form-control" name="color">
                                    <label for="color" class="helpText">Color</label>
                                </div>
                            </div>


                            <div class="col-10 mx-auto mt-4">
                                <textarea class="form-control" name="descripcion" rows="3"></textarea>
                                <label for="descripcion" class="helpText">Descripción</label>

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
