<div data-draggable="true" style="position: relative;" draggable="false" class="" id="contact">
    <!---->
    <!---->
    <section draggable="false" class="overflow-hidden pt-5" data-v-271253ee="">
        <section class="mb-10">
            <!-- Background image -->
            <div class="p-5 bg-image" style="background-image: url(&quot;https://images.unsplash.com/photo-1596524430615-b46475ddff6e?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=Mnw5NjI0M3wwfDF8c2VhcmNofDF8fGNvbnRhY3QlMjB1c3xlbnwwfHx8fDE2NjI2NDk1OTg&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&quot;); height: 300px; background-size: cover; background-position: 50% 50%; background-color: transparent;" aria-controls="#picker-editor"></div> <!-- Background image -->
            <div class="card mx-4 mx-md-5 shadow-5-strong" style=" margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px); ">
                <div class="card-body py-5 px-md-5">
                    <div class="row gx-lg-5 align-items-center">
                        <div class="col-lg-5 mb-4 mb-lg-0">

                            <form method="POST" action="index.php#contact">

                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <input name="sender_name" type="text" id="form4Example1" class="form-control">
                                    <label class="form-label" for="form4Example1" style="margin-left: 0px;">Name</label>
                                    <div class="form-notch">
                                        <div class="form-notch-leading" style="width: 9px;"></div>
                                        <div class="form-notch-middle" style="width: 42.4px;"></div>
                                        <div class="form-notch-trailing"></div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="sender_address" type="email" id="form4Example2" class="form-control">
                                    <label class="form-label" for="form4Example2" style="margin-left: 0px;">Email address</label>
                                    <div class="form-notch">
                                        <div class="form-notch-leading" style="width: 9px;"></div>
                                        <div class="form-notch-middle" style="width: 88px;"></div>
                                        <div class="form-notch-trailing"></div>
                                    </div>
                                </div>

                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <textarea name="message" class="form-control" id="form4Example3" rows="4"></textarea>
                                    <label class="form-label" for="form4Example3" style="margin-left: 0px;">Message</label>
                                    <div class="form-notch">
                                        <div class="form-notch-leading" style="width: 9px;"></div>
                                        <div class="form-notch-middle" style="width: 60px;"></div>
                                        <div class="form-notch-trailing"></div>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" name="send" class="btn btn-success btn-block mb-4" aria-controls="#picker-editor">Send</button>
                                <!-- Submit button -->
                            </form>


                        </div>
                        <div class="col-lg-7 mb-4 mb-md-0">
                            <div class="row gx-lg-5">
                                <div class="col-md-6 mb-5">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="p-3 bg-success rounded-4 shadow-2-strong"> <i class="fas fa-headset fa-lg text-white fa-fw" aria-controls="#picker-editor"></i> </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="fw-bold mb-1">Technical support</p>
                                            <p class="text-muted mb-0">support@cashcrop.com</p>
                                            <p class="text-muted mb-0">+254 704 126 876</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="p-3 bg-success rounded-4 shadow-2-strong"> <i class="fas fa-dollar-sign fa-lg text-white fa-fw" aria-controls="#picker-editor"></i> </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="fw-bold mb-1">Sales questions</p>
                                            <p class="text-muted mb-0">sales@cashcrop.com</p>
                                            <p class="text-muted mb-0">+254 704 126 876</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="p-3 bg-success rounded-4 shadow-2-strong"> <i class="fas fa-newspaper fa-lg text-white fa-fw" aria-controls="#picker-editor"></i> </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="fw-bold mb-1">Press</p>
                                            <p class="text-muted mb-0">press@cashcrop.com</p>
                                            <p class="text-muted mb-0">+254 704 126 876</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="p-3 bg-success rounded-4 shadow-2-strong"> <i class="fas fa-bug fa-lg text-white fa-fw" aria-controls="#picker-editor"></i> </div>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="fw-bold mb-1">Bug report</p>
                                            <p class="text-muted mb-0">bugs@cashcrop.com</p>
                                            <p class="text-muted mb-0">+254 704 126 876</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!---->
</div>

<?php
if (isset($_POST['send'])) {

    // get user data from POST
    $sender_name = $_POST['sender_name'];
    $sender_address = $_POST['sender_address'];
    $message = $_POST['message'];

    // save data in the database
    insert_into_contact($sender_name, $sender_address, $message);
    echo $mysqli_db->error;

    // success or failure message
}
?>