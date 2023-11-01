<div class="container contact-form">
        <div class="contact-image">
            <!-- <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/> -->
        </div>
        <form method="POST" action="/smma/contactFormProcess.php">
            <h3>Drop Us a Message</h3>
           <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value=""  required/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" required />
                    </div>
                    <div class="form-group">
                        <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required ></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send" />
                    </div>
                    
                </div>
                 <!-- <div class="col-md-6">
                    <img src="images/download.jpeg" class="img-responsive" alt=""> 
                </div>  -->
            </div>
        </form>
    </div>


