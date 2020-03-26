<?php

$skipped_files = array('.','..');
$storage = __DIR__ . "/storage";
$files_list = array();

if (file_exists($storage)) {
	foreach (scandir($storage) as $file) {
		if (! in_array($file, $skipped_files)) {
			array_push($files_list, $file);
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Data Storage</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
  <h1 class="text-center">Local Data Storage</h1>
	<pre><?php print_r($files_list) ?></pre>
	<div class="container">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th>file name</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
				<?php foreach ($files_list as $file): ?>
					<tr>
						<td><?= pathinfo($file, PATHINFO_FILENAME) ?></td>
						<td>
							<a href="<?= $storage . "/" . $file ?>" class="btn btn-primary">
								<i class="fas fa-download"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="./js/jquery.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/all.min.js"></script>
</body>
</html>
