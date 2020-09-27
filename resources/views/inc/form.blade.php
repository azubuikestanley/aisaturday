    <!-- form start -->
  
  <!-- Modal -->
    <div class="modal fade" id="popModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="popModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="popModalLabel">Enter your Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="recipient-name" class="bmd-label-floating">Name</label>
                            <input type="Text" class="form-control" id="recipient-name" name="name" required>
                            <span class="bmd-help">Enter your full name</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control" id="recipient-email" name="email" required>
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-phone" class="bmd-label-floating">Phone Number</label>
                            <input type="number" class="form-control" id="recipient-email" name="phone" required>
                            <span class="bmd-help">Enter mobile number in format <b>080********</b></span>
                        </div>
                        <div class="form-group mt-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-paperclip" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <label for="recipient-file" class="col-form-label">Attach your file</label>
                                <input type="file" class="form-control" id="recipient-file" name="file" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message</label>
                            <textarea class="form-control" id="message-text" name="message"></textarea>
                        </div>
                        {{-- button  --}}
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- form end -->
