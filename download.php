<?php 
include('header.php');
include_once 'config.php';

function truncateFileName($fileName, $maxLength) {
    if (strlen($fileName) > $maxLength) {
        return substr($fileName, 0, $maxLength - 3) . '...';
    } else {
        return $fileName;
    }
}

if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    $stmt = $conn->prepare("SELECT file_name FROM files WHERE cid = ?");
    $stmt->bind_param('s', $cid);
    $stmt->execute();
    $stmt->bind_result($fileName);

    if ($stmt->fetch()) {
        // Generate the IPFS gateway link using the CID
        $fileUrl = "https://linknetly.com/st?api=0b8316152950c8bc4230ed6ef05f8acc79362f21&url=https://$cid.ipfs.nftstorage.link/$fileName";

        // Truncate the file name if it's too long
        $displayFileName = truncateFileName($fileName, 20);

        echo "<div class='p-4 text-center'>";
        echo "<a href='$fileUrl' download='$fileName' class='bg-blue-500 text-white px-4 py-2 mt-8 rounded-md hover:bg-blue-600 cursor-pointer'>Download $displayFileName</a>";
        echo "</div>";
    } else {
        // Error handling when CID is not found in the database
        echo "<div class='p-4 text-center text-red-500'>File not found.</div>";
    }
} else {
    echo "<div class='p-4 text-center text-red-500'>Invalid request.</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Download</title>
    <!-- Include Tailwind CSS here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<?php include('footer.php'); ?>