<?php
include './header.php';
include './connect.php'
?>

<head>
    <style>
    .applyButton {
        background-color: #1C46A8;
        color: white;
        border: none;
        width: 150px;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .applyButton:hover {
        color: white;
    }

    .popupUl {
        line-height: 40px;
    }

    .careerInput {
        width: 100%;
        border: none;
        border-bottom: 1px solid black;
    }

    .careerInput:focus {
        border: none;
        outline: none;
        border-bottom: 1px solid black;
    }

    .dropInput {
        width: 100%;
    }

    .upload-container {
        margin-top: 30px;
        margin-bottom: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 200px;
        border: 2px dashed #ccc;
        background-color: #fff;
        text-align: center;
        position: relative;
    }

    .file-upload-input {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .file-upload-label {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        color: #888;
    }

    .upload-icon {
        font-size: 36px;
        margin-bottom: 10px;
        color: #888;
    }
    </style>
</head>
<div class="website-background" style="background-color: #F7FDFF; padding-top:120px">
    <div class="container">
        <?php
        $id = $_GET['id'];
        $sql = $conn->prepare("SELECT * FROM hiring where id=?");
        $sql->bind_param("i", $id); // "i" indicates the type is integer

        $sql->execute();
        $result = $sql->get_result();

        while ($data = $result->fetch_assoc()) {
            $id = $data['id'];
            $position = $data['position'];
        ?>
        <div class="pt-5" style="display:flex; justify-content:between; align-items:center; padding:10%">
            <div class="modal-content" style="padding:5%">
                <h2>Apply for Job</h2>
                <h5 class="pt-3" style="color:#1C46A8; font-weight:700"><?php echo $position; ?></h5>
                <p class="pt-3">To apply for the <?php echo $position; ?> position, please fill out the form below:</p>
                <form method="POST" action="./messier97/upload-career-hire-form.php" enctype="multipart/form-data">
                    <input class="careerInput pt-3" type="text" value="<?php echo $position; ?> " id="name"
                        name="position" hidden placeholder="Your Name *" required><br>
                    <input class="careerInput pt-3" type="text" id="name" name="name" placeholder="Your Name *"
                        required><br>
                    <input class="careerInput pt-5" type="text" id="name" name="phone" placeholder="Mobile Number *"
                        required><br>
                    <input class="careerInput pt-5" type="text" id="name" name="email" placeholder="Email Address *"
                        required><br>
                    <input class="careerInput pt-5" type="text" id="name" name="message" placeholder="Message"
                        required><br>
                    <input class="careerInput pt-5" type="text" id="name" name="linkedin" placeholder="Linkedin Profile"
                        required><br>
                    <select class="dropInput py-2 mt-4" id="source-options" name="choosen" required>
                        <option value="" disabled selected>How did you know our company?</option>
                        <option value="From social media">Social Media</option>
                        <option value="Our site">Company Website</option>
                        <option value="Friends">Job Portal</option>
                        <option value="Friends">Friends</option>
                        <option value="Friends">Other</option>
                    </select>

                    <div class="upload-container">
                        <input type="file" id="file-upload" name="image" class="file-upload-input">
                        <label for="file-upload" class="file-upload-label">
                            <div class="upload-icon"><img width="30" height="30"
                                    src="https://img.icons8.com/fluency-systems-filled/96/7a7a7a/upload.png"
                                    alt="upload" /></div>
                            <span>Please Upload Your CV / Resume</span>
                        </label>
                    </div>
                    <p>If you are unable to submit your details, then please share your recently updated resume at <a
                            href="mailto:apps@mdqualityapps.com">apps@mdqualityapps.com</a>. </p>

                    <button class="applyButton" name="upload" type="submit">Submit</button>
                </form>

            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>