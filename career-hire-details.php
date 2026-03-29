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
    </style>
</head>
<div class="website-background" style="background-color: #F7FDFF; padding-top:90px">
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
            $descriptions = $data['descriptions'];
            $requirements = $data['requirement'];
        ?>
        <div class="pt-5" style="display:flex;  justify-content: space-between; align-items:center">
            <div>
                <h4 style="font-weight:800; color:#1C46A8; "><?php echo $position; ?></h4>
                <p>Chennai</p>
            </div>
            <a href="career-hire-form.php?id=<?php echo $id; ?>">
                <button class="applyButton btn hideApply">Apply now</button>
            </a>
        </div>
        <h4 style="font-weight:800; color:#1C46A8; ">Job description</h4>

        <?php
            $descriptions = json_decode($data['descriptions'], true);
            foreach ($descriptions as $description) {
                echo "<ul><li>$description</li></ul>";
            }
            ?>

        </ul>
        <div class="py-3">
            <h4 style="font-weight:800; color:#1C46A8;">Requirements</h4>
            <?php
            $requirements = json_decode($data['requirement'], true);
            foreach ($requirements as $requirement) {
                echo "<ul><li>$requirement</li></ul>";
            }
            ?>
        </div>
        <?php } ?>
    </div>
</div>
<?php
include './footer.php';
?>