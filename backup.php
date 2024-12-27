<?php
// Set the absolute path to the backup folder where All-in-One WP Migration stores backups on the destination website
$backup_directory = 'public_html/wp-content/ai1wm-backups';
$backup_file = 'shanirbhar-com-bd-20241223-115524-ixeyluwqx3sk.wpress';

// Set the absolute path where the backup file currently exists on the source website
$source_file = '/home/user/public_html/prairiewind.ch/wp-content/ai1wm-backups/' . $backup_file;

// Check if the backup file already exists in the destination folder
if (file_exists($backup_directory . $backup_file)) {
    echo "Backup file already exists in the destination folder.";
} else {
    // Move the backup file to the destination (All-in-One WP Migration backups folder)
    if (copy($source_file, $backup_directory . $backup_file)) {
        echo "Backup file successfully moved to the backup folder.";
    } else {
        echo "Failed to move the backup file. Please check your file permissions.";
    }
}
?>
